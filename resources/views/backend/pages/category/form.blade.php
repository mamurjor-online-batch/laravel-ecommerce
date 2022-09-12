@extends('layouts.admin')
@push('styles')

@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-8 mx-auto col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Categories</h4>
                </div>
                <div class="card-body">
                    <form action="{{ isset($category) ? route('admin.categories.update',$category->id) : route('admin.categories.store') }}" method="POST">
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <x-form.textbox name="category_name" value="{{ $category->name ?? old('category_name') }}" error="category_name" labelName="Category Name" placeholder="Category Name"/>

                        <x-form.textbox name="meta_title" error="meta_title" value="{{ $category->meta_title ?? old('meta_title') }}" labelName="Meta Title" />
                        <x-form.textarea name="meta_description" value="{{ $category->meta_description ?? old('meta_desciption') }}" error="meta_description" labelName="Meta Description"></x-form.textarea>

                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" @isset($category) {{ $category->status == 1 ? 'checked' : '' }} @endisset name="status" type="checkbox" id="status">
                                <label class="form-check-label" for="status">Active Status</label>
                            </div>
                            @error('status')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">
                            @isset($category)
                                Update
                            @else
                                Create
                            @endisset
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush
