@extends('layouts.app')
    @section('content')
        @foreach($post as $item)
            @if(Auth::user()->name == $item->users->name)
                <section>
                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <img class="center" src="{{ $item->users->image}}" style="border-radius: 50%;" alt="Profile" width="30%">
                                    </div>
                                    <div class="card-body">
                                        <div class="inputbx">
                                            <span>{{ __('Name') }}</span>
                                            <input id="name" type="text" value="{{ $item->users->name}}" readonly>
                                            
                                        </div>
                                        
                                        <div class="inputbx">
                                            <span>{{ __('E-Mail Address') }}</span>
                                            <input id="email" type="email" value="{{ $item->users->email}}" readonly>
                                            
                                        </div>
                                        
                                        <div class="inputbx">
                                            <span>{{ __('Phone No.') }}</span>
                                            <input id="phone" type="number" value="{{ $item->users->phone}}" readonly>
                                        </div>
                                        <br>
                                
                                        <div class="card text-center">
                                            <div class="card-header">
                                              Photos
                                            </div>
                                            <div class="card-body">
                                                <div class="col-md-12">
                                                    @foreach($post as $key=> $item)
                                                    
                                                        @if(Auth::user()->name == $item->users->name)
                                                           <img src="{{ asset('uplodes/blog/'.$item->image)}}" class="img-responsive allimg" alt="Image" width="48%" height="100%">
                                                       @endif
                                                    @endforeach
                                               </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              @break
            @endif
        @endforeach
    @endsection