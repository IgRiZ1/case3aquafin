@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Producten beheren</h2>
    <a href="{{ route('admin.producten.create') }}" class="btn btn-success mb-4">+ Product toevoegen</a>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary mb-4 ms-2">Bestellingbeheer</a>
    <form method="GET" action="" class="mb-4 d-flex" style="max-width:400px;">
        <input type="text" name="search" class="form-control me-2" placeholder="Zoek op naam of beschrijving..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Zoeken</button>
    </form>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered bg-white admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Beschrijving</th>
                <th>Afbeelding</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($producten as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td><img src="/images/{{ $product->image }}" alt="{{ $product->name }}" style="width:60px; height:60px; object-fit:cover; border-radius:8px;"></td>
                <td class="d-flex gap-2">
                    <a href="{{ route('admin.producten.edit', $product->id) }}" class="btn btn-sm btn-primary">Bewerken</a>
                    <form action="{{ route('admin.producten.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Verwijderen</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection