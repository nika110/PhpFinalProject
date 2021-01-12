@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
            </div>
        <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->id }}">
                                Go To profile
                            </a>
                        </div>
                    </div>
                    <div>
                        <h2>{{ $post->caption }}</h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
