<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-header">
                        Users
                    </div>
                    <div class="card-body chatbox p-0">
                        <ul class="list-group">
                            @foreach ($users as $user)
                            @if($user->id !== auth()->id())
                            @php
                                $not_seen = App\Models\Message::where('user_id',$user->id)->where('receiver_id',auth()->id())->where('is_seen',false)->get() ?? null
                            @endphp
                            <a wire:click="getUser({{ $user->id }})" class="text-dark link">
                                <li class="list-group-item"><img class="onlineuser round" src="{{ $user->image }}">
                                    @if($user->is_online == true)
                                    <i class="fa fa-circle text-success online-icon"></i>
                                    @endif
                                        <span class="onlinename">{{ $user->name }}</span>
                                    @if(filled($not_seen))
                                    <span class="badge round">{{ $not_seen->count() }}</span>
                                    @endif
                                </li>
                            </a>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>   
            </div>
            @if(isset($sender))
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        
                         <img class="img-fluid onlineimg Addpost" src="{{ $sender->image }}"> 
                         {{ $sender->name }}  
                        
                         
                    </div>
                    <div class="card-body message-box" wire:poll="mountdata">
                        @if(filled($allmessages))
                        @foreach ($allmessages as $msg)
                        <div class="single-message @if($msg->user_id == auth()->id()) sent @else received @endif">
                            {{--  <img class="img-fluid onlineimg" src="{{ $msg->user->image }}">  --}}
                            
                            {{--  <p class="font-weight-bolder my-0">{{ $msg->user->name }}</p>  --}}
                            {{ $msg->message }}
                             <br><small class="text-muted w-100"> <em>{{ $msg->created_at->diffForHumans() }}</em></small> 
                        </div>
                        
                        {{-- <small class="text-muted text-center w-100"><em>{{ $msg->created_at }}</em></small>   --}}
                        @endforeach
                        @endif
                    </div>
                    <div class="card-footer">
                        <form wire:submit.prevent="SendMessage">
                            <div class="row">
                                <div class="col-md-10 mb-3">
                                    <input wire:model="message" class="form-control input shadow-none w-100 d-line-block" placeholder="Type a message" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <button type="submit" class="btn btn-primary d-inline-block w-100"><i class="far fa-paper-plane"></i>Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
