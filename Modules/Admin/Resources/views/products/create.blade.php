@extends('admin::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
<link rel="stylesheet" href="{{ asset('manager/css/dropify.min.css') }}">
@endsection
@section('content')
@php
$category = $data['categories'];
@endphp
<div class="body d-flex py-3">
    <div class="container-fluid">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Products Add</h3>
                    <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
                </div>
            </div>
        </div> <!-- Row end  -->  
        
        <div class="row g-3 mb-3">
            <div class="col-xl-4 col-lg-4">
                <div class="sticky-lg-top">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Images</h6>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-12">
                                        <label class="form-label">Product Images Upload</label>
                                        <small class="d-block text-muted mb-2">Only portrait or square images, 2M max and 2000px max-height.</small>
                                        <div class="dropify-wrapper">
                                            <div class="dropify-message">
                                                <span class="file-icon"> 
                                                    <p>Drag and drop a file here or click</p>
                                                </span>
                                                <p class="dropify-error">Ooops, something wrong appended.</p>
                                            </div>
                                            <div class="dropify-loader"></div>
                                            <div class="dropify-errors-container">
                                                <ul></ul>
                                            </div>
                                            <input type="file" id="input-file-to-destroy" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000">
                                            <button type="button" class="dropify-clear">Remove</button>
                                            <div class="dropify-preview">
                                                <span class="dropify-render"></span>
                                                <div class="dropify-infos">
                                                    <div class="dropify-infos-inner">
                                                        <p class="dropify-filename">
                                                            <span class="file-icon"></span> 
                                                            <span class="dropify-filename-inner"></span>
                                                        </p>
                                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Visibility Status</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" checked="">
                                <label class="form-check-label">
                                    Published
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status">
                                <label class="form-check-label">
                                    Scheduled
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status">
                                <label class="form-check-label">
                                    Hidden
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
                        <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                            <h6 class="m-0 fw-bold">Categories</h6>
                        </div>
                        <div class="card-body">
                            <label class="form-label">Categories Select</label>
                            <select class="form-select">
                                @foreach ($category  as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Basic information</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3 align-items-center">
                                <div class="col-md-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Tags</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Pricing Info</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Product Price</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Product Sale</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        <h6 class="m-0 fw-bold">Contents</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-12">
                                <label class="form-label">Contents</label>
                                <textarea name="" id="content" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  --> 
        
    </div>
</div>
@endsection