<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Pelamar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <a href="{{ route('pelamars.index') }}" class="btn btn-md btn-dark mb-3">KEMBALI</a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <p class="tmt-3">
                            {!! $pelamar->content !!}
                        </p>

                        <table style="width:100%">
                        <tr>
                            <th>POSISI DILAMAR</th>
                            <td>{{ $pelamar->posisi }}</td>
                          </tr>  
                        <tr>
                            <th>NAMA LENGKAP</th>
                            <td>{{ $pelamar->nama_lengkap }}</td>
                          </tr>
                          <tr>
                            <th>NAMA PANGGILAN</th>
                            <td>{{ $pelamar->nama_panggilan }}</td>
                          </tr>
                          <tr>
                            <th>TEMPAT LAHIR</th>
                            <td>{{ $pelamar->tempat_lahir }}</td>
                          </tr>
                          <tr>
                            <th>JENIS KELAMIN</th>
                            <td>{{ $pelamar->jk }}</td>
                          </tr>
                          <tr>
                            <th>KEBANGSAAN/SUKU</th>
                            <td>{{ $pelamar->kebangsaan }}/{{ $pelamar->suku }}</td>
                          </tr>
                          <tr>
                            <th>AGAMA</th>
                            <td>{{ $pelamar->agama }}</td>
                          </tr>
                          <tr>
                            <th>SEKOLAH</th>
                            <td>{{ $pelamar->sekolah }}</td>
                          </tr>
                          <tr>
                            <th>JURUSAN</th>
                            <td>{{ $pelamar->jurusan }}</td>
                          </tr>
                          <tr>
                            <th>IPK</th>
                            <td>{{ $pelamar->ipk }}</td>
                          </tr>
                          <tr>
                            <th>ALAMAT</th>
                            <td>{{ $pelamar->alamat }}</td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>