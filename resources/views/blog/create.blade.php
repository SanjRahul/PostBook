@extends('layouts.app')

@section('content')
<div class="container addpost">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <h4>
                     Add Posts
                  </h4>
                </div>

                <div class="card-body">
                    <form action="{{ url('posts')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Photo</label>
                            <input type="file" name="image" value="" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-outline-primary">Add Post</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
