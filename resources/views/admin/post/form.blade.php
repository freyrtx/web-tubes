<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Tambah Post</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Tambah Post</h1>
      <hr>

      <form action="{{ route('admin.post.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text"
          class="form-control @error('judul') is-invalid @enderror"
          id="judul" name="judul" value="{{ old('judul') }}">
          @error('judul')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="baner">Banner</label>
            <input type="file" class="form-control-file" id="judul" name="judul">
            @error('judul')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="isiPost">Isi</label>
            <input type="textarea"
            class="form-control @error('isiPost') is-invalid @enderror"
            id="isiPost" name="isiPost" value="{{ old('isiPost') }}">
            @error('isiPost')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary mb-2">Tambahkan</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
