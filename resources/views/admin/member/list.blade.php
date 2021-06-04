@extends('layouts.admin')

@section('navbar')
<ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item-active"><a class="nav-link js-scroll-trigger" href="{{url('admin/member/list')}}">Membership</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/barang/list')}}">Barang</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('admin/post/list')}}">Post</a></li>
</ul>
@endsection


@section('content')
<div class="container">
    <div class="row align-items-center mt-5">
        <h1 class="col-lg-8 text-lg-left">Membership List</h1>
        <a class="btn btn-success col-lg-3 text-lg-center" href="{{('/admin/member/list/form')}}">Tambah Member</a>
    </div>
  <table class="table mt-4 text-center">
    <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No HP</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($users as $user)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td><a href="{{('/member/list/'.$user->id)}}">{{$user->nama}}</a></td>
          <td>{{$user->email}}</td>
          <td>{{$user->nohp}}</td>
          <td>{{$user->alamat}}</td>
          <td>
            <a href="{{('/member/list/delete/'.$user->id)}}">Delete</a>
          </td>
        </tr>

        @empty
        @endforelse
      </tbody>
  </table>
</div>
@endsection
