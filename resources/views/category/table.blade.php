@extends('layouts.main')
@section('title', 'Category Table')

@section('content')
    <div class="container p-3 rounded" style="background-color:white">
        <h1>Category Table</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr style="background-color: rgb(175, 175, 175)">
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $index => $item)
                        <tr>
                            <td>{{$index + $category->firstItem() }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('category.edit', $item->id) }}" class="btn text-white"
                                        style="background-color: rgb(49, 211, 0)"><i class="bi bi-subtract me-2"></i>
                                        Edit</a>
                                    <a href="{{ route('category.destroy', $item->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true"><i class="bi bi-trash me-2"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $category->links() }}
    </div>
@endsection
