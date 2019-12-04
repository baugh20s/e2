@extends('templates.master')

@section('title')
    Add a product
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
@if($name)
<div class='alert alert-success'>
    Your product, {{ $name }}, has been added.
</div>
@else

<form method='POST' id='product-add' action='/products/save-product'>
        <h3>Add a Product</h3>
        <input type='hidden' name='id' value='{{ $product["id"] }}'>
        <div class='form-group'>
            <label for='name'>Product Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='description'>Description</label>
            <textarea name='description' id='description' class='form-control'>{{ $app->old('description') }}</textarea>
        </div>

        <div class='form-group'>
            <label for='price'>Price</label>
            <input type='text' name='price' id='price' class='form-control' value='{{ $app->old("price") }}'>
        </div>

        <div class='form-group'>
            <label for='available'>Available</label>
            <input type='numbertext' name='available' id='available' class='form-control' value='{{ $app->old("available") }}'>
        </div>

        <div class='form-group'>
            <label for='weight'>Weight</label>
            <input type='number' name='weight' id='weight' class='form-control' value='{{ $app->old("weight") }}'>
        </div>

        <div class='form-group'>
            <label for='perishable'>Perishable</label>
            <input type='number' name='perishable' id='perishable' class='form-control' value='{{ $app->old("perishable") }}'>
        </div>

        <button type='submit' class='btn btn-primary'>Add Product</button>
    </form>
</div>

<!--@endif-->

<a href='/products'>&larr; Return to all products</a>

@endsection