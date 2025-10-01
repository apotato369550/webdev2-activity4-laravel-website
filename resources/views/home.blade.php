@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1>{{ $featured['title'] }}</h1>
<p>{{ $featured['subtitle'] }}</p>
@endsection