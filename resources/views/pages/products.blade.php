@extends('templates.admin')
@section('main')
<div class="container">
    @foreach ($categories as $category)
    <h2 class="mb-3 mt-3">{{ $category->name }}</h2>
        @foreach ($category->products as $product)
            @include('components.product', [
                    'name' => $product->name,
                    'description' => $product->description,
                    'tags' => $product->tags,
                    'year' => $product->year,
                    'price' => $product->price
            ])
        @endforeach
    @endforeach
</div>
@endsection
