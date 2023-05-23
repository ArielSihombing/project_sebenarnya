<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h3>Data mahahsiswa</h3>

    <a href="/coba/tambah"> + Tambah mahasiswa Baru</a>

    <br />
    <br />

    <table border="1">
        <tr>
            <th>nama</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
        </tr>
        @foreach($contacts as $c)
        <tr>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->subject }}</td>
            <td>{{ $c->message }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $c->id }}">Edit</a>

                <a href="/mahasiswa/hapus{{ $c->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>


</body>