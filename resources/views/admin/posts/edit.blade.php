@extends('layouts.app') @section('content')

<!-- Main content -->
<div class="content mt-3">
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Update Post</h3>
                            <a href="{{ route('index.post') }}" class="btn btn-primary">Go Back to Category List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ route('update.post',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Post Title:</label>
                                            <input type="text" name="title" class="form-control" id="name" placeholder="please post title here" value="{{ $post->title}}" />
                                        </div>
                                        @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="category">Category_Id:</label>
                                            <select name="category_id" id="category" class="form-control">
                                                @foreach($categories as $cat )
                                                <option value="{{ $cat->id }}" @if ($cat->id == $post->category_id) selected @endif >{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="row mb-2">
                                            <label for="image">Featured Image:</label>
                                            <div class="col-md-12">
                                                <img id="showImage" src="{{ asset($post->featured) }}" class="user_img" alt="" style="width: 120px; height: 120px;" />
                                                <div class="custom-file">
                                                    <input type="file" name="featured" class="form-control-file border mt-3 mb-3" id="image" value="{{ $post->featured}}" />
                                                </div>
                                            </div>
                                            @error('featured')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group" style="margin-top: 30px;">
                                            <label for="tags"> Select Tags</label>
                                            @foreach($tags as $tag)
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" @foreach ($post->tags as $t) @if( $tag->id == $t->id) checked @endif @endforeach > {{ $tag->name}} </label>
                                            </div>
                                            @endforeach
                                        </div>

                                        <div class="form-group">
                                            <label for="content">Content:</label>
                                            <textarea name="content" id="content" rows="4" class="form-control" placeholder="Please some content here">{{ $post->content}}</textarea>
                                        </div>
                                        @error('content')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-success btn-lg" value="Create Now" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
