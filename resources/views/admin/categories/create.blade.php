@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Nieuwe categorie toevoegen</h2>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm" style="max-width:500px;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Categorienaam</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
        <a href="{{ route('admin.producten.index') }}" class="btn btn-secondary ms-2">Annuleren</a>
    </form>
</div>
@endsection 