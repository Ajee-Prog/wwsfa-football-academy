@extends('layouts.app')

@section('content')
<div class="container  bg-warning">
    <a href="{{url('/homee')}}">back to home</a>
    <div class="row bg-primary justify-content-center mt-5 mb-5">

            <h1 class="py-2 px-auto text-warning "> Add New Profile</h1>

    </div>
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">

            <div class="col-10 offset-2">

                <div class="form-group row">
                    <div class="col col-5">
                        <label for="nationality" class="col-md-4 col-form-label text-primary fw-bold fs-1">Nationality:</label>


                        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" require autocomplete="nationality" placeholder="Enter Your Nationality" autofocus>

                        @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col col-5">
                        <label for="position" class="col-md-5 col-form-label ">Player Position:</label>


                        <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" require autocomplete="position" placeholder="Enter Best Position Play" autofocus>

                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-2">
                <div class="form-group row">
                    <div class="col col-5">
                        <label for="height" class="col-md-4 col-form-label ">Player Height:</label>


                        <input id="height" type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}" require autocomplete="height" placeholder="Enter Your Height" autofocus>

                        @error('height')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col col-5">
                        <label for="weight" class="col-md-5 col-form-label ">Player Weight:</label>


                        <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}" require autocomplete="weight" placeholder="Enter Your Height" autofocus>

                        @error('weight')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col col-10">
                        <label for="image" class="col-md-8 col-form-label ">Player Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                                 @error('image')

                                        <strong>{{ $message }}</strong>

                                @enderror
                    </div>

                    <div class="col col-4">
                        <label for="birthday" class="col-md-5 col-form-label ">Date of Birt:</label>


                        <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" require autocomplete="birthday" autofocus>

                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col col-2">
                        <label for="age" class="col-md-5 col-form-label ">Age:</label>


                        <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" require autocomplete="age" autofocus>

                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col col-4">
                        <label for="birthday" class="col-md-8 col-form-label ">Place of Birth:</label>


                        <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" require autocomplete="birthday" placeholder="Enter Place of Birth" autofocus>

                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="row form-group">
                        <div class="col col-8">
                            <label for="image" class="col-md-8 col-form-label ">Player Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                                     @error('image')

                                            <strong>{{ $message }}</strong>

                                    @enderror
                        </div>
                    </div> --}}



                </div>
                <div class="row justify-content-center py-5">
                    <button type="submit" class="btn btn-primary">Save New Profile</button>
                </div>

                </div>


                {{-- <div class="row">
                    <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                                 @error('image')

                                        <strong>{{ $message }}</strong>

                                @enderror
                </div> --}}

            </div>



        </div>

    </form>

</div>
@endsection

