@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <div class="mb-3">
        <h1 class="h3">Tambah Buku</h1>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}"
                        placeholder="Masukkan judul buku"
                    >
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input
                        type="text"
                        name="author"
                        id="author"
                        class="form-control @error('author') is-invalid @enderror"
                        value="{{ old('author') }}"
                        placeholder="Masukkan nama penulis"
                    >
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="published_year" class="form-label">Tahun Terbit</label>
                    <input
                        type="number"
                        name="published_year"
                        id="published_year"
                        class="form-control @error('published_year') is-invalid @enderror"
                        value="{{ old('published_year') }}"
                        min="1000"
                        max="{{ date('Y') }}"
                        placeholder="Masukkan tahun terbit"
                    >
                    @error('published_year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Buku
                </button>

                <a href="{{ route('books.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>
@endsection
