@extends('admin::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
@endsection
@section('content')
@php
    $detail = $data['detail'];
@endphp
<div class="body d-flex">
    <div class="container-fluid">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Products Detail</h3>
                    <div class="btn-group group-link btn-set-task w-sm-100">
                        <a href="{{ Route('admin.product.edit', ['id'=>$detail->id]) }}" class="btn active d-inline-flex align-items-center">Edit Product</a>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="product-details-image mt-50">
                                        <div class="product-thumb-image">
                                            <div class="product-thumb-image-active nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="single-thumb" id="v-pills-one-tab" data-bs-toggle="pill" href="#v-pills-one" role="button" aria-controls="v-pills-one">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                <a class="single-image tab-pane fade" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade active show" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                                <a class="single-image tab-pane fade " id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                                                    <img src="{{ $detail->images }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-content mt-45">
                                        <h2 class="fw-bold fs-4">{{ $detail->name }}</h2>
                                        <div class="my-3">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <span class="text-muted ms-3">(449 customer review)</span>
                                        </div>
                                        {{--  <div class="product-items flex-wrap">
                                            <h6 class="item-title fw-bold">Select Your Oculus</h6>
                                            <div class="items-wrapper" id="select-item-1">
                                                <div class="single-item active">
                                                    <div class="items-image">
                                                        <img src="assets/images/product/product-items-1.jpg" alt="product">
                                                    </div>
                                                    <p class="text">Oculus Go</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="items-image">
                                                        <img src="assets/images/product/product-items-2.jpg" alt="product">
                                                    </div>
                                                    <p class="text">Oculus Quest</p>
                                                </div>
                                                <div class="single-item">
                                                    <div class="items-image">
                                                        <img src="assets/images/product/product-items-3.jpg" alt="product">
                                                    </div>
                                                    <p class="text">Oculus Rift S</p>
                                                </div>
                                            </div>
                                        </div>  --}}
                                        {{--  <div class="product-select-wrapper flex-wrap">
                                            <div class="select-item">
                                                <h6 class="select-title fw-bold">Select Color</h6>
                                                <ul class="color-select" id="select-color-1">
                                                    <li style="background-color: #EFEFEF;" class="active"></li>
                                                    <li style="background-color: #FAE5EC;"></li>
                                                    <li style="background-color: #4C4C4C;"></li>
                                                </ul>
                                            </div>
                                        </div>  --}}
                                        <div class="product-price">
                                            <h6 class="price-title fw-bold">Price @if (!empty($detail->number_sale))(sale: {{ ($detail->number_sale) }}%) @endif</h6>
                                            <p class="sale-price">$ {{
                                            !empty($detail->number_sale) ? (($detail->price) - (($detail->price)*(($detail->number_sale)/100))) : $detail->price }} USD</p>
                                            @if (!empty($detail->number_sale))
                                                <p class="regular-price text-danger">$ {{ $detail->price }} USD</p>
                                            @endif
                                        </div>
                                        <div class="content-show-lest">{!! $detail->contents !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row g-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-body-header rounded  d-inline-flex" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#review" role="tab">Reviews</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#descriptions" role="tab">Descriptions</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="review">
                            <div class="card-body">
                                <div class="row clearfix g-3">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="feedback-info sticky-top">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h2 class=" display-6 fw-bold mb-0">4.5</h2>
                                                    <small class="text-muted">based on 1,032 ratings</small>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mb-2 me-3">
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                        </span>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">5<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                            <span class="small text-muted">661</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar light-success-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">4<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                            <span class="small text-muted">237</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-info-light" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">3<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                            <span class="small text-muted">76</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">2<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                            <span class="small text-muted">19</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar light-danger-bg " role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-count mt-2">
                                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                                            <h6 class="mb-0 fw-bold d-flex align-items-center">1<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                            <span class="small text-muted">39</span>
                                                        </div>
                                                        <div class="progress" style="height: 10px;">
                                                            <div class="progress-bar bg-careys-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="customer-like mt-5">
                                                        <h6 class="mb-0 fw-bold ">What Customers Like</h6>
                                                        <ul class="list-group mt-3">
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">1</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Fun Factor</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">72 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">2</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Great Value</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">52 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-light-success">3</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>eBazar</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">35 votes</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="customer-like mt-5">
                                                        <h6 class="mb-0 fw-bold ">What Need Improvement</h6>
                                                        <ul class="list-group mt-3">
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">1</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Value for Money</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">12 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">2</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Customer service</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">8 votes</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item d-flex">
                                                                <div class="number border-end pe-2 fw-bold">
                                                                    <strong class="color-careys-pink">3</strong>
                                                                </div>
                                                                <div class="cs-text flex-fill ps-2">
                                                                    <span>Product Item</span>
                                                                </div>
                                                                <div class="vote-text">
                                                                    <span class="text-muted">2 votes</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <ul class="list-unstyled mb-4">
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar9.svg" alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Joan Dyer</span></h6>
                                                            <span class="text-muted">3 hours ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Top-Oculus VR</h6>
                                                        <p> A good fit for many households, this Oculus VR has a movable deli drawer and door shelves that can accommodate gallon containers.Though its low price means fewer features, this pick is quiet and an energy-saving option, resulting in a lower energy bill.</p>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar2.svg" alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Phil Glover</span></h6>
                                                            <span class="text-muted">1 Day ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Oculus VR Full 3D</h6>
                                                        <p>I purchased this Oculus from elsewhere, on last Dipawali. As this Oculus contains in-built DDB( means you need not to install a separate set-top box), there is less number of wire hanging around the set and single remote required. Great full HD picture quality. Sound quality of the set is far better than most of the sets of the so called big brands.</p>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                            <li class="card mb-2">
                                                <div class="card-body p-lg-4 p-3">
                                                    <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                        <img class="avatar rounded" src="assets/images/xs/avatar3.svg" alt="">
                                                        <div class="flex-fill ms-3 text-truncate">
                                                            <h6 class="mb-0"><span>Victor Rampling</span></h6>
                                                            <span class="text-muted">5 Day ago</span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="mb-2 me-3">
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                                <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item-post">
                                                        <h6 class="">Oculus VR  Wireless Bluetooth</h6>
                                                        <p>The build quality feels really premium.Sound quality is quite great compared to its price point.Sound quality is quite great compared to its price point.</p>
                                                        <div>
                                                            <div class="d-flex mt-3 pt-3 border-top">
                                                                <img class="avatar rounded" src="assets/images/xs/avatar12.svg" alt="">
                                                                <div class="flex-fill ms-3 text-truncate">
                                                                    <p class="mb-0"><span>Karen Clark</span> <small class="msg-time text-muted">5 Day ago</small></p>
                                                                    <span class="text-muted">Hd quality is quite great compared to its price point.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <textarea class="form-control" placeholder="Replay"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> <!-- .Card End -->
                                        </ul>
                                        <nav aria-label="...">
                                            <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">2</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div><!-- Row End -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="descriptions">
                            <div class="card-body">
                                {!! $detail->contents !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row end  -->

    </div>
</div>
@endsection
