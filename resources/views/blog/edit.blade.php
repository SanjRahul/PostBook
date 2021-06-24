@extends('layouts.app')

@section('content')
<div class="container addpost">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h4>
                     Edit Posts 
                  </h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('posts/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" placeholder="Write Something...." rows="3">{!! $post->description !!}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Photo</label>
                            <input type="file" name="image" value="" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-outline-primary">Update Post</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
