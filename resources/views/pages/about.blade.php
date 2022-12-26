@extends('base')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    
    <img width="20%" src="/img/OEIvoireLogo.png" alt="ci-Flag">
    
    <p> Built with &hearts; by TimFirst Solution Group. </p>
    
    <p> <a href="{{ route('app_home') }}"> Retour à la page d'accueil </a> </p>

@endsection