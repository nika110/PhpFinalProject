@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="font-weight-bold">
                    <a href="/profile/{{ $post->id }}">
                        Go Back To profile
                 </a>
                </div>
            </div>
            <div>
                <h2>{{ $post->caption }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
