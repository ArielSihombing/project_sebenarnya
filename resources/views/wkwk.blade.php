<head>

</head>

<body>

    <h3>Data mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br />
    <br />

    <form action="//store" method="post">
        {{ csrf_field() }}
        nama <input type="text" name="nama"> <br />
        email <input type="text" name="email"> <br />
        subject <input type="text" name="subject"> <br />
        message <textarea name="message"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>



</body>

</html>