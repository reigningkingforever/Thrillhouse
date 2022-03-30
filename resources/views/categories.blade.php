@extends('layouts.backend')

@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Categories</h4>
                            
                            
                                <a class="btn btn-primary" data-toggle="modal" href="#add">Add
                                    Category</a>
                            
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Item Count</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->details}}</td>
                                            <td>{{$category->items->count()}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-sm btn-info"
                                                        data-toggle="modal" href="#edit_{{$category->id}}">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>

                                                    <form action="{{route('category.delete')}}" method="POST" class="mb-0 ml-2"> @csrf
                                                        <div class="form-group-inline">
                                                            <div>
                                                                <input type="hidden" name="category_id" class="form-control" value="{{$category->id}}">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete </button>
                                                    </form>
                                                </div>
                                                <div class="modal fade modal-primary" tabindex="-1" role="dialog" id="edit_{{$category->id}}" aria-labelledby="edit_{{$category->id}}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Category</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex">
                                                                        <div class="card flex-fill">
                                                                            
                                                                            <div class="card-body">
                                                                                <form action="{{route('category.save')}}" method="POST"> @csrf
                                                                            
                                                                                    <div class="form-group">
                                                                                        <label class="col-form-label">Name</label>
                                                                                        
                                                                                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                                                                        
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class=" col-form-label">Details</label>
                                                                                        <input type="text" name="details" class="form-control" value="{{$category->details}}">
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
                                            <td colspan="5">No Categories</td>
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
                <h5 class="modal-title">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            
                            <div class="card-body">
                                <form action="{{route('category.save')}}" method="POST"> @csrf
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
