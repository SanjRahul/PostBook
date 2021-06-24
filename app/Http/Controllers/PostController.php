<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =Post::orderBy('created_at', 'desc')->get();
        return view('blog.profile',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = Auth::id();
        $post->description = $request->input('description');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uplodes/blog/',$filename);
            $post->image = $filename;
        }

        $post->status = $request->input('status') == true ? '1' : '0';
        $post->save();
        return redirect('home')->with('status','Post Added Successfully');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $post =Post::find($id);
        return view('blog.edit',compact('post'));
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
        $post = Post::find($id);


        $post->user_id = Auth::id();
        $post->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $destination_path = 'uplodes/blog/'.$post->image;
            if(File::exists($destination_path))
            {
                File::delete($destination_path);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move('uplodes/blog/',$filename);
            $post->image = $filename;
        }

        $post->update();
        return redirect('home')->with('status','Post Updated Successfully');
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
        $destination_path = 'uplodes/blog/'.$post->image;
        if(File::exists($destination_path))
        {
            File::delete($destination_path);
        }

        $post->delete();
        return redirect('home')->with('status','Post Deleted Successfully');
        
    }

    // public function alluser()
    // { 
    //     return view('pages.alluser');
    // }

    // public function allfunction()
    // { 
    //     return view('layouts.inc.app');
    // }
}
