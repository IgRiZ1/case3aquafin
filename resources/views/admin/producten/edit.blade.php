@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Product bewerken</h2>
    <form action="{{ route('admin.producten.update', $product->id) }}" method="POST" class="bg-white p-4 rounded shadow-sm" style="max-width:500px;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Naam</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $product->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <a href="{{ route('admin.producten.index') }}" class="btn btn-secondary ms-2">Annuleren</a>
    </form>
</div>
@endsection 