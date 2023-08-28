@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div>
                <h2 style="text-align: center;">{{__('Edit Post')}}</h2>
            </div>
            <div>
                <form method="POST" action="{{ route('posts.update' , $post->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">{{__('Title')}}</label>
                        <input class="form-control" id="title" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="content">{{__('Content')}}</label>
                        <input class="form-control" id="content" name="content" value="{{$post->content}}">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a type="button" class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
                        <button type="submit" class="btn btn-success">{{__('Update')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection