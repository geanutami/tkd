<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>TKD</title>
</head>

<body>
    <h1 class="text-center mb-4"> DATA SOAL</h1>
    <div class="container">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Soal+
        </button>
        <div class="row">
            <div class="col-sm-2 mb-2 mt-2 col-auto">
                <form action="/data" method="GET" enctype="multipart/form-data">
                    <input type="search" id="search" name="search" class="form-control" placeholder="search...">
                </form>
            </div>


            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <p> {{ $message }} </p>
                </div>
            @endif


            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">Jenis Soal</th>
                        <th scope="col">Soal</th>
                        <th scope="col">A</th>
                        <th scope="col">B</th>
                        <th scope="col">C</th>
                        <th scope="col">D</th>
                        <th scope="col">E</th>
                        <th scope="col">Kunci</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($soal as $list)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $list->jenis_soal }}</td>
                            <td>{{ $list->soal }}</td>
                            <td>{{ $list->a }}</td>
                            <td>{{ $list->b }}</td>
                            <td>{{ $list->c }}</td>
                            <td>{{ $list->d }}</td>
                            <td>{{ $list->e }}</td>
                            <td>{{ $list->kunci }}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#ModalEdit{{ $list->$no }}">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#ModalHapus{{ $list->$no }}">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $soal->links() }}
        </div>
    </div>

    <!-- Modal TambahSoal -->
    <form action="{{ route('post.simpan') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('post') }}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">FORM INPUT DATA SOAL </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="jenis_soal" class="form-label">Jenis
                                Soal</label>
                            <input type="text" class="form-control" id="jenis_soal" name="jenis_soal">
                            @error('jenis_soal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="soal" class="form-label">Soal</label>
                            <input type="text" class="form-control" id="soal" name="soal">
                        </div>
                        <div class="mb-2">
                            <label for="a" class="form-label">A</label>
                            <input type="text" class="form-control" id="a" name="a">
                        </div>
                        <div class="mb-2">
                            <label for="b" class="form-label">B</label>
                            <input type="text" class="form-control" id="b" name="b">
                        </div>
                        <div class="mb-2">
                            <label for="c" class="form-label">C</label>
                            <input type="text" class="form-control" id="c" name="c">
                        </div>
                        <div class="mb-2">
                            <label for="d" class="form-label">D</label>
                            <input type="text" class="form-control" id="d" name="d">
                        </div>
                        <div class="mb-2">
                            <label for="e" class="form-label">E</label>
                            <input type="text" class="form-control" id="e" name="e">
                        </div>
                        <div class="mb-2">
                            <label for="kunci" class="form-label">Kunci</label>
                            <input type="text" class="form-control" id="kunci" name="kunci">
                            @error('kunci')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    </div>
    </div>
    </div>
    </div>

    <!-- Modal EditSoal -->
    <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('post') }}

        <div class="modal fade" id="ModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="ModalEdit">FORM EDIT SOAL </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="jenis_soal" class="form-label">Jenis
                                Soal</label>
                            <input type="text" class="form-control" id="jenis_soal" aria-describedby="emailHelp"
                                value="{{ $list->jenis_soal }}">
                        </div>
                        <div class="mb-2">
                            <label for="soal" class="form-label">Soal</label>
                            <input type="text" class="form-control" id="soal" value="{{ $list->soal }}">
                        </div>
                        <div class="mb-2">
                            <label for="a" class="form-label">A</label>
                            <input type="text" class="form-control" id="a" value="{{ $list->a }}">
                        </div>
                        <div class="mb-2">
                            <label for="b" class="form-label">B</label>
                            <input type="text" class="form-control" id="b" value="{{ $list->b }}">
                        </div>
                        <div class="mb-2">
                            <label for="c" class="form-label">C</label>
                            <input type="text" class="form-control" id="c" value="{{ $list->c }}">
                        </div>
                        <div class="mb-2">
                            <label for="d" class="form-label">D</label>
                            <input type="text" class="form-control" id="d" value="{{ $list->d }}">
                        </div>
                        <div class="mb-2">
                            <label for="e" class="form-label">E</label>
                            <input type="text" class="form-control" id="e" value="{{ $list->e }}">
                        </div>
                        <div class="mb-2">
                            <label for="kunci" class="form-label">Kunci</label>
                            <input type="text" class="form-control" id="kunci" value="{{ $list->kunci }}">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
    </form>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
    </div>
    </div>
    </div>
    </div>


    <!-- Modal HapusSoal -->
    <form action="{{ route('delete') }}" method="GET">
        {{ csrf_field() }} {{ method_field('GET') }}
        <div class="modal fade" id="ModalHapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalHapus">Konfirmasi Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Kamu Yakin Akan Menghapus Data Ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Ya, Hapus</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak,
                            Tutup</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            toastr.success('Data Berhasil ditambahkan', 'hai')
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
-->
</body>

</html>
