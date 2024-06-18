<x-mail::message>
<div>
    <h2>Hello {{ $data['name'] }}</h2>
    <p>Email: {{ $data['email'] }}</p>
    <p>Subject: {{ $data['subject'] }}</p>
    <p>Message: {{ $data['message'] }}</p>
    <br><br>
</div>
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
