@extends('layouts.main')
@section('title', 'Create Category')

@section('content')
    <div class="container p-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Category</h3>
            </div>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Name:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Masukkan Nama Category" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
