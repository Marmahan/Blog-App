@extends('layouts.app')

@section('content')

    <h1 class="mt-5">{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr>
    <small> Written on {{ $post->created_at }}</small>

    <div class="mt-2">
        <a href="/post" class="btn ">Back</a>
    </div>
@endsection
