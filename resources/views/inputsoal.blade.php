<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TKD</title>
</head>

<body>
    <h2 class="text-center mb-4">TAMBAH DATA SOAL</h2>
    <form action="{{ route('post.simpan') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }} {{ method_field('post') }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="jenissoal" class="form-label">Jenis Soal</label>
                                    <input type="text" class="form-control" id="jenissoal" name="jenis_soal">
                                </div>
                                <div class="mb-3">
                                    <label for="soal" class="form-label">Soal</label>
                                    <input type="text" class="form-control" id="soal" name="soal">
                                </div>
                                <div class="mb-3">
                                    <label for="a" class="form-label">A</label>
                                    <input type="text" class="form-control" id="a" name="a">
                                </div>
                                <div class="mb-3">
                                    <label for="b" class="form-label">B</label>
                                    <input type="text" class="form-control" id="b" name="b">
                                </div>
                                <div class="mb-3">
                                    <label for="c" class="form-label">C</label>
                                    <input type="text" class="form-control" id="c" name="c">
                                </div>
                                <div class="mb-3">
                                    <label for="d" class="form-label">D</label>
                                    <input type="text" class="form-control" id="d" name="d">
                                </div>
                                <div class="mb-3">
                                    <label for="e" class="form-label">E</label>
                                    <input type="text" class="form-control" id="e" name="e">
                                </div>
                                <div class="mb-3">
                                    <label for="kunci" class="form-label">Kunci</label>
                                    <input type="text" class="form-control" id="kunci" name="kunci">
                                </div>
                                <button type="submit" class="btn btn-primary">Input</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
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
