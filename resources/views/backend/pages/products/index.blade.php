@extends('layouts.admin')
@push('styles')
    <style>
        .image-size{
            width: 100px;
            height: auto;
        }
    </style>
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="alert alert-success"><strong>Success: </strong>{{ Session::get('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 d-flex align-items-center justify-content-between">Products
                        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary">Add New</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <thead>
                            <th>SL</th>
                            <th>Product Image</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @if (!$products->isEmpty())
                                @foreach ($products as $value)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td><img class="image-size" src="{{ asset('images/products/'.$value->feature_image) }}" alt=""></td>
                                        <td>{{ $value->name }}</td>
                                        <td>
                                            @if($value->status == 1)
                                                <span class="badge badge-sm bg-primary">Approved</span>
                                            @else
                                                <span class="badge badge-sm bg-danger">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.products.edit',$value->id) }}" class="btn btn-sm btn-info">Edit</a>

                                            <button type="button" onclick="deleteFormData({{ $value->id }})" class="btn btn-sm btn-danger">Delete</button>
                                            <form id="delete-form-{{ $value->id }}" action="{{ route('admin.products.destroy', $value->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
