@extends('layouts.app') @section('content')

<!-- Main content -->
<div class="content mt-3">
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Update Profile</h3>
                            <a href="{{ route('my.profile') }}" class="btn btn-primary">Go Back to My Profile</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{  route('update.profile',['id'=>$users->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $users->name }}" />
                                    </div>
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group mt-3">
                                        <label for="featured">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $users->email}}" />
                                    </div>
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group mt-3">
                                        <label for="title">Facebook</label>
                                        <input type="text" name="facebook" class="form-control" value="{{ $profile->facebook }}" />
                                    </div>
                                    @error('facebook')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="form-group mt-3">
                                        <label for="title">Youtube</label>
                                        <input type="text" name="youtube" class="form-control" value="{{ $profile->youtube }}" />
                                    </div>
                                    @error('youtube')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group mt-3">
                                        <label for="title">Twitter</label>
                                        <input type="text" name="twitter" class="form-control" value="{{ $profile->twitter }}" />
                                    </div>
                                    @error('twitter')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group mt-3">
                                        <label for="title">Mobaile</label>
                                        <input type="number" name="mobaile" class="form-control" value="{{ $profile->mobaile }}" />
                                    </div>
                                    @error('mobaile')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="form-group mt-3">
                                        <label for="title">Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $profile->address }}" />
                                    </div>
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <div class="row mb-4">
                                        <label for="image">My Profile Picture</label>
                                        <div class="col-md-12">
                                            <img id="showImage" src="{{ asset( $users->profile_photo_path) }}" class="user_img" alt="" style="width: 120px; height: 120px;" />
                                            <div class="custom-file">
                                                <input type="file" name="profile_photo_path" class="form-control-file border mt-3 mb-3" id="image" value="{{$users->profile_photo_path}}" />
                                            </div>
                                        </div>
                                        @error('featured')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="form-group mt-5">
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
