{{--  @extends('layouts.app')
@section('content')

<div class="container canaddpost authfunction" id="addpost">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                @if(session('status'))
                <div class="alert alert-success">{{ session('status')}}<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button></div>
                @endif
            </div>
            <div class="card">
                <div class="card-body">
                    <img class="Addpost" src="{{ Auth::user()->image }}" style="border-radius: 50%;" alt="" width="5%">
                    {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container allfunction">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('home')}}"><i class="far fa-home"></i>{{ __('Home') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container allfunction">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('alluser') }}"><i class="far fa-users"></i>{{ __('Users') }}</a> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container allfunction">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('alluser') }}"><i class="far fa-comment-alt"></i>{{ __('message') }}</a> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container allfunction">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('alluser') }}"><i class="far fa-bell"></i>{{ __('Notification') }}</a> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container allfunction">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="far fa-sign-out-alt"></i>{{ __('Logout') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection  --}}