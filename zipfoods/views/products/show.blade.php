@extends('templates.master')

@section('title')
    Product Name
@endsection

@section('content')
<h2>{{ $product['name'] }}</h2>


@endsection