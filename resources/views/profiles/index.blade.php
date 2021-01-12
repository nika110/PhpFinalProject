@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-2">
            <img src="/storage/{{ $user->profile->image }}" class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <h1>
                    {{ $user->username  }}
                    </h1>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}">
                    </follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/post/create">Add Post</a>
                @endcan


            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile Image</a>
            @endcan

            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count()  }}</strong> Posts</div>
                <div class="pr-4"><strong>{{ $user->profile->followers->count() }}</strong> Followers</div>
                <div class="pr-4"><strong>{{ $user->following->count() }}</strong> Followings</div>

            </div>

        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
    </div>
</div>
@endsection
