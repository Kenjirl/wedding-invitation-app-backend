@extends('admin.layout')

@section('heading')
    <h2>Daftar RSVP</h2>
@endsection

@section('content')
<div class="table-container">
    <div class="data-container">
        <div>
            <h3>Respon Hadir</h3>
            <p class="hijau"><b>{{ $jumlahHadir }}</b></p>
        </div>
        <div>
            <h3>Belum Menjawab</h3>
            <p class="kuning"><b>{{ $jumlahPending }}</b></p>
        </div>
        <div>
            <h3>Respon Tidak Hadir</h3>
            <p class="merah"><b>{{ $jumlahTidakHadir }}</b></p>
        </div>
        <div>
            <h3>Total Tamu Hadir</h3>
            <p><b>{{ $totalTamuHadir }}</b></p>
        </div>
    </div>
    <table id="listUndangan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Respon</th>
                <th>Alasan</th>
                <th>Jumlah Tamu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $loop->iteration . "." }}</td>
                    @if ($tamu->gender === 'Pria')
                        <td>{{ $tamu->nama }} (<i class="fa-solid fa-mars male"></i>)</td>
                    @else
                        <td>{{ $tamu->nama }} (<i class="fa-solid fa-venus female"></i>)</td>
                    @endif

                    @if ($tamu->respons === 'Hadir')
                        <td class="hadir">{{ $tamu->respons }}</td>
                    @elseif ($tamu->respons === 'Belum Menjawab')
                        <td class="pending">{{ $tamu->respons }}</td>
                    @else
                        <td class="tidak-hadir">{{ $tamu->respons }}</td>
                    @endif

                    <td>{{ $tamu->alasan }}</td>
                    <td>{{ $tamu->jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection