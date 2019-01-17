@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Edit Product</strong>
            </div>
            <div class="card-body">
                
                <div class="row"> 
                    <div class="col-md-10"></div>
                    <div class="col-md-2 mb-3">
                        <a href="{{ route('products.index') }}"><button type="button" class="btn btn-primary float-right">Back</button></a>
                    </div>
                </div>

                @include('partials.messages.error')

                <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                    <div class="row"> 
                        <div class="card-body card-block">
                             
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control" value="{{$product->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="description" class=" form-control-label">Description</label>
                                    <textarea class="form-control" style="resize:none"rows="4" name="description" id="description" placeholder="Enter Description">{{$product->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price" class=" form-control-label">Price</label>
                                    <input type="text" name="price" id="price" placeholder="Enter Price" class="form-control" value="{{$product->price}}">
                                </div>

                                <div class="form-group">
                                    <label for="category_id" class=" form-control-label">Category</label>
                                    <select name="category_id" id="category_id" class="form-control" value="{{$product->category_id}}">
                                        <option value="0">Please Select Category</option>
                                        
                                        @foreach($categories as $key => $category)
                                            <option value="{{$category->id}}"
                                                @if ($category->id == $product->category_id))
                                                    selected="selected"
                                                @endif
                                                >{{$category->name}}</option>
                                        }
                                        }
                                        @endforeach

                                    </select>
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