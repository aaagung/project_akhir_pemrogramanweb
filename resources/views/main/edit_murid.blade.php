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
    <div class="card">
        <div class="card-header">
        <div class="card-body">
        <form method="POST" action="{{route('update.murid', $murid->id)}}" enctype="multipart/form-data">
            <div class="row">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                    <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                        value="{{$murid->nama}}" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                    <label for="nim ">NIM</label>
                        <input type="number" class="form-control @error('nim') is-invalid @enderror"
                        value="{{$murid->nim}}" name="nim" placeholder="NIM">
                    </div>
                    <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                        value="{{$murid->jurusan}}" name="jurusan" placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                    <label for="tugas">Tugas</label>
                        <input type="text" class="form-control @error('tugas') is-invalid @enderror"
                        value="{{$murid->tugas}}" name="tugas" placeholder="Tugas">
                    </div>
                    <div>
                    <label for="dokumen">Dokumen</label>
                        <input type="file" class="form-control @error('dokumen') is-invalid @enderror"
                        value="{{$murid->dokumen}}" name="dokumen" placeholder="Dokumen">
                    </div>
                    <div class=" card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
        </div>
    </div>
    
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