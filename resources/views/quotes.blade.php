@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Quotes</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>Date</th>
                                    <th>Customer</th>
                                    <th>Appliances</th>
                                    <th>Packages</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($customers as $customer)
                                        <tr>
                                            <td>{{$customer->created_at->format('M-d')}}</td>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->appliances->count()}}</td>
                                            <td>{{$customer->packages->count()}}</td>
                                            <td>{{$customer->items->count()}}</td>
                                            <td>{{$customer->order->total}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$customer->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('customer.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="customer_id" class="form-control" value="{{$customer->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$customer->id}}" aria-labelledby="edit_{{$customer->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Quote</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('customer.save')}}" method="POST"> @csrf
                                                                            
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Name</label>
                                                                                        <input type="text" name="name" class="form-control" value="{{$customer->name}}">
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
                                            <td colspan="7">No Quotes</td>
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
                <h5 class="modal-title">Add New Quote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('customer.save')}}" method="POST"> @csrf
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
