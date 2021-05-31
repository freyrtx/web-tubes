@extends('layouts.admin')

@section('navbar')
<ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/member/list')}}">Membership</a></li>
    <li class="nav-item-active"><a class="nav-link js-scroll-trigger" href="{{url('admin/barang/list')}}">Barang</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/post/list')}}">Post</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/pesanan/list')}}">Pesanan</a></li>
</ul>
@endsection


@section('content')
<div class="container">
    <div class="row align-items-center mt-5">
        <h1 class="col-lg-8 text-lg-left">List Barang</h1>
        <a class="btn btn-success col-lg-3 text-lg-center" href="{{('/admin/barang/list/form')}}">Tambah Barang</a>
    </div>
  <table class="table mt-4">
    <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Foto</th>
          <th>Harga</th>
          <th>Ketersediaan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($barangs as $barang)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td><a href="{{('/barang/list/'.$barang->id)}}">{{$barang->barang}}</a></td>
          <td><img src="{{asset($barang->fotoBarang)}}" alt=""></td>
          <td>{{$barang->harga}}</td>
          <td>{{$barang->stok == 'A' ? 'Ada' : 'Habis'}}</td>
          <td>
            <a href="{{('/barang/list/'.$barang->id.'/edit')}}">Edit</a> | <a href="{{('/barang/list/delete/'.$barang->id)}}">Delete</a>
          </td>
        </tr>

        @empty
        @endforelse
      </tbody>
  </table>
</div>
@endsection
