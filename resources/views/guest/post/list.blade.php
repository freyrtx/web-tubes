@extends('layouts.guest')

@section('navbar')
<ul class="navbar-nav text-uppercase ml-auto">
    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('guest/barang/list')}}">Barang</a></li>
    <li class="nav-item-active"><a class="nav-link js-scroll-trigger" href="{{url('guest/post/list')}}">Post</a></li>
    <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
</ul>
<!-- Authentication Links -->
@endsection


@section('content')
<div class="container">
    <div class="row align-items-center mt-5">
        <h1 class="col-lg-8 text-lg-left">List Post</h1>
    </div>
    <table class="table mt-4">
        <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Judul</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
            <tr>
              <th>{{$loop->iteration}}</th>
              <td><a href="{{('/post/list/'.$post->id)}}">{{$post->judul}}</a></td>
            </tr>

            @empty
            @endforelse
          </tbody>
      </table>
</div>
@endsection
