<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .product-details {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

        .product-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="product-details">
            <img src="https://via.placeholder.com/600" alt="{{ $product->name }}" class="product-image">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <p><strong>Price: </strong>${{ $product->price }}</p>
            <p><strong>SKU: </strong>{{ $product->sku }}</p>
            <p><strong>In Stock: </strong>{{ $product->in_stock }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
@section('content')
    <div class="container mt-20 px-4 sm:px-6 lg:px-8 mx-auto relative">
        <!-- Back Button (Přesunuto doleva nahoře) -->
        <div class="absolute top-0 left-0 mt-6 ml-6">
            <a href="{{ route('products.index') }}" class="btn btn-secondary bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-md">
                Back to Products
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        <!-- Product Details (Posunuto trochu dolů) -->
        <div class="product-details bg-white p-6 shadow-lg rounded-lg mx-auto w-full sm:w-2/3 md:w-1/2 lg:w-1/3 mt-20">
            <!-- Product Image (Zmenšeno a centrováno) -->
            <div class="text-center mb-6">
                <img src="https://via.placeholder.com/600" alt="{{ $product->name }}" class="product-image mx-auto w-2/3 h-64 object-cover rounded-lg">
            </div>
            
            <!-- Product Information -->
            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-4">{{ $product->name }}</h1>
            <p class="text-lg text-gray-600 mb-4">{{ $product->description }}</p>
            <div class="flex justify-between text-lg font-medium text-gray-800">
                <p><strong>Price: </strong>${{ $product->price }}</p>
                <p><strong>SKU: </strong>{{ $product->sku }}</p>
            </div>
            <div class="flex justify-between text-lg font-medium text-gray-800 mt-2">
                <p><strong>In Stock: </strong>{{ $product->in_stock }}</p>
            </div>
        </div>
    </div>
@endsection