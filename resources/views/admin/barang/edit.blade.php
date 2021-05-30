<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Tambah Barang</title>
</head>
<body>

<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Tambah Barang</h1>
      <hr>

      <form action="{{ route('admin.barang.update', ['barang' => $barang->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text"
          class="form-control @error('nama') is-invalid @enderror"
          id="nama" name="nama" value="{{ old('nama') ?? $barang->barang}}">
          @error('nama')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number"
          class="form-control @error('harga') is-invalid @enderror"
          id="harga" name="harga" value="{{ old('harga') ?? $barang->harga }}">
          @error('harga')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="stok"
                id="Ada" value="A"
                {{ old('stok') ?? $barang->stok =='A' ? 'checked': '' }} >
                <label class="form-check-label" for="Ada">Ada</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="stok"
                id="Habis" value="O"
                {{ old('stok') ?? $barang->stok =='O' ? 'checked': '' }} >
                <label class="form-check-label" for="Habis">Habis</label>
              </div>
              @error('stok')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

        <button type="submit" class="btn btn-primary mb-2">Update</button>
      </form>

    </div>
  </div>
</div>

</body>
</html>
