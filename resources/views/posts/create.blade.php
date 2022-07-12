@extends('layouts.app')

@section('content')
<div class="container bg-warning">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">

            <div class="col-8 offset-2">
                <h1 class="pt-5"> Add New Post</h1>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Post title</label>


                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" require autocomplete="title" autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Post Description</label>


                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" require autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                                 @error('image')

                                        <strong>{{ $message }}</strong>

                                @enderror
                </div>
                <div class="row py-5">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
            </div>


        </div>

    </form>

</div>
@endsection

