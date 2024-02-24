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
        <li><a href="/dash">Dashboard</a></li>
        <li><a href="/profile">Profile</a></li>
        <li><a href="/coba">Test</a></li>
    </ul>
</nav>

<h1>Profile</h1>
<div style="margin-left: 20px">
    <p>Nama             : {{ $nama }}</p>
    <p>Program Studi    : {{ $prodi }}</p>
</div>

</body>
</html>