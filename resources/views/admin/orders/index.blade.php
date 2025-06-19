@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Bestellingen</h2>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="row">
        @forelse($orders as $order)
        <div class="col-12 mb-4">
            <div class="p-4" style="background:#d6e8ff; border-radius:12px; border:2px solid #2196f3;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="mb-2"><b>Bestelling ID:</b> {{ $order->id }}</div>
                        <div><b>Status:</b> {{ $order->status }}</div>
                        <div><b>Gebruiker:</b> {{ $order->user->username ?? $order->user->email ?? '-' }}</div>
                    </div>
                    <div class="d-flex gap-2">
                        @if($order->status === 'In proces')
                            <form action="{{ route('admin.orders.arrived', $order->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Verwerkt</button>
                            </form>
                        @endif
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze bestelling wilt verwijderen?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Verwijder</button>
                        </form>
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h5>Geen bestellingen gevonden.</h5>
        </div>
        @endforelse
    </div>
</div>
@endsection