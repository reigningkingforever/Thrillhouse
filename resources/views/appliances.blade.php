@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Appliances</h4>
                            
                            
                                <a class="btn btn-primary" data-toggle="modal" href="#add">Add
                                    Appliance</a>
                            
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Power type</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($appliances as $appliance)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$appliance->name}}</td>
                                            <td>
                                                @if($appliance->power_unit == 'hp')
                                                    Horse Power
                                                @elseif($appliance->power_unit == 'kW')
                                                    KiloWatts
                                                @else 
                                                    Watts
                                                @endif
                                            </td>    
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$appliance->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('appliance.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="appliance_id" class="form-control" value="{{$appliance->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$appliance->id}}" aria-labelledby="edit_{{$appliance->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Appliance</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('appliance.save')}}" method="POST"> @csrf
                                                                            
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Name</label>
                                                                                        <input type="text" name="name" class="form-control" value="{{$appliance->name}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class=" col-form-label">Power unit</label>
                                                                                        <select name="power_unit" class="form-control">
                                                                                            <option value="hp" @if($appliance->power_unit == 'hp') selected @endif>Horse Power (1hp = 0.7355 kW)</option>
                                                                                            <option value="kW" @if($appliance->power_unit == 'kW') selected @endif>KiloWatts (1kW = 1000 W)</option>
                                                                                            <option value="W" @if($appliance->power_unit == 'W') selected @endif>Watts</option>
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
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>No Appliances</td>
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
                <h5 class="modal-title">Add New Appliance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('appliance.save')}}" method="POST"> @csrf
                                                                            
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
