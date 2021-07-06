@extends('base')

@section('title', config('app.name'))

@section('content')
    
    <h1>Hello from Abuja !</h1>

    <p> Il est présentement {{date('h:i A ')}}.</p>
    
@endsection
   
