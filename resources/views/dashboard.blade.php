<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif

    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

                <table class="table table-striped  table-bordered border-primary " style="margin-top:20px">
                 <tr>
                     <th><h3><b>ID</b></h3></th>
                     <th><h3><b>Name</b></h3></th>
                     <th><h3><b>Title</b></h3></th>
                      <th><h3><b>Body</b></h3></th>
                      <th><h3><b>Operations</b></h3></th>
                </tr>
                @foreach($post as $post)
                <tr>
                    <th>{{$post->user->name}}</th>
                    <th>{{$post->id}}</th>
                    <th>{{$post->title}}</th>
                    <th>{{$post->body}}</th>
                    <th><a href="delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>
                    <a href="edit/{{$post->id}}"><button class="btn btn-primary">Edit</button></a></th>
                </tr>
                @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
