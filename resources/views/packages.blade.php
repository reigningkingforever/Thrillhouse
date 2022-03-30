@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Packages</h4>
                            
                            
                                <a class="btn btn-primary" data-toggle="modal" href="#add">Add
                                    Package</a>
                            
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Item</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($packages as $package)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$package->name}}-{{$package->type}}</td>
                                            <td>{{$package->details}}</td>
                                            <td>{{$package->items->count()}}</td>
                                            <td>{{$package->amount}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$package->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('package.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="package_id" class="form-control" value="{{$package->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$package->id}}" aria-labelledby="edit_{{$package->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Package</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('package.save')}}" method="POST"> @csrf
                                                                            
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Name</label>
                                                                                        <input type="text" name="name" class="form-control" value="{{$package->name}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Type</label>
                                                                                        <select name="type" class="form-control">
                                                                                            <option>A</option>
                                                                                            <option>B</option>
                                                                                            <option>C</option>
                                                                                            <option>D</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class=" col-form-label">Details</label>
                                                                                        <input type="text" name="details" class="form-control" value="{{$package->details}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Items</label>
                                                                                        <select name="items[]" class="form-control" multiple>
                                                                                            @foreach ($items as $item)
                                                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class=" col-form-label">Amount</label>
                                                                                        <input type="text" name="amount" class="form-control" value="{{$package->amount}}">
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
                                            <td>No Packages</td>
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
                <h5 class="modal-title">Add New Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('package.save')}}" method="POST"> @csrf
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Details</label>
                                        <input type="text" name="details" class="form-control">
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
