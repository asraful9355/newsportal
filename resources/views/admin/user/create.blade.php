@extends('layouts.app') @section('content')

<!-- Main content -->
<div class="content mt-3">
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Add User</h3>
                            <a href="{{ route('user.index') }}" class="btn btn-primary">Go Back to User List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ route('user.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Name</label>
                                            <input type="text" name="name" class="form-control" />
                                        </div>
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div class="form-group mt-3">
                                            <label for="featured">Email</label>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="row mb-2">
                                            <label for="profile_photo_path">Featured Image:</label>
                                            <div class="col-md-12">
                                                <img id="showImage" src="" class="user_img" alt="" style="width: 120px; height: 120px;" />
                                                <div class="custom-file">
                                                    <input type="file" name="profile_photo_path" class="form-control-file border mt-3 mb-3" id="image" value="{{ old('featured')}}" />
                                                </div>
                                            </div>
                                            @error('profile_photo_path')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

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
