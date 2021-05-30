<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>{{$barang->barang}}</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3 d-flex judtify-content-end align-items-center">
      <h1 class="h2 mr-auto">{{$barang->barang}}</h1>
      </form>
    </div>
    <hr>
    @if(session()->has('pesan'))
      <div class="alert alert-success" role="alert">
        {{ session()->get('pesan') }}
      </div>
    @endif

    <ul>
      <img src="{{asset($barang->fotoBarang)}}" width="500" height=auto>
      <li>NIM: {{$barang->barang}} </li>
      <li>Nama: {{$barang->harga}} </li>
      <li>Ketersediaan:
          {{$barang->stok == 'P' ? 'Perempuan' : 'Laki-laki'}}
      </li>
    </ul>

    </div>
  </div>
</div>

</body>
</html>
