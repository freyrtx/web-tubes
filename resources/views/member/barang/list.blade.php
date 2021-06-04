@extends('layouts.member')

@section('navbar')
<ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item-active"><a class="nav-link js-scroll-trigger" href="{{url('member/barang/list')}}">Barang</a></li>
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('member/post/list')}}">Post</a></li>

    <li class="nav-item">

        <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
</ul>
<!-- Authentication Links -->



@endsection


@section('content')
@csrf
<div class="container">
    <div class="row align-items-center mt-5">
        <h1 class="col-lg-8 text-lg-left">List Barang</h1>
    </div>
  <table class="table mt-4">
    <thead class="thead-dark text-center">
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
          <td><a href="{{('/barang/list/'.$barang->id)}}">{{$barang->nama}}</a></td>
          <td class="text-center" ><img src="{{asset($barang->fotoBarang)}}" style="width:50%;height:auto;" alt=""></td>
          <td>{{$barang->harga}}</td>
          <td>{{$barang->stok == 'A' ? 'Ada' : 'Habis'}}</td>
          <td><a href="{{('/barang/list/'.$barang->id.'/edit')}}">Pesan</a></td>
        </tr>

        @empty
        @endforelse
      </tbody>
  </table>
</div>
@endsection
