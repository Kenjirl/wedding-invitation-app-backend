<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function daftar_tamu() {
        $title = 'dt';

        $tamus = Invitation::where('deleted', 0)->orderBy('created_at', 'DESC')->get();

        $ivtCount = Invitation::where('deleted', 0)->count();
        $ivtSentCount = Invitation::where('deleted', 0)->where('status', 'Terkirim')->count();
        $ivtNotSentCount = Invitation::where('deleted', 0)->where('status', 'Belum Terkirim')->count();

        $waMessage = [];

        foreach ($tamus as $tamu) {
            $namaTamu = $tamu->nama;
            $phoneNumber = (string) $tamu->no_tlp;
            $link = "http://127.0.0.1:8000/" . $tamu->link;

            $isiPesan = "Dear {$namaTamu},\n\nMari datang ke acara pernikahan Leonardo Da Vinci dan Vania Putri Mahkota, yang akan dilaksanakan pada :\nWaktu : Jumat, 31 Mei 2023\nTempat : Nusa Dua, Denpasar, Bali\n\nUntuk lebih lengkapnya bisa dicek melalui tautan {$link} ini, dan mohon berikan juga respon anda terkait kehadiran anda dalam perayaan suci ini.\n\nSalam hangat,\nLeo dan Vania";

            $encodePhoneNumber = urlencode($phoneNumber);
            $encodeMessage = urlencode($isiPesan);

            $waURL = "https://wa.me/{$encodePhoneNumber}?text={$encodeMessage}";

            $waMessage[] = $waURL;
        }

        return view('admin.daftar-tamu', compact(
            'title', 'tamus', 'ivtCount', 'ivtSentCount' , 'ivtNotSentCount', 'waMessage'
        ));
    }

    public function add_tamu(Request $req) {
        $req->validate([
            'nama' => 'required',
            'no_tlp' => 'required',
            'gender' => 'required'
        ]);

        // Nomor Ponsel
        $stringPhoneNumber = (string) $req->no_tlp;
        $stringReplace = preg_replace('/^0/', '62', $stringPhoneNumber);
        $phoneNumber = (int) $stringReplace;

        // Link
        $currentDatetime = Carbon::now()->format('Y-m-d H:i:s');
        $hashedValue = Hash::make($currentDatetime);
        $trimmedHash = substr($hashedValue, 7, 8);

        $undangan = new Invitation();
        $undangan->nama = $req->nama;
        $undangan->no_tlp = $phoneNumber;
        $undangan->gender = $req->gender;
        $undangan->link = $trimmedHash;
        $success = $undangan->save();

        if ($success) {
            return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil menambah data tamu baru');
        }

        return redirect()->route('admin.daftar-tamu')->with('fail', 'Gagal menambah data');
    }

    public function delete_tamu($id) {
        $undangan = Invitation::find($id);
        $undangan->deleted = 1;
        $undangan->save();

        return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil menghapus data tamu');
    }

    public function sent_tamu($id) {
        $undangan = Invitation::find($id);
        $undangan->status = 1;
        $undangan->save();

        return redirect()->route('admin.daftar-tamu')->with('success', 'Berhasil mengubah status pengiriman undangan');
    }

    public function rsvp() {
        $title = 'rsvp';
        $jumlahHadir = Invitation::where('deleted', 0)->where('status', 'Terkirim')->where('respons', 'Hadir')->count();
        $jumlahPending = Invitation::where('deleted', 0)->where('status', 'Terkirim')->where('respons', 'Belum Menjawab')->count();
        $jumlahTidakHadir = Invitation::where('deleted', 0)->where('status', 'Terkirim')->where('respons', 'Tidak Hadir')->count();
        $totalTamuHadir = Invitation::where('deleted', 0)->sum('jumlah');

        $tamus = Invitation::where('deleted', 0)->where('status', 'Terkirim')->orderBy('respons', 'ASC')->get();

        return view('admin.rsvp', compact(
            'title', 'tamus', 'jumlahHadir', 'jumlahPending', 'jumlahTidakHadir', 'totalTamuHadir'
        ));
    }

    public function wishes() {
        $title = 'wishes';

        $tamus = Invitation::where('deleted', 0)->where('status', 'Terkirim')->orderBy('updated_at', 'DESC')->get();

        return view('admin.wishes', compact(
            'title', 'tamus'
        ));
    }
}
