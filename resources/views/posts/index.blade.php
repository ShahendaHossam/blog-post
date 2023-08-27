@extends('layouts.app')

@section('content')
<div class="container">
    <a type="button" class="btn btn-primary my-2" href="{{ route('posts.create') }}">New Post<i class="fa-solid fa-plus"></i></a>
    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td><a href="{{ route('posts.edit', $post->id) }}">Edit<i class="fa-solid fa-pen-to-square"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection