<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD LARAVEL 8</title>
</head>

<body>
    <h1 class="text-center mb-4">Data Produk</h1>
    <div class="container">
        <a href="/tambahpegawai" type="button" class="btn btn-success">Tambah +</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @elseif($message = Session::get('successs'))
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col">dibuat</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->namaProduk}}</td>
                        <td>{{$row->DeskripsiProduk}}</td>
                        <td>Rp {{$row->harga}}</td>
                        <td>
                            <img src="{{ asset('fotopegawai/'.$row->foto)}}" style="width:40px" alt="">
                        </td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{$row->id}}" type="button" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>