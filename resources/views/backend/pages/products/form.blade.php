@extends('layouts.admin')
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Create Product</h4>
                </div>
                <div class="card-body">
                    <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($product)
                            @method('PUT')
                            <input type="hidden" name="update_id" value="{{ $product->id }}">
                        @endisset
                        <div class="row">
                            <div class="col-lg-8">
                                <x-form.textbox required="required" name="product_name" labelName="Product Name" error="product_name" value="{{ $product->name ?? old('product_name') }}"/>

                                <x-form.textbox required="required" name="slug" labelName="Slug" error="slug" value="{{ $product->slug ?? old('slug') }}"/>

                                <x-form.textarea name="description" labelName="Description" error="description" value="{{ $product->short_desc ?? old('description') }}"></x-form.textarea>

                                <x-form.textarea required="required" class="content" name="content" labelName="Content" error="content" value="{{ $product->long_desc ?? '' }}"></x-form.textarea>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-form.textbox required="required" name="sku" labelName="SKU" error="sku" value="{{ $product->sku ?? old('sku') }}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.textbox required="required" name="product_quantity" labelName="Quantity" error="product_quantity" value="{{ $product->qty ?? old('product_quantity') }}"/>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-6">
                                        <x-form.textbox type="number" required="required" name="regular_price" labelName="Regular Price" error="regular_price" value="{{ $product->regular_price ?? old('regular_price') }}"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <x-form.textbox type="number" required="required" name="discount_price" labelName="Discount Price" error="discount_price" value="{{ $product->discount_price ?? old('discount_price') }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <x-form.selectbox required="required" name="category" labelName="Category" error="category">
                                    <option value="">Select Category</option>
                                    @forelse ($categories as $value)
                                    <option value="{{ $value->id }}" @isset($product) {{ $value->id == $product->category_id ? 'selected' : '' }} @endisset>{{ $value->name }}</option>
                                    @empty

                                    @endforelse
                                </x-form.selectbox>

                                <x-form.textbox type="file" required="required" name="feature_image" labelName="Feature Image" error="feature_image"/>

                                <x-form.textbox type="file" required="required" name="gallery_image[]" labelName="Gallery Image" error="gallery_image" multiple/>

                                <x-form.selectbox required="required" name="approved" labelName="Approved" error="approved">
                                    <option value="0" @isset($product) {{ $product->approved == 0 ? 'selected' : '' }} @endisset>Pending</option>
                                    <option value="1" @isset($product) {{ $product->approved == 1 ? 'selected' : '' }} @endisset>Approved</option>
                                </x-form.selectbox>

                                <button type="submit" class="btn btn-sm btn-primary">
                                    @isset($product)
                                        Update
                                    @else
                                        Create
                                    @endisset
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('.content').summernote({
        placeholder: '',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
  </script>
@endpush
