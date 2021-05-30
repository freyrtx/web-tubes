<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Post;

class GuestController extends Controller
{
    public function index()
    {
        return view('home');
    }
    //read barang
    public function listBarang(){
        $barangs = Barang::all();
        return view('guest.barang.list',['barangs' => $barangs]);
    }
    //read detail barang
    public function showBarang(Barang $barang){
        return view('guest.barang.detail', ['barang' => $barang]);
    }

    //read post
    public function listPost(){
        $posts = Post::all();
        return view('guest.post.list',['posts' => $posts]);
    }
    //read detail post
    public function showPost(Post $post){
        return view('guest.post.detail', ['post' => $post]);
    }
}
