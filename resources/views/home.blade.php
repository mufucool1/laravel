@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--{{ __('You are logged in!') }}-->

                    @if(Auth::user()->name!='')
                        Welcome {{ Auth::user()->name }}
                    @else
                        Welcome User
                    @endif

                    <a href="profile/{{ Auth::user()->id }}">Check your Profile</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
