<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h3>Data mahahsiswa</h3>

    <a href="/coba/tambah"> + Tambah mahasiswa Baru</a>

    <br />
    <br />

    @foreach($videos as $video)
    <video width="640" height="360" controls>
        <source src="{{ $video->video_music }}" type="video/webm">
        Your browser does not support the video tag.
    </video>
      @endforeach


</body>