@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Create Product</strong>
            </div>
            <div class="card-body">
                
                <div class="row"> 
                    <div class="col-md-10"></div>
                    <div class="col-md-2 mb-3">
                        <a href="{{ route('products.index') }}"><button type="button" class="btn btn-primary float-right">Back</button></a>
                    </div>
                </div>

                <div class="row"> 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection