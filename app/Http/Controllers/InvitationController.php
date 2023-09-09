<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index() {
        return view('invitation.index');
    }

    public function check_code(Request $req) {
        $link = $req->code;
        $tamu = Invitation::where('link', $link)->first();

        if ($tamu) {
            return redirect()->route('undangan.tamu', $link);
        }

        return redirect()->route('undangan.index')->with('error', 'Kode yang anda masukan tidak terdaftar');
    }

    public function tamu($link) {
        $tamu = Invitation::where('link', $link)->first();

        if ($tamu) {
            return view('invitation.undangan', compact('tamu'));
        }

        return redirect()->route('undangan.index')->with('error', 'Kode yang anda masukan tidak terdaftar');
    }
}
