<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/satu">Dashboard</a></li>
        <li><a href="/dua">Profile</a></li>
        <li><a href="/tiga">Test</a></li>
    </ul>
</nav>

<h1>Selamat Datang, {{ $nama }}!!</h1>

@foreach ($matkul as $mt )
<li>{{ $mt }}</li>
@endforeach

</body>
</html>