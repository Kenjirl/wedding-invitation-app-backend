@extends('admin.layout')

@section('heading')
    <h2>Daftar Ucapan/Doa</h2>
@endsection

@section('content')
<div class="table-container">
    <table id="listUndangan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th class="table-wish-head">Ucapan</th>
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
                    <td class="table-wish-text">{{ substr($tamu->wish, 0, 40) . '...' }}</td>
                    <td>
                        <div class="action-wrapper">
                            <button class="show-btn" type="button" onclick="openWishModal({{ $tamu->id }})"><i class="fa-solid fa-eye"></i></button>
                        </div>
                    </td>
                </tr>

                <dialog id="{{ "modal-" . $tamu->id }}" class="wish-modal">
                    @if ($tamu->id%2)
                        <div class="wish-card odd">
                    @else
                        <div class="wish-card even">
                    @endif
                        <div class="wish-img-container">
                            <img src="/img/wedding-img/1.jpg" alt="">
                            <span>Congratulations!</span>
                        </div>
                    </div>
                    <div class="wish-message">
                        <h3>Wedding Wish</h3>
                        <p>{{ $tamu->wish }}</p>
                        <div>
                            <span>From: {{ $tamu->nama }}</span>
                            <button class="close-btn" type="button" onclick="closeWishModal({{ $tamu->id }})">Close</button>
                        </div>
                    </div>
                </dialog>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function openWishModal(id) {
        let modalId = 'modal-' + id;
        document.getElementById(modalId).showModal();
    }

    function closeWishModal(id) {
        let modalId = 'modal-' + id;
        document.getElementById(modalId).close();
    }
</script>
@endsection