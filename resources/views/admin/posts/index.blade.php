@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-header">{{ $movie->name }}</div>
                            <div class="card-body">{{ $movie->cast }}</div>

                            <div class="card-body">
                                    <ul>
                                        @foreach ($movie->tags as $tag)
                                            <li>{{ $tag->type }}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
