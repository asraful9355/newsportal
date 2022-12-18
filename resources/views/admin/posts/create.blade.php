@extends('layouts.app')
@section('content')

 <!-- Main content -->
    <div class="content  mt-3">
      <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Add Post </h3>
                            <a href="{{ route('index.post') }}" class="btn btn-primary">Go Back to p List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{route('store.post') }}" method="post"  enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="card-body">  
                                        <div class="form-group">
                                            <label for="name">Post Title:</label>                                              
                                            <input type="text" name="title" class="form-control" id="name" placeholder="please post title here" value="{{ old('title')}}">
                                        </div>
                                        @error('title')
                                          <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                         <div class="form-group">
                                            <label for="category">Category_Id:</label>
                                           <select name="category_id"  id="category" class="form-control">
                                              @foreach($categories as $cat )
                                               <option value="{{ $cat->id }}">{{$cat->name}}</option>
                                              @endforeach
                                           </select>
                                         </div>
                                       
                                         <div class="row mb-2">
                                          <label for="image">Featured Image:</label>
                                          <div class="col-md-12">
                                              <img id="showImage" src="https://banglanews24.falgunibazar.com/uploads/default.jpg" class="user_img" alt="" style="width: 120px; height: 120px;">
                                              <div class="custom-file">
                                                  <input type="file" name="featured" class="form-control-file border mt-3 mb-3" id="image" value="{{ old('featured')}}">
                                              </div>
                                          </div>
                                          @error('featured')
                                          <p class="text-danger">{{ $message }}</p>
                                          @enderror
                                      </div>

                                      <div class="form-group" style="margin-top: 30px;">
                                        <label>Select Tags:</label>
                                       <div style="height:150px; width:500px; overflow-y:scroll">
                                          <div class="checkbox">
                                            <label>
                                             @foreach($tags as $tag)
                                               <div>
                                                 <input type="checkbox"  name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                                               </div>
                                             @endforeach
                                            </label>
                                           </div>
                                          </div>
                                        </div>

                                          <div class="form-group">
                                            <label for="content">Content:</label>
                                             <textarea name="content" id="content" rows="4" class="form-control"
                                                placeholder="Please some content here">{{ old('content')}}</textarea>
                                         </div>
                                         @error('content')
                                         <p class="text-danger">{{ $message }}</p>
                                         @enderror
                                       
                                        <div class="form-group">
                                          <input type="submit" class="btn btn-outline-success btn-lg" value="Create Now">
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
