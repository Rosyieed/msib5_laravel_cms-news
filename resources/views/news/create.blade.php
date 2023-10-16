@extends('layouts.main')
@section('title', 'Create News')

@section('content')

    <div class="container p-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create News</h3>
            </div>
            <form action="{{ route('news.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul Berita:</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Masukkan judul berita" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Berita:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Masukkan deskripsi berita" required></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
