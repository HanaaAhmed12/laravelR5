@extends('layout.main')

@section('menu')
<li><a href="/">Home Page</a></li>
@endsection


@push('submenu')
<li><a href="/">Home Page 2</a></li>
@endpush


@prepend('submenu')
<li><a href="/">Home Page 3</a></li>
@endprepend
