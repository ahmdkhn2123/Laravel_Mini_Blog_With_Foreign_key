<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class dashboard extends Controller
{
    public function show_post(Request $request)
    {
        $userid=$request->user()->id;
        $post=post::where('user_id',$userid)->get();
        return view('dashboard',['post'=>$post]);
    }
}
