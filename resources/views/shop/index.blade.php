@extends('layout')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($products as $product)
    <div class="bg-card border border-gray-800 p-6 rounded-xl hover:border-accent transition">
        <h2 class="text-xl font-bold">{{ $product->name }}</h2>
        <p class="text-gray-400 text-sm mt-2">{{ $product->description }}</p>
        <div class="flex justify-between items-center mt-4">
            <span class="text-accent text-lg">${{ $product->price }}</span>
            <a href="{{ route('add.to.cart', $product->id) }}" class="bg-gray-800 px-4 py-2 rounded hover:bg-accent hover:text-black transition">Buy</a>
        </div>
    </div>
    @endforeach
</div>
@endsection