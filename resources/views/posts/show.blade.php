<h1>A Post Profile</h1>
@extends('layouts.app')

@section('content')
<div class="container bg-warning">

    <div class="row pt-5">



        <div class="col-12 pb-4">
            <div class="row">
                <div class="col-8">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam amet voluptatem maiores alias beatae at quam, debitis, tenetur nam sequi nemo quisquam. Tempora, eius dicta consequatur sit temporibus exercitationem odio!</p> --}}
                </div>
                <div class="col">
                    <h1 class="">{{$post->user->user_name}}</h1>
                    <p class="">{{$post->description}}</p>
                    <p class="bg-primary text-light p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam amet voluptatem maiores alias beatae at quam, debitis, tenetur nam sequi nemo quisquam. Tempora, eius dicta consequatur sit temporibus exercitationem odio!</p></div>
            </div>
        </div>




    </div>


</div>
@endsection


