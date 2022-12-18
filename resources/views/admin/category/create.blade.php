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
                            <h3 class="card-title">Add New Category</h3>
                            <a href="{{ route('index.category') }}" class="btn btn-primary">Go Back to Category List</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{route('store.category') }}" method="post">
                                    @csrf
                                   
                                    <div class="card-body">  
                                        <div class="form-group">
                                            <label for="name">Category Name:</label>                                              
                                            <input type="text" name="name" class="form-control" id="name" placeholder="type category name here" >
                                        </div>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                         <div class="form-group">
                                            <label for="">Please Select one:</label>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="1">
                                              <label class="form-check-label" for="flexRadioDefault1">
                                                <i>Goes Top Header Menu</i>
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="2">
                                              <label class="form-check-label" for="flexRadioDefault2">
                                                <i>Goes Main Menu</i>
                                              </label>
                                            </div>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault3" value="3">
                                              <label class="form-check-label" for="flexRadioDefault3">
                                                <i>Goes Footer Menu</i>
                                              </label>
                                            </div>
                                        </div>
                                        @error('radio')
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
