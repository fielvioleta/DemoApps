@extends('layouts.admin')

@section('content')
    <!--  Categories  -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Categories</strong>
                </div>
                <div class="card-body">
                    
                    <div class="row"> 
                        <div class="col-md-10"></div>
                        <div class="col-md-2 mb-3">
                            <a href="{{ route('categories.create') }}"><button type="button" class="btn btn-primary float-right">Create Category</button></a>
                        </div>
                    </div>

                    @include('partials.messages.success')

                    <div class="row"> 
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td class="w-25">

                                                <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary d-inline">Edit</a>
                                                <form class="d-inline" action="{{ route('categories.destroy', $category->id)}}" method="post">
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
    <!--  Categories  -->

    <div class="clearfix"></div>
@endsection