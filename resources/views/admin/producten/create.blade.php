@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Nieuw product toevoegen</h2>
    <form action="{{ route('admin.producten.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm" style="max-width:500px;">
        @csrf
        <div class="mb-3">
            <label for="category_id" class="form-label">Categorie</label>
            <select name="category_id" id="category_id" class="form-select">
                <option value="">-- Kies een bestaande categorie --</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Titel</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
        <a href="{{ route('admin.producten.index') }}" class="btn btn-secondary ms-2">Annuleren</a>
    </form>
</div>
@endsection