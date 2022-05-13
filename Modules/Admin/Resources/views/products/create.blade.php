@extends('admin::layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/bootstrap-tagsinput.css') }}">
@endsection
@section('content')
    @php
    $category = $data['categories'];
    @endphp
    <div class="body d-flex">
        <div class="container-fluid">
            <form action="{{ Route('admin.product.store') }}" method="POST" name="" enctype="multipart/form-data"
                id="formAddProduct">
                @csrf
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Products Add</h3>
                            <button type="submit"
                                class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase button-submit-add-product">Save</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-xl-4 col-lg-3">
                        <div class="sticky-lg-top">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Images</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group drop-file relative">
                                            <div class="active after drop-image">
                                                <div class="b-drop">
                                                    Mời chọn file ảnh <span class="select_file">chọn file</span>
                                                </div>
                                            </div>
                                            <div class="fill"></div>
                                            <input class="form-control file-upload" id="file" type="file" name="images">
                                            <div class="preview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Visibility Status</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1" checked="">
                                        <label class="form-check-label">
                                            Published
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="2">
                                        <label class="form-check-label">
                                            Scheduled
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Publish Schedule</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Publish Date</label>
                                        <input type="date" class="form-control w-100">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Publish Time</label>
                                        <input type="time" class="form-control w-100">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            <div class="card mb-3">
                                <div
                                    class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Categories</h6>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Categories Select</label>
                                    <select class="form-select" name="category_id">
                                        @foreach ($category as $c)
                                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Tags</label>
                                            <input type="text" data-role="tagsinput" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Product Price</label>
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Product Sale</label>
                                            <input type="text" class="form-control" name="number_sale" placeholder="5%, 10%, %15%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Basic information</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-12">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div
                                class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0 fw-bold">Contents</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Contents</label>
                                        <textarea id="content" cols="30" rows="10" name="contents" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row end  -->
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('manager/js/bootstrap-tagsinput.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('Modules\Admin\Http\Requests\ProductCreateRequest', '#formAddProduct') !!}
@endsection
