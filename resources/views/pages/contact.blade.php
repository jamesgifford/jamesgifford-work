@extends('layouts.default')

@section('content')

<div id="contact-form" class="my-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-lg-8 offset-lg-2">
                <h1 class="mb-4">Contact Me</h1>

                <p class="lead mb-5">Let me know if you'd like to discuss a project or just shoot the breeze</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <form method="post" action="/contact">
                    <div class="form-label-group my-3">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="" autofocus="">
                        <label for="inputName">Name</label>
                    </div>

                    <div class="form-label-group my-3">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required="" autofocus="">
                        <label for="inputEmail">Email Address</label>
                    </div>

                    <div class="form-label-group my-3">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required="" autofocus="">
                        <label for="inputName">Subject</label>
                    </div>

                    <div class="form-label-group my-3">
                        <textarea name="message" id="message" name="message" class="form-control" placeholder="Message" required="" autofocus="" rows="4"></textarea>                        
                        <label for="name">Message</label>
                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection