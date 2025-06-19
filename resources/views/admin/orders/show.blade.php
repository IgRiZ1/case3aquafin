@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Bestelling #{{ $order->id }}</h2>
    <div class="mb-3"><b>Status:</b> {{ $order->status }}</div>
    <div class="mb-3"><b>Gebruiker:</b> {{ $order->user->username ?? $order->user->email ?? '-' }}</div>
    <h4 class="mt-4 mb-2">Producten</h4>
    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Product</th>
                <th>Aantal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
                <tr>
                    <td>{{ $item->product->name ?? '-' }}</td>
                    <td>{{ $item->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary mt-3">Terug naar overzicht</a>
</div>
@endsection 