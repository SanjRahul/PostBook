@extends('layouts.app')
  @section('content')

  {{-- Add Posts --}}
    <div class="container addpost" id="addpost">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    @if(session('status'))
                    <div class="alert alert-success">{{ session('status')}}<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    @endif
                </div>
                <div class="card">
                    <div class="card-body">
                        <img class="Addpost" src="{{ Auth::user()->image }}">
                        <span class="px-2">Posts</span>
                        <a href="{{ url('posts/create')}}" class="btn btn-outline-primary float-end"> Add Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Posts --}}

    {{-- All Posts --}}
    @if($post->count())
        @foreach($post as $key=> $item)
            <section style="padding-top: 15px;">
                <div class="container ">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <img class="Addpost" src="{{ $item->users->image}}">
                                    <span class="px-2">{{ $item->users->name}}</span>
                                    @if(Auth::user()->name == $item->users->name)
                                    <a class="nav-link fas fa-ellipsis-h float-end" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">     
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown-item">
                                            <form action="{{ URL::to('posts/'.$item->id.'/edit')}}">
                                                <button class="btn btns">Edit</button>
                                            </form>
                                        </li>
                                        
                                        <li  class="dropdown-item">
                                            <form action="{{ url('posts/'.$item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btnsdang" onclick="return myFunction();">Delete</button>
                                            </form> 
                                            @endif
                                        </li>
                                    </ul> 
                                </div>
                                <div class="card-body">
                                    {{ $item->description}}
                                </div>
                                <div class="card-body image">
                                    <a href="{{ asset('uplodes/blog/'.$item->image)}}"><img src="{{ asset('uplodes/blog/'.$item->image)}}" alt="Image" width="100%" height="100%"></a>
                                </div>
                                <div class="card-footer text-muted">
                                    {{ $item->updated_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- All posts --}}
        @endforeach
    @endif
@endsection