@extends('admin::layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/dropify.min.css') }}">
@endsection
@section('content')
    <div class="body d-flex">
        <div class="container-fluid">
            <form name="post" action="{{ route('admin.categories.store') }}" method="POST" id="createCategories">
                @csrf
                <div class="row align-items-center">
                    <div class="border-0 mb-4">
                        <div
                            class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0">Categorie Add</h3>
                            <button type="submit"
                                class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3 mb-3">
                    <div class="col-12 col-md-5">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Category</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 align-items-center">
                                    <div class="col-12 form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('Modules\Admin\Http\Requests\CategoryRequest', '#createCategories') !!}
@endsection
