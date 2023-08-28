@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div>
                <h2 style="text-align: center;">{{__('Create New Post')}}</h2>
            </div>
            <div>
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">{{__('Title')}}</label>
                        <input class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="content">{{__('Content')}}</label>
                        <input class="form-control" id="content" name="content">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a type="button" class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
                        <button type="submit" class="btn btn-success">{{__('Submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection