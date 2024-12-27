@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->subtitle }}</p>
    <img src="{{ asset($product->image_path) }}" alt="{{ $product->title }}" class="img-fluid">
    <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Kembali</a>
</div>
@endsection
