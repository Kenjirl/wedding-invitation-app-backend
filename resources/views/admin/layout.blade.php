<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a65338b3.js" crossorigin="anonymous" defer></script>
    <title>Wedding Invitation | Admin</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div>
                <h1>Panel Admin</h1>
                <div class="menu">
                    <a class="menu-btn {{ ($title === "dt" ? 'menu-active' : '') }}" 
                        href="{{ route('admin.daftar-tamu') }}">
                        <i class="fa-solid fa-list"></i>
                        <span>Daftar Tamu</span>
                    </a>
                    <a class="menu-btn {{ ($title === "rsvp" ? 'menu-active' : '') }}" 
                        href="{{ route('admin.rsvp') }}">
                        <i class="fa-solid fa-envelope"></i>
                        <span>RSVPs</span>
                    </a>
                    <a class="menu-btn {{ ($title === "wishes" ? 'menu-active' : '') }}" 
                        href="{{ route('admin.wishes') }}">
                        <i class="fa-solid fa-hands-praying"></i>
                        <span>Wishes</span>
                    </a>
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <button class="menu-btn" type="submit">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="header">
                @yield('heading')
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#listUndangan').DataTable();
        })
    </script>
</body>
</html>
