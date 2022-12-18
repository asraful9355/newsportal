@extends('layouts.app') @section('content')
<!-- Main content -->
<div class="content mt-3">
    <div class="container-fluied">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Update Tag</h3>
                            <a href="{{ route('index.tag') }}" class="btn btn-primary">Go Back to Tag List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{route('update.tag',['id'=>$tag->id])}}" method="post">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Tags Name:</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="type Tag name here" value="{{$tag->name}}" />
                                        </div>
                                        @error('name')
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
