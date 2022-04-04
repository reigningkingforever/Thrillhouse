@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Admins</h4>
                            
                            
                                <a class="btn btn-primary" data-toggle="modal" href="#add">Add
                                    Admin</a>
                            
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($admins as $admin)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$admin->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('admin.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="admin_id" class="form-control" value="{{$admin->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$admin->id}}" aria-labelledby="edit_{{$admin->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Admin</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('admin.save')}}" method="POST"> @csrf
                                                                            
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Name</label>
                                                                                        <input type="text" name="name" class="form-control" value="{{$admin->name}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Email</label>
                                                                                        <input type="email" name="email" class="form-control" value="{{$admin->email}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Password</label>
                                                                                        <input type="password" name="password" class="form-control" placeholder="password">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Repeat Password</label>
                                                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="password">
                                                                                    </div>
                                                                                    
                                                                                    <div class="text-right">
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Admins</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<div class="modal fade modal-primary" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('admin.save')}}" method="POST"> @csrf
                                                                            
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-form-label">Power unit</label>
                                        <select name="power_unit" class="form-control">
                                            <option value="hp">Horse Power (1hp = 0.7355 kW)</option>
                                            <option value="kW">KiloWatts (1kW = 1000 W)</option>
                                            <option value="W">Watts</option>
                                        </select>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
@section('scripts')
<script src="{{asset('js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
@endsection
