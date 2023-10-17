@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

    <div class="container p-3 border" style="background-color: #fff">
        <h1>Halo, selamat datang {{ Auth::User()->name }}</h1>
        <h5>Di bawah ini berita yang sudah kamu buat</h5>
        <hr>
        <div class="table-responsive pt-2">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr style="background-color: rgb(175, 175, 175)">
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $item)
                        <tr>
                            <td>{{ $index + $berita->firstItem() }}</td>
                            <td>{{ $item->title }}</td>
                            @foreach ($category as $categories)
                                @if ($categories->id == $item->category_id)
                                    <td>{{ $categories->name }}</td>
                                @endif
                            @endforeach
                            <td>{{ $item->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $berita->links() }}
    </div>


@endsection
