@extends('admin.layout')

@section('heading')
    <h2>Daftar Tamu</h2>
@endsection

@section('content')
<div class="table-container">
    <div class="data-container">
        <div>
            <h3>Jumlah Undangan</h3>
            <p><b>{{ $ivtCount }}</b></p>
        </div>
        <div>
            <h3>Undangan Terkirim</h3>
            <p class="hijau"><b>{{ $ivtSentCount }}</b></p>
        </div>
        <div>
            <h3>Undangan Belum Terkirim</h3>
            <p class="kuning"><b>{{ $ivtNotSentCount }}</b></p>
        </div>
    </div>
    <table id="listUndangan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Status Undangan</th>
                <th>Aksi</th>
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
                    <td>{{ $tamu->status }}</td>
                    <td>
                        <div class="action-wrapper">
                            @if ($tamu->status === 'Belum Terkirim')
                                <a href="{{ $waMessage[$loop->index] }}" target="_blank" class="wa-btn" type="button"><i class="fa-brands fa-whatsapp"></i></a>
                                <form id="{{ "delete-form" . $tamu->id }}" action="{{ route('admin.delete-tamu', $tamu->id) }}" method="post">
                                    @csrf
                                    <button class="del-btn" type="button" onclick="confirmDelete({{ $tamu->id }})"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                <form id="{{ "sent-form" . $tamu->id }}" action="{{ route('admin.sent-tamu', $tamu->id) }}" method="post">
                                    @csrf
                                    <button class="sent-btn" type="button" onclick="confirmSent({{ $tamu->id }})"><i class="fa-solid fa-check-to-slot"></i></button>
                                </form>
                            @else
                                <button class="disabled-btn" type="button" disabled><i class="fa-brands fa-whatsapp"></i></button>
                                <form id="{{ "delete-form" . $tamu->id }}" action="{{ route('admin.delete-tamu', $tamu->id) }}" method="post">
                                    @csrf
                                    <button class="del-btn" type="button" onclick="confirmDelete({{ $tamu->id }})"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                    <button class="disabled-btn" type="button" disabled"><i class="fa-solid fa-check-to-slot"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="add-form-container">
    <form action="{{ route('admin.add-tamu') }}" method="post">
        @csrf
        <h3>Tambah Undangan</h3>
        <div class="input-container">
            <label class="input-label" for="nama">Nama Undangan</label>
            <input id="nama" name="nama" class="nama" type="text" placeholder="masukkan nama tamu" autofocus required>
        </div>
        <div class="input-container">
            <label class="input-label" for="no_tlp">No. Whatsapp</label>
            <input id="no_tlp" name="no_tlp" class="no_tlp" type="number" placeholder="08xxxxxxxxxx" required>
        </div>
        <div class="input-container">
            <span class="input-label">Gender</span>
            <div class="gender-container">
                <div>
                    <input id="male" name="gender" type="radio" value="1" checked>
                    <label for="male" class="male"><i class="fa-solid fa-mars"></i></label>
                </div>
                <div>
                    <input id="female" name="gender" type="radio" value="2">
                    <label for="female" class="female"><i class="fa-solid fa-venus"></i></label>
                </div>
            </div>
        </div>
        <button class="submit-btn" type="submit">Submit</button>
    </form>
</div>

<script>
    function confirmDelete(id) {
        if (confirm('Yakin ingin menghapus data tamu ini?')) {
            let deleteFormId = 'delete-form' + id;
            document.getElementById(deleteFormId).submit();
        }
    }

    function confirmSent(id) {
        if (confirm('Apakah anda yakin sudah mengirim undangan kepada tamu ini?')) {
            let sentFormId = 'sent-form' + id;
            document.getElementById(sentFormId).submit();
        }
    }
</script>
@endsection