@extends('layout')
@section('content')
<div class="bg-card p-6 rounded-xl border border-gray-800">
    <h1 class="text-2xl mb-4">Your Cart</h1>
    @if(session('cart'))
        <ul>
        @foreach(session('cart') as $id => $details)
            <li class="flex justify-between py-2 border-b border-gray-800">
                <span>{{ $details['name'] }} x {{ $details['quantity'] }}</span>
                <span>${{ $details['price'] * $details['quantity'] }}</span>
            </li>
        @endforeach
        </ul>
        <a href="{{ route('checkout') }}" class="block text-center bg-accent text-black font-bold py-3 mt-6 rounded">Checkout</a>
    @else
        <p class="text-gray-500">Cart is empty.</p>
    @endif
</div>
@endsection