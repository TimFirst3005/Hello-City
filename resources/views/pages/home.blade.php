@extends('base')

@section('title', config('app.name'))

@section('content')

    <img width="10%" src="/img/ci.jpg" alt="ci-Flag">
    
    <h1>Hello from Abidjan !</h1>

    <p> Il est présentement {{date('h:i A ')}}.</p>
    
@endsection
   
