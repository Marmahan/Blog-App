@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Posts</h1>
    @if(count($posts) > 0)
      @foreach ($posts as $post)
          <div class="card card-body bg-light mb-2">
              <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
              <small> Written on {{ $post->created_at }}</small>
          </div>
      @endforeach
    @else
          <h3>No more Posts</h3>
    @endif

@endsection
