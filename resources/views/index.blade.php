@extends('layout/master')
{{-- Il prend les caractétristiques du fichier master, ne pas oublier de remplacer
     le nom de index dans l'ancienne route welcome --}}

@section('content')

    @include('components/naviguation')
    @include('components/header')
    @include('partials/portfolio')
    @include('partials/about')
    @include('partials/team')
    @include('partials/client')
    @include('partials/contact')
    @include('partials/footer')
    @include('partials/modal')
 
    
@endsection