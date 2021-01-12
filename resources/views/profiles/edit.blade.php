@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile Image</h1>
                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label "></label>
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <strong>{{ $message }}</strong>
                    @enderror

                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Update Profile</button>
                </div>



            </div>
        </div>

    </form>
</div>
@endsection