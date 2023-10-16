@extends('layouts.main')
@section('title', 'News Table')

@section('content')
    <div class="container p-3 rounded" style="background-color:white">
        <h1>News Table</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr style="background-color: rgb(175, 175, 175)">
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $item)
                        <tr>
                            <td>{{ $index + $berita->firstItem() }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('news.edit', $item->id) }}" class="btn text-white"
                                        style="background-color: rgb(49, 211, 0)"><i class="bi bi-subtract me-2"></i> Edit</a>
                                    <a href="{{route('news.delete', $item->id)}}" class="btn btn-danger" data-confirm-delete="true"><i
                                            class="bi bi-trash me-2"></i> Delete</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $berita->links() }}
    </div>
@endsection
