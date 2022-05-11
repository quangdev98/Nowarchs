@extends('admin::layouts.master')
@section('style')
<link rel="stylesheet" href="{{ asset('manager/css/common.css') }}">
<link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
 <link rel="stylesheet" href="{{ asset('manager/css/ranger.css') }}"> 
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
                                <div class="filter-category">
                                    <ul class="category-list">
                                        @foreach ($category as $cate)
                                            <li><a href="#">{{ $cate->name }}</a>
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
                                {{-- <div class="price-range">
                                    <div class="price-amount flex-wrap">
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Minimum Price</label>
                                            <span>$</span>
                                            <span id="range1">
                                                0
                                            </span>
                                        </div>
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Maximum Price</label>
                                            <span>$</span>
                                            <span id="range2">
                                                0
                                              </span>
                                        </div>
                                    </div>
                                    <div class="container-ranger">
                                        <div class="slider-track"></div>
                                        <input type="range" min="5" max="1000" value="200" id="slider-1" oninput="slideOne()">
                                        <input type="range" min="5" max="1000" value="500" id="slider-2" oninput="slideTwo()">
                                      </div>
                                      
                                </div> --}}

                                <div class="price-range ds_progress_rangeslider Range_slider">
                                    <div class="price-amount flex-wrap">
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Minimum Price</label>
                                            <span>$</span>
                                            <span id="range1"></span>
                                        </div>
                                        <div class="amount-input mt-1">
                                            <label class="fw-bold">Maximum Price</label>
                                            <span>$</span>
                                            <span id="range2"></span>
                                        </div>
                                    </div>
                                    <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content slider-range-page-product">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" id="click-min"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" id="click-max"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="card mb-3 bg-transparent p-2" id="box-product">
                    @foreach ($index as $p)

                        <div class="card border-0 mb-1 item-product">
                            <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block form-status" style="z-index: 11">
                                <div class="text-right">
                                    <input class="form-check-input" type="checkbox" id="Published{{ $p->id }}" name="status" value="{{ $p->status }}" data-id="{{ $p->id }}" {{ $p->status ==1 ? "checked=''" : "" }}>
                                    <label class="form-check-label" for="Published{{ $p->id }}">{{ $p->status ==1 ? 'Published' :'Hidden' }}</label>
                                </div>
                                <div class="btn-group mt-3" role="group"
                                    aria-label="Basic outlined example">
                                    <a href="{{ route('admin.product.edit', ['id' =>$p->id]) }}" title=""
                                        class="btn btn-outline-secondary" id="editCategoryButton" >
                                        <i class="bx bx-edit-alt"></i></a>
                                    <button type="button"
                                        class="btn btn-outline-secondary deleterow" id="destroyButton"
                                        data-bs-toggle="modal" data-url="{{ route('admin.product.delete', ['id' =>$p->id]) }}"
                                        data-content="{{ $p->name }}"
                                        data-bs-target="#IdDestroyModal">
                                        <i class="ri ri-delete-bin-6-line"></i>
                                    </button>
                                </div>
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
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 box-status">
                                                <div class="text-muted small">Status</div>
                                                <strong>{{ $p->status == 1 ? 'Published' : 'Hidden'}}</strong>
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
                {{ $data['index']->links('admin::components.pagination') }}
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
@include('admin::components.ModalDelete')
@endsection
@section('scripts')
{{-- <script src="{{ asset('manager/js/magnific-popup.min.js') }}"></script> --}}
<script src="{{ asset('manager/js/isotope.min.js') }}"></script>
{{-- <script src="{{ asset('manager/js/nice-select.min.js') }}"></script> --}}
<script src="{{ asset('manager/js/ranger.js') }}"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','#destroyButton',function(){
            const url = $(this).data('url');
            const value = $(this).data('content');
            $("#destroyModal").attr("action", url);
            $("#contentModal").html(value);
        });
        // $(document).on('input', '#slider-1', function() {
            // $valueMin = 
            // console.log($(this).val());
            let min = $('#range1').text();
            let max = $("#slider-2").prop('max');
            console.log(min);
        // });

        $('.form-status input').click(function(){
            $value = $(this).val();
            $id = $(this).data('id');
            console.log($value);
            var token='{{csrf_token()}}';
            $.ajax({
                type: 'post',
                url: '{{ route('admin.ajax.status') }}',
                data: {
                    //_method: 'POST',
                    _token : token,
                    'table': 'products',
                    'id': $id,
                    'status': $value
                },
                dataType: 'JSON',

            });
            $(this).siblings('.form-check-label').text(function(i, oldText){
                return oldText === 'Published' ? 'Hidden' : 'Published';
            });
            $(this).parents('.item-product').find('.box-status strong').text(function(i, oldText){
                return oldText === 'Published' ? 'Hidden' : 'Published';
            });

        });
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    })
</script>
<script>
    $(function() {    // <== doc ready
        $( ".slider-range-page-product" ).slider({
            change: function(event, ui) {
                let price_min = ui.values[0];
                let price_max = ui.values[1];
                let this_ajax = true;
                var token='{{csrf_token()}}';
                $.ajax({
                    method: 'GET',
                    url: '{{ route('admin.ajax.filterPrice') }}',
                    data: {
                        //_method: 'POST',
                        _token : token,
                        this_ajax: this_ajax,
                        'table': 'products',
                        'price_min': price_min,
                        'price_max': price_max,
                    },
                    success:function(data){
                        let output = ``;
                        let value = '';
                        let href = window.location.href;
                        
                        data.forEach(function(value){
                            console.log(value);
                            // output += `<tr align='center'>
                            // <td>${value.id}</td>
                            // <td><img class="image-table" src="${value.image}" alt="${value.slug}"></td>
                            // <td><div class='textContentTitle'>${value.title}</div> </td>
                            // <td> ${value.categoryName} </td>
                            // <td> ${value.author} </td>
                            // <td> ${value.status == 1 ? 'Bản nháp' : (value.status == 2 ? 'Chờ duyệt' : 'Đã xuất bản')} </td>
                            // <td class="center"><a href="#" data-toggle="modal" data-url="${href}/destroy/${value.id}" data-target="#delete-modal" class="destroyForm"><i class="fad fa-trash-alt"></i></a></td>
                            // <td class="center"><a href="${href}/update/${value.id}"><i class="fad fa-pencil"></i></a></td>
                            // </tr>`;
                            output += `
                            <div class="card border-0 mb-1 item-product">
                                <div class="form-check form-switch position-absolute top-0 end-0 py-3 px-3 d-none d-md-block form-status" style="z-index: 11">
                                    <div class="text-right">
                                        <input class="form-check-input" type="checkbox" id="Published${ value.id }" name="status" value="${ value.status }" data-id="${ value.id }" ${ value.status ==1 ? "checked=''" : "" }>
                                        <label class="form-check-label" for="Published${ value.id }">${ value.status ==1 ? 'Published' :'Hidden' }</label>
                                    </div>
                                    <div class="btn-group mt-3" role="group"
                                        aria-label="Basic outlined example">
                                        <a href="${href}/update/${value.id}" title=""
                                            class="btn btn-outline-secondary" id="editCategoryButton" >
                                            <i class="bx bx-edit-alt"></i></a>
                                        <button type="button"
                                            class="btn btn-outline-secondary deleterow" id="destroyButton"
                                            data-bs-toggle="modal" data-url="${href}/destroy/${value.id}"
                                            data-content="${ value.name }"
                                            data-bs-target="#IdDestroyModal">
                                            <i class="ri ri-delete-bin-6-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body d-flex align-items-center flex-column flex-md-row">
                                    <a href="product-detail.html">
                                        <img class="w120 rounded img-fluid" src="${ value.images ? value.images : ''}" alt="">
                                    </a>
                                    <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                        <a href="product-detail.html"><h6 class="mb-3 fw-bold name-product">${ value.name }  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                    <div class="text-muted small">Special priceends</div>
                                                    <strong>${ value.created_at }</strong>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                    <div class="text-muted small">Price</div>
                                                    <strong>$${ value.price }</strong>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2 box-status">
                                                    <div class="text-muted small">Status</div>
                                                    <strong>${ value.status == 1 ? 'Published' : 'Hidden'}</strong>
                                                </div>
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                    <div class="text-muted small">Category</div>
                                                    <strong>${ value.category_name }</strong>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>`
                        }, this)
                        $('#box-product').html(output);
                    }
                });

                
            }
        });

    });
</script>
@endsection
