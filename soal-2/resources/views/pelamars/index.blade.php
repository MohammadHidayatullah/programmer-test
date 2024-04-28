<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data pelamars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Daftar Pelamar Creative Media</h3>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('pelamars.create') }}" class="btn btn-md btn-success mb-3">TAMBAH pelamar</a>
                        <div class="overflow-auto"
                        style="max-height: 500px; overflow: auto;"
                        >
                          <table class="table table-bordered">
                            <thead class="bg-dark text-white">
                              <tr>
                                <th scope="col">POSISI DILAMAR</th>
                                <th scope="col">NAMA LENGKAP</th>
                                <th scope="col">NAMA PANGGILAN</th>
                                <th scope="col">TEMPAT/TANGGAL LAHIR</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">KEBANGSAAN/SUKU</th>
                                <th scope="col">AGAMA</th>
                                <th scope="col">SEKOLAH</th>
                                <th scope="col">JURUSAN</th>
                                <th scope="col">IPK</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($pelamars as $pelamar)
                                <tr>
                                    <td>{{ $pelamar->posisi }}</td>
                                    <td>{{ $pelamar->nama_lengkap }}</td>
                                    <td>{{ $pelamar->nama_panggilan }}</td>
                                    <td>{{ $pelamar->tempat_lahir }}, {{ $pelamar->tgl_lahir }}</td>
                                    <td>{{ $pelamar->jk }}</td>
                                    <td>{{ $pelamar->kebangsaan }}, {{ $pelamar->suku }}</td>
                                    <td>{{ $pelamar->agama }}</td>
                                    <td>{{ $pelamar->sekolah }}</td>
                                    <td>{{ $pelamar->jurusan }}</td>
                                    <td>{{ $pelamar->ipk }}</td>
                                    <td>{{ $pelamar->alamat }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pelamars.destroy', $pelamar->id) }}" method="POST">
                                            <a href="{{ route('pelamars.show', $pelamar->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('pelamars.edit', $pelamar->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data pelamar belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                        </div>
                          {{ $pelamars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>