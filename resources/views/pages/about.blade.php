@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>    
        
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i>This app has been built by <a href="https://twitter.com/mahamadou208" target="_blank">@bach</a> for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="#">Source Code</a>.</p>
        <hr>
        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>
        <hr>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel &amps; Bootstrap. But there's a bunch of services used for email and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin'is Geolocation Package</li>
            <li>Michel Fortin'is Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>

    </div>    
@endsection