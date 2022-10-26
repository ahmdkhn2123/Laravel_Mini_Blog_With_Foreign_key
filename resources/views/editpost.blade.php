<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editpost') }}
        </h2>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </x-slot>
    <div style="margin-left:23px">
         <form action="/create_post/{{$post->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" placeholder="Enter Here" class="form-control" value="{{$post->title}}" >
            </div>

            <div class="mb-3">
                <label>Body</label>
                <textarea  name="body" rows="4" cols="50" class="form-control" placeholder="Enter Here">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Edit Post</button>
        </form>
        <br>

        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
    </div>
</x-app-layout>
