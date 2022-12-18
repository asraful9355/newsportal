@extends('layouts.app') @section('content')
<div class="content">
    <div class="container-fluied">
        <div class="row mt-3">
            <div class="card col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Setting</h3>
                    </div>
                </div>
            </div>
            <div class="col-12  ">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Site Name</th>
                                    <th>Contact No</th>
                                    <th>Contact Email</th>
                                    <th>Address</th>
                                    <th>Log</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$setting->site_name}}</td>
                                    <td>{{$setting->contact_number}}</td>
                                    <td>{{$setting->contact_email}}</td>
                                    <td>{{$setting->address}}</td>
                                    <td><img src="{{ asset($setting->logo) }}" alt="" style=" height:70px; width:100px;"></td>
                                    <td>
                                        <a href="{{ route('setting.edit',['id' => $setting->id ]) }}" class="btn btn-primary btn-sm" id="fa"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
