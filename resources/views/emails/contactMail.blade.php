@component('mail::message')
# Hello {{ $data['name'] }}

Email: {{ $data['email'] }}
Subject: {{ $data['subject'] }}

Message:
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
