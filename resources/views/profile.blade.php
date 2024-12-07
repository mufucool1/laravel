@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
               
                <div class="card-header">Welcome {{ $user->name }}</div>
                @if($profile_exists==1)
                <div class="card-body">
                    <p><span class="label">Title:</span> {{ $user->profile->title }}</p>
                    <p><span class="label">Description:</span> {{ $user->profile->description }}</p>
                    <p><span class="label">Url:</span> <a target="_blank" href="{{$user->profile->url}}">{{ $user->profile->url }}</a></p>
                </div>
                @else
                <div class="card-body">
                    Your profile is not created!
                </div>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection