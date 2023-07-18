<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas Akhir</title>
  </head>
  <body class="mt-5">
    <h1 class="text-center"><b> Website Pengumpulan Tugas</b></h1>
    <div class="container">
  <div class="col">
    <table class="table table-hover">
      <a href="/add_murid" class="btn btn-primary btn-sm">Tambah</a>
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">NIM</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Tugas</th>
          <th scope="col">File Tugas</th>
          <th scope="col">Aksi</th>
        </tr>
        </thead>
      <tbody>
      @foreach ($murid as $no => $m)
        <tr>
        <th scope="row">{{ ++$no }}</th>
          <td>
          <a href="{{ route('dtl_murid', $m->id) }}" style="color: black; text-decoration: none;">
              {{ $m->nama }}
          </a>
          </td>
          <td>{{$m->nim}}</td>
          <td>{{$m->jurusan}}</td>
          <td>{{$m->tugas}}</td>
          <td>
          @if ($m->tugas)
          <a href="{{ asset('uploads/' . $m->tugas) }}">Download</a>
          @else
            Belum mengumpulkan
          @endif
          </td>
          <td>
             <a href="{{ route('hapus.murid', $m->id) }}">
                <i class="nav-icon fas fa-trash-alt" style="color: red;"></i>
              </a>
                 |
               <a href="{{ route('edit.murid', $m->id) }}" class="">
                  <i class="nav-icon fas fa-edit"></i>
              </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="{{ route('logout') }}" class="btn btn-primary btn-sm">Logout</a>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/fbadd70c44.js" crossorigin="anonymous"></script>
  </body>
</html>