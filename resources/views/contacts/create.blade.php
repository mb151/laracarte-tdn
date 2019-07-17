@extends('layouts.default', ['title' => 'Contact'])

@section('content')
    <div class="container">
        <div class="row">
            <div class = "col-md-6 col-md-offset-3 col-sm-9 col-sm-offset-2">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with service, please <a href="mailto:mahamadou208@gmail.com"> ask for help.</a></p>
                {{--$errors->has : pour colorer l'input name en rouge en cas d'erreur--}}
                <form action="{{route('contact_path')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name')}}">
                        {!! $errors->first('name', '<span class="help-block">:message</span>')!!}
                    </div>
                    {{--$errors->has : pour colorer l'input email en rouge en cas d'erreur--}}
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required="required" value = "{{ old('email')}}">
                            {!! $errors->first('email', '<span class="help-block">:message</span>')!!}
                    </div>
                    {{--$errors->has : pour colorer l'input message en rouge en cas d'erreur--}}
                    <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                            <label for="message" class="control-label sr-only">Message</label>
                            <textarea name="message" rows="6" cols="6" id="message" required="required" class="form-control">{{ old('message')}}</textarea>
                            {!! $errors->first('message', '<span class="help-block">:message</span>')!!}
                    </div>

                    <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop