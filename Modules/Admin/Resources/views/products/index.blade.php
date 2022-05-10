@extends('admin::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
@endsection
@section('content')
@php
 $index = $data['index'];
 $category = $data['categories'];
@endphp
<div class="body d-flex py-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Products</h3>
                    <div class="btn-group group-link btn-set-task w-sm-100">
                        <a href="{{ Route('admin.product.create') }}" class="btn active d-inline-flex align-items-center">Add Product</a>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row g-3 mb-3">
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="sticky-lg-top">
                    <div class="card mb-3">
                        <div class="reset-block">
                            <div class="filter-title">
                                <h4 class="title">Filter</h4>
                            </div>
                            <div class="filter-btn">
                                <a class="btn btn-primary" href="#">Reset</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="categories">
                            <div class="filter-title">
                                <a class="title" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="true">Categories</a>
                            </div>
                            <div class="collapse show" id="category" style="">
                                <div class="filter-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search" class="form-control">
                                        <button><i class="lni lni-search-alt"></i></button>
                                    </form>
                                </div>
                                <div class="filter-category">
                                    <ul class="category-list">
                                        @foreach ($category as $cate)
                                            <li><a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" class="collapsed">{{ $cate->name }}</a>
                                                {{--  <ul id="collapseOne" class="sub-category collapse" data-parent="#category" style="">
                                                    <li><a href="#">PlayStation 4</a></li>
                                                    <li><a href="#">Oculus VR</a></li>
                                                    <li><a href="#">Remote</a></li>
                                                    <li><a href="#">Lighting Keyborad</a></li>
                                                </ul>  --}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="price-range-block">
                            <div class="filter-title">
                                <a class="title" data-bs-toggle="collapse" href="#pricingTwo" role="button" aria-expanded="false">Pricing Range</a>
                            </div>
                            <div class="collapse show" id="pricingTwo">
                                <div class="price-range">
                                    <div class="price-amount flex-wrap">
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Minimum Price</label>
                                            <input type="text" id="minAmount2" class="form-control">
                                        </div>
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Maximum Price</label>
                                            <input type="text" id="maxAmount2" class="form-control">
                                        </div>
                                    </div>
                                    <div id="slider-range2" class="slider-range noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(7.45%, 0px) scale(0.125, 1);"></div></div><div class="noUi-origin" style="transform: translate(-925.5%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="399.0" aria-valuenow="149.0" aria-valuetext="149.00"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-800.5%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="149.0" aria-valuemax="2000.0" aria-valuenow="399.0" aria-valuetext="399.00"><div class="noUi-touch-area"></div></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="card mb-3 bg-transparent p-2">
                    @foreach ($index as $p)

                        <div class="card border-0 mb-1">
                            <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block" style="z-index: 11">
                                <input class="form-check-input" type="checkbox" id="Eaten-switch1" checked="">
                                <label class="form-check-label" for="Eaten-switch1">Add to Cart</label>
                            </div>
                            <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                <a href="product-detail.html">
                                    <img class="w120 rounded img-fluid" src="{{ $p->images ? $p->images : asset('manager/images/products/product-1.jpg') }}" alt="">
                                </a>
                                <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <a href="product-detail.html"><h6 class="mb-3 fw-bold name-product">{{ $p->name }}  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Special priceends</div>
                                                <strong>{{ Helpers::FormatDate($p->created_at) }}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Price</div>
                                                <strong>${{ $p->price }}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Status</div>
                                                <strong>{{ $p->status == 1 ? 'Published' : ($p->status == 2 ? 'Scheduled' : 'Hidden')}}</strong>
                                            </div>
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Category</div>
                                                <strong>{{ $p->category_name }}</strong>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-12">
                        <nav class="justify-content-end d-flex">
                            <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
@endsection
