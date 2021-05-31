@extends('layouts.admin')

@section('navbar')
<ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/member/list')}}">Membership</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/barang/list')}}">Barang</a></li>
    <li class="nav-item-active"><a class="nav-link js-scroll-trigger" href="{{url('admin/post/list')}}">Post</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/pesanan/list')}}">Pesanan</a></li>
</ul>
@endsection


@section('content')
<div class="container">
    <div class="row align-items-center mt-5">
        <h1 class="col-lg-8 text-lg-left">List Post</h1>
        <a class="btn btn-success col-lg-3 text-lg-center" href="{{('/admin/post/list/form')}}">Tambah Post</a>
    </div>
  <table class="table mt-4">
    <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($posts as $post)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td><a href="{{('/barang/list/'.$post->id)}}">{{$post->judul}}</a></td>
          <td>
            <a href="{{('/barang/list/'.$post->id.'/edit')}}">Edit</a> | <a href="{{('/barang/list/delete/'.$post->id)}}">Delete</a>
          </td>
        </tr>

        @empty
        @endforelse
      </tbody>
  </table>
</div>
@endsection
