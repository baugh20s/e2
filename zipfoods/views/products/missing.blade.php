@extends('templates.master')

@section('title')
    Missing Product
@endsection

@section('content')
   
<div id='product-show'>
<h2>Product {{ $product['id'] }} not found</h2>

<p class='product-description'>
    Uh oh - we were not able to find the product you were looking for.
</p>

<a href='/products'>&larr; Return to all products</a>
 
@endsection