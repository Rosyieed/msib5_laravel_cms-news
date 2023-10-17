@extends('layouts.main')
@section('title', 'Edit News')

@section('content')

    <div class="container p-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit News</h3>
            </div>
            <form action="{{ route('news.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul Berita:</label>
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Masukkan judul berita" value="{{ $berita->title }}">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select name="category_id" id="category_id" class="form-control"
                            placeholder="Masukkan category berita" required>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Berita:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Masukkan deskripsi berita">{{ $berita->description }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
