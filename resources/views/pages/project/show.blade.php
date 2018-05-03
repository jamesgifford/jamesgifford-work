@extends('layouts.default')

@section('content')

<div id="projects-page">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Projects</h1>
            </div>
        </div>
        
        <div id="{{ $post->slug }}" class="row my-5">
            <div class="col-md-2 text-center">
                <img class="img-fluid mx-auto mb-3" src="/img/{{ $post->image }}" />
            </div>
            <div class="col-md-10 mb-3">
                <h2 class="text-center text-md-left"><a href="/projects/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <p class="subtitle text-center text-md-left">{!! $post->subtitle !!}</p>
                <p class="lead">{!! $post->content !!}</p>
            </div>
        </div>

    </div> <!-- /container -->
</div>

@endsection