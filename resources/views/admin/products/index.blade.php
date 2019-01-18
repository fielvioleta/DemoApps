@extends('layouts.admin')

@section('content')
    <!--  Products  -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Products</strong>
                </div>
                <div class="card-body">
                    
                    <div class="row"> 
                        <div class="col-md-10"></div>
                        <div class="col-md-2 mb-3">
                            <a href="{{ route('products.create') }}"><button type="button" class="btn btn-primary float-right">Create Product</button></a>
                        </div>
                    </div>

                    @include('partials.messages.success')

                    <div class="row"> 
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>
                                            @if( $product->image_path && file_exists(public_path('/storage/products/'.$product->image_path)) )
                                                <img src="/storage/products/{{$product->image_path}}" width=100>
                                            @endif
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>

                                                <a href="{{ route('products.edit', $product->id)}}" >
                                                    <button class="btn btn-primary d-inline">Edit</button>
                                                </a>
                                                <form class="d-inline" action="{{ route('products.destroy', $product->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--  Products  -->

    <div class="clearfix"></div>
@endsection