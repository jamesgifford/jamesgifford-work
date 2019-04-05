@extends('layouts.default')

@section('content')

<div id="work-page">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Work</h1>
            </div>
        </div>
        
    @foreach ($posts as $post)
        <div id="{{ $post->slug }}" class="row my-5">
            <div class="col-md-2 text-center">
                <img class="img-fluid mx-auto mb-3" src="/img/{{ $post->image }}" />
            </div>
            <div class="col-md-10 mb-3">
                <h2 class="text-center text-md-left"><strong>{{ $post->title }}</strong></h2>
                <p class="subtitle text-center text-md-left">{!! $post->subtitle !!}</p>
                <p class="lead">{!! $post->content !!}</p>
            </div>
        </div>
    @endforeach

    </div> <!-- /container -->
</div>

@endsection