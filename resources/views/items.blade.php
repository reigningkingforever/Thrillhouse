@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Items</h4>
                            
                            
                                <a class="btn btn-primary" data-toggle="modal" href="#add">Add
                                    Item</a>
                            
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Category</th>
                                    <th>Model</th>
                                    <th>Rating</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->detail}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{$item->sku}}</td>
                                            <td>{{$item->rating}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$item->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('item.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="item_id" class="form-control" value="{{$item->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$item->id}}" aria-labelledby="edit_{{$item->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Item</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('item.save')}}" method="POST"> @csrf
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Name</label>
                                                                                        <input type="text" name="name" value="{{$item->name}}" class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Model Number</label>
                                                                                        <input type="text" name="detail" value="{{$item->sku}}" class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Details</label>
                                                                                        <input type="text" name="detail" value="{{$item->detail}}" class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Category</label>
                                                                                        <select name="category_id" class="form-control">
                                                                                            @foreach ($categories as $category)
                                                                                                <option value="{{$category->id}}" @if($item->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                                                                            @endforeach
                                                                                            
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Power Rating</label>
                                                                                        <input type="text" name="rating" value="{{$item->rating}}" class="form-control">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Amount</label>
                                                                                        <input type="number" name="amount" value="{{$item->amount}}" class="form-control">
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
                                            <td colspan="8">No Items</td>
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
                <h5 class="modal-title">Add New Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('item.save')}}" method="POST"> @csrf
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Model Number</label>
                                        <input type="text" name="detail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Details</label>
                                        <input type="text" name="detail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Power Rating</label>
                                        <input type="text" name="rating" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Amount</label>
                                        <input type="number" name="amount" class="form-control">
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
