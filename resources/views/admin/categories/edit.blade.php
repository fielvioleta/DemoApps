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

                @include('partials.messages.error')

                <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                    <div class="row"> 
                        <div class="card-body card-block">
                             
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input value="{{$category->name}}" type="text" name="name" id="name" placeholder="Enter Category Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label>
                                    <textarea class="form-control" name="description" id="editor">{{$category->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image_path" class=" form-control-label">File input</label>
                                    <input type="file" id="image_path" name="image_path" class="form-control-file" accept="image/x-png,image/gif,image/jpeg">
                                </div>
                                
                        </div>
                    </div>

                    <div class="row"> 
                        <div class="col-md-12 pl-4">
                            <input class="btn btn-success" type="submit" value="Save">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection