@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Create Category</strong>
            </div>
            <div class="card-body">
                
                <div class="row"> 
                    <div class="col-md-10"></div>
                    <div class="col-md-2 mb-3">
                        <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-primary float-right">Back</button></a>
                    </div>
                </div>

                <div class="row"> 
                    <div class="card-body card-block">
                        <form method="post" action="{{ route('categories.store') }}">
                            @csrf   
                            
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Category Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description" class=" form-control-label">Description</label>
                                <input type="text" name="description" id="description" placeholder="Enter Description" class="form-control">
                            </div>

                        </form>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-12 pl-4">
                        <input class="btn btn-success" type="submit" value="Save">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection