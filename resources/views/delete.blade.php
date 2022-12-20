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
    <form action="{{ route('delete') }}" method="GET">
        {{ csrf_field() }} {{ method_field('get') }}
        <div class="container">
            <h1 class="text-center mb-4"> DATA SOAL</h1>
            <div class="container">
                <a href="/inputsoal" class="btn btn-primary">Tambah Soal +</a>
                <div class="row">
                    <div class="col-sm-2 mb-2 mt-2 col-auto ">
                        <form action="/data" method="GET" enctype="multipart/form-data">
                            <input type="search" id="search" name="search" class="form-control"
                                placeholder="search...">
                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Jenis Soal</th>
                                <th scope="col">Soal</th>
                                <th scope="col">A</th>
                                <th scope="col">B</th>
                                <th scope="col">C</th>
                                <th scope="col">D</th>
                                <th scope="col">E</th>
                                <th scope="col">Kunci</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soal as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->jenis_soal }}</td>
                                    <td>{{ $list->soal }}</td>
                                    <td>{{ $list->a }}</td>
                                    <td>{{ $list->b }}</td>
                                    <td>{{ $list->c }}</td>
                                    <td>{{ $list->d }}</td>
                                    <td>{{ $list->e }}</td>
                                    <td>{{ $list->kunci }}</td>
                                    <td>
                                        <a href="/tampildata/{{ $list->id }}" class="btn btn-danger">Edit</a>
                                        <a href="/delete/{{ $list->id }}" class="btn btn-warning">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $soal->links() }}
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
