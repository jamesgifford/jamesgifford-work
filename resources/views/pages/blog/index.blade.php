@extends('layouts.default')

@section('content')

<div id="blog-page">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Thoughts</h1>
            </div>
        </div>
        
    @foreach ($posts as $post)
        <div class="row my-5">
            <div class="col-md-2 d-none d-md-block">
                <div class="date-icon">
                    <span class="month rounded-top">{{ $post->published_month }}</span>
                    <span class="day">{{ $post->published_day }}</span>
                    <span class="year rounded-bottom">{{ $post->published_year }}</span>
                </div>
            </div>
            <div class="col-md-10">
                <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <div class="date-text d-md-none">{{ $post->published_date }}</div>
                <p class="lead">{!! $post->first_paragraph !!}</p>
            </div>
        </div>
    @endforeach

    </div> <!-- /container -->
</div>

@endsection