@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Posts Details #{{ $post->id }}</h5>
        <div class="card-body">

            <div class="row">
                <div class="form-group col">
                    <h3 for="title">{{__('Title')}}</h3>
                    <p>{{ $post->title }}</p>
                </div>
                <div class="form-group col">
                    <h3 for="content">{{__('Content')}}</h3>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="button">
                <a type="button" class="btn btn-primary my-2" href="{{route('posts.index')}}"><i class="fa-solid fa-arrow-left"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection