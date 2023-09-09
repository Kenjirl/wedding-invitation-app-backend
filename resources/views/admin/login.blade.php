<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/46a65338b3.js" crossorigin="anonymous" defer></script>
    <title>Wedding Invitation | Login</title>
</head>
<body>
    <div class="login-page">
        @if (session()->has('loginFailed'))
            <div class="login-error">
                <span>Nama Pengguna atau Kata Sandi tidak cocok</span>
                <i class="fa-solid fa-circle-xmark" onclick="closeError()"></i>
            </div>
        @endif

        <div class="login-container">
            <h1>Login</h1>
            <form action="{{ route('admin.login') }}" method="post" class="login-form">
                @csrf
                <div class="login-input-container">
                    <label for="name">Nama Pengguna</label>
                    <input placeholder="masukkan nama pengguna" id="name" name="name" type="text" autofocus required value="{{ old('name') }}">
                </div>
                <div class="login-input-container">
                    <label for="password">Kata Sandi</label>
                    <input placeholder="masukkan kata sandi" id="password" name="password" type="password" required>
                    <i id="togglePassword" class="fa-solid fa-eye" toggle-value="invisible" onclick="togglePassword()"></i>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        function togglePassword() {
            const toggleBtn = $('#togglePassword');
            const toggleValue = toggleBtn.attr('toggle-value');
            const passInput = $('#password').get(0);

            if (toggleValue === 'invisible') {
                toggleBtn.removeClass('fa-eye');
                toggleBtn.addClass('fa-eye-slash');
                toggleBtn.attr('toggle-value', 'visible');
                passInput.type = 'text';
            } else {
                toggleBtn.removeClass('fa-eye-slash');
                toggleBtn.addClass('fa-eye');
                toggleBtn.attr('toggle-value', 'invisible');
                passInput.type = 'password';
            }
        }

        function closeError() {
            $('.login-error').css('display', 'none');
        }
    </script>
</body>
</html>