@component('mail::message')
# Hey Bachir 

- {{$msg->name}}
- {{$msg->email}}


{!!date("Y-m-d H:i:s") !!}

@component('mail::panel')
{{$msg->message}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
