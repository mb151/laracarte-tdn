@component('mail::message')
# Hey Bachir 

- {{$name}}
- {{$email}}

@component('mail::panel')
{{$msg}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
