@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Posts

        </div>
        <div class="card-body">
            <div class="button">
                <a type="button" class="btn btn-primary my-2" href="{{ route('posts.create') }}">New Post</i></a>
            </div>
            <div class="table">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col" colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}"><i class="fa-solid fa-pen-to-square fa-beat text-info"></i></a>
                                <a class="mx-2" href="{{ route('posts.show', $post->id) }}"><i class="fa-solid fa-eye fa-beat text-dark"></i></a>
                                <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="border-0" style="cursor: pointer ;" type="submit" onclick=" return confirm('Are You Sure You Want To Proceed With The Current Request!')"><i class="fa-solid fa-trash fa-beat text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection