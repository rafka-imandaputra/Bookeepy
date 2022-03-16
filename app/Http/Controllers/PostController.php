<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Post;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); 
        return view('post.index', ['posts' => $posts]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        $request->validate([
            'judul' => 'required|max:150',
            'author' => 'required', 
            'synopsis' => 'required',
            'penerbit' => 'required',
        ]);

        $input = $request->all();

        $post = Post::create($input);
        
        return back()->with('success',' Buku baru berhasil dibuat.');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show',["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $post = Post::findOrFail($id);
    
    return view('post.edit', [
            'post' => $post
    ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:150',
            'author' => 'required', 
            'synopsis' => 'required',
            'penerbit' => 'required',
        ]);
            
      $post = Post::find($id)->update($request->all()); 
             
      return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post = Post::find($id);

    $post->delete();

    return back()->with('success',' Penghapusan berhasil.');
    }
}
