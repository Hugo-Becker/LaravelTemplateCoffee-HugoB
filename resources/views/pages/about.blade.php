@extends('template.main')

@section('content')

    @include('partials.contents.aboutContent')
    <h1>{{$currentRoute}}</h1>
    
@endsection