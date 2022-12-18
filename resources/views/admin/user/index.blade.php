@extends('layouts.app') @section('content')
<div class="content">
    <div class="container-fluied">
        <div class="row mt-3">
            <div class="card col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">User List</h3>
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>
                    </div>
                </div>
            </div>
            <div class="col-12 offset-lg-2 col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body p-0">
                        @if($users->count()>0)
                        <table class="table table-bordered table-hover table-striped">
                            <tr class="bg-success">
                                <th class="text-white text-center font-weight-bold">Id</th>
                                <th class="text-white text-center font-weight-bold">Image</th>
                                <th class="text-white text-center font-weight-bold">Name</th>
                                <th class="text-white text-center font-weight-bold">Permission</th>
                                <th class="text-white text-center font-weight-bold" colspan="2">Action</th>
                            </tr>

                            @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}" width="50" height="50" class="rounded" /></td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->admin)
                                    <a href="{{ route('user.not.admin',['id'=>$user->id ])}}" class="btn btn-danger btn-sm">Remove Permission</a>
                                    @else
                                    <a href="{{ route('user.admin',['id'=>$user->id ])}}" class="btn btn-success btn-sm">Make Admin</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm" id="fa"><i class="fas fa-edit"></i></a>

                                    <a href="" class="btn btn-danger btn-sm" id="fa_a" data-toggle="modal" data-target="#modal-primary1"><i class="fas fa-trash"></i></a>
                                    <!-- start modal -->
                                    <div class="modal fade" id="modal-primary1">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-primary">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">tag</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body bg-light">
                                                    <p>Are you sure tagy parmanently deleted?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between bg-light">
                                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                    <a type="button" href="" class="btn btn-primary"><i style="margin-right: 5px; color: white;" class="fas fa-trash"></i><span class="text-light">OK</span></a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>
                                    <!-- end modal -->
                                </td>
                            </tr>

                            @endforeach
                        </table>
                        @else
                        <h3 class="text-center text-danger p-5">There Are No Tag Yet.</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
