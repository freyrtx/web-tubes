<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    //read barang
    public function listBarang(){
        $barangs = Barang::all();
        return view('member.barang.list',['barangs' => $barangs]);
    }
    //read detail barang
    public function showBarang(Barang $barang){
        return view('member.barang.detail', ['barang' => $barang]);
    }

    //read post
    public function listPost(){
        $posts = Post::all();
        return view('member.post.list',['posts' => $posts]);
    }
    //read detail post
    public function showPost(Post $post){
        return view('member.post.detail', ['post' => $post]);
    }
}
