<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Post;
use App\Models\User;
use Exception;

class SuperController extends Controller
{
    public function listMember(){
        $users = User::all();
        return view('admin.member.list',['users' => $users]);
    }
    //create form
    public function formMember(){
        return view('admin.member.form');
    }
    //read
    public function showMember(User $user){
        return view('admin.member.detail', ['user' => $user]);
    }
    //delete
    public function delMember(User $user){
        try{
            $user->delete();
            return back();
        }catch(Exception $e){
            return back();
        }
    }

    //Barang CRUD
    public function listBarang(){
        $barangs = Barang::all();
        return view('admin.barang.list',['barangs' => $barangs]);
    }
    //create form
    public function formBarang(){
        return view('admin.barang.form');
    }
    //create valid
    public function addBarang(Request $request){
        $validateData = $request->validate([
            'barang'        => 'required|unique:barangs,barang',
            'fotoBarang'    => 'required|file|image|max:1024',
            'harga'         => 'required',
            'stok'          => 'required|in:A,O'
        ]);

        $extFile = $request->fotoBarang->getClientOriginalExtension();
        $nameFile = $validateData['barang'].'-'.time().'.'.$extFile;

        $barang = new Barang();
        $barang->barang = $validateData['barang'];
        $barang->fotoBarang = $validateData['fotoBarang']->move('upload',$nameFile);
        $barang->harga = $validateData['harga'];
        $barang->stok = $validateData['stok'];
        $barang->save();

        return redirect()->route('admin.barang.list');
    }
    //read
    public function showBarang(Barang $barang){
        return view('admin.barang.detail', ['barang' => $barang]);
    }
    //update form
    public function formUpBarang(Barang $barang){
        return view('admin.barang.edit', ['barang' => $barang]);
    }
    //update valid
    public function upBarang(Request $request, Barang $barang){
        $validateData = $request->validate()([
            'idBarang'      => 'required,'.$barang->idBarang,
            'barang'        => 'required',
            'fotoBarang'    => 'required|file|image',
            'harga'         => 'required',
            'stok'          => 'required|in:A,O'
        ]);

        Barang::where('idBarang',$barang->idBarang)->update($validateData);
        return redirect()->route('admin.barang.list');
    }
    //delete
    public function delBarang(Barang $barang){
        $barang->delete();
        return redirect()->route('admin.barang.list');
    }

    //Post CRUD
    public function listPost(){
        $posts = Post::all();
        return view('admin.post.list',['posts' => $posts]);
    }
    //create form
    public function formPost(){
        return view('admin.post.form');
    }
    //create valid
    public function addPost(Request $request){
        $validateData = $request->validate([
            'judul'     => 'required',
            'banner'    => 'nullable|file|image',
            'isiPost'   => 'required',
        ]);

        $extFile = $request->banner->getClientOriginalExtension();
        $nameFile = $validateData['judul'].'-'.time().'.'.$extFile;

        $post = new Post();
        $post->judul = $validateData['judul'];
        $post->banner = $validateData['banner']->move('upload',$nameFile);
        $post->isiPost = $validateData['isiPost'];
        $post->save();

        return redirect()->route('admin.post.list');
    }
    //read
    public function showPost(Post $post){
        return view('admin.post.detail', ['post' => $post]);
    }
    //delete
    public function delPost(Post $post){
        $post->delete();
        return redirect()->route('admin.post.list');
    }
}
