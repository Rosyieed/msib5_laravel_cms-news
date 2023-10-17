@extends('layouts.main')
@section('title', 'Edit Category')

@section('content')
    <div class="container p-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create News</h3>
            </div>
            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Masukkan judul berita" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
