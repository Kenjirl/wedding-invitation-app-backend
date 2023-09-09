<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wedding Invitation | Leo & Vania</title>
</head>
<body>
    <form action="{{ route('undangan.check-code') }}" method="post">
        @csrf
        <input id="code" name="code" type="text" placeholder="masukkan kode undangan anda">
        <button type="submit">Submit</button>
    </form>
</body>
</html>