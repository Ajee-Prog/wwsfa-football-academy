@extends('layouts.app')

@section('content')
<div class="container bg-warning">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/WwolfLogo.jpeg" alt="" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex">
                <h1 class="text-light">Whitewolf Stars Football Academy</h1>
                {{-- <h1>{{ $user->user_name }}</h1>
                <a href="#">Add New Post</a> --}}
            </div>
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->user_name }}</h1>
                <a href="/p/create">Add New Post</a>

            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"> <strong>53k</strong> Followers</div>
                <div class="pr-5"> <strong>212k</strong> Following</div>
                <div></div>
                <div></div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="pt2">
                {{$user->profile->description}}
            </div>
            <div class="font-weight-bold"><a href="#">{{$user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">

        @foreach ($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}"> <img src="/storage/{{$post->image}}" alt="" class="w-100"> </a>
        </div>

        @endforeach


    </div>
</div>
@endsection
