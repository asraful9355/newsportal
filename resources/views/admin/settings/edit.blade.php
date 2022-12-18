@extends('layouts.app') @section('content')

<!-- Main content -->
<div class="content mt-3">
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Update Settings</h3>
                            <a href="{{ route('setting.index') }}" class="btn btn-primary">Go Back to Settings</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{route('setting.update',['id'=> $setting->id])}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="name" class="">Site Name</label>
                                        <input type="text" class="form-control text-center" name="site_name" id="name" value="{{ $setting->site_name }}" />
                                    </div>
                                    @error('site_name')
                                    <p class="text-danger">{{ $message}}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="name" class="">Contact Number</label>
                                        <input type="number" class="form-control text-center" name="contact_number" value="{{ $setting->contact_number }}" />
                                    </div>
                                    @error('contact_number')
                                    <p class="text-danger">{{ $message}}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="name" class="">Contact Email</label>
                                        <input type="email" class="form-control text-center" name="contact_email" value="{{ $setting->contact_email }}" />
                                    </div>
                                    @error('contact_email')
                                    <p class="text-danger">{{ $message}}</p>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="name" class="">Address</label>
                                        <input type="text" class="form-control text-center" name="address" value="{{ $setting->address }}" />
                                    </div>
                                    @error('address')
                                    <p class="text-danger">{{ $message}}</p>
                                    @enderror


                                    <div class="row mb-2">
                                          <label for="image">Logo Image:</label>
                                          <div class="col-md-12">
                                              <img id="showImage" src="{{ asset($setting->logo) }}" class="user_img" alt="" style="width: 120px; height: 120px;">
                                              <div class="custom-file">
                                                  <input type="file" name="logo" class="form-control-file border mt-3 mb-3" id="image" value="{{  $setting->logo }}">
                                              </div>
                                          </div>
                                          @error('logo')
                                          <p class="text-danger">{{ $message }}</p>
                                          @enderror
                                      </div>


                                    <div class="form-group mt-5">
                                        <input type="submit" class="btn btn-success" />
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
