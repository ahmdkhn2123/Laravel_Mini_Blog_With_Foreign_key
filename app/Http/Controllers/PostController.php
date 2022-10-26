<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{


    public function index()
    {
        return view('post');
    }


    public function create(Request $request)
    {
        $user=$request->user();
        $post=new post();
        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $user->post()->save($post);
        return redirect(route('post_index'))->with('success','Added SuccessFully');

    }


    public function edit($id)
    {
        $post=post::find($id);
        return view('editpost',['post'=>$post]);
    }

    public function editpost(Request $request,$id)
    {
        $post=post::find($id);
        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $post->save();
        return redirect(route('dashboard'))->with('success','Updated SuccessFully');

    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect(route('dashboard'))->with('message','Deleted SuccessFully');
    }
}
