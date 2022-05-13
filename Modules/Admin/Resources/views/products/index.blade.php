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
<div class="body d-flex">
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
                                <a class="btn btn-primary" id="resetProduct" data-container="true" href="" onclick="event.preventDefault();">Reset</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="reset-block flex-column align-items-start">
                            <div class="filter-title">
                                <h4 class="title">Search</h4>
                            </div>
                            <div class="filter-btn w-100">
                                <div class="filter-search box-search">
                                    {{--  <form action="#">  --}}
                                        <input type="text" placeholder="Search Name or category name" id="searchName" class="form-control">
                                        <button type="button" class="btn btn-blue"><i class="ri ri-search-line"></i></button>
                                    {{--  </form>  --}}
                                </div>
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
                                            <li class="d-flex justify-content-between align-items-center">
                                                <a href="" onclick="event.preventDefault();" class="categor-name" data-content="{{ $cate->id }}">{{ $cate->name }}</a>
                                                <span class="number-count">{{ $cate->count_number }}</span>
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
                                <a href="{{ Route('admin.product.show', ['id' => $p->id]) }}">
                                    <img class="w120 rounded img-fluid" src="{{ $p->images ? $p->images : asset('manager/images/products/product-1.jpg') }}" alt="">
                                </a>
                                <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <a href="{{ Route('admin.product.show', ['id' => $p->id]) }}"><h6 class="mb-3 fw-bold name-product">{{ $p->name }}  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
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
<script src="{{ asset('manager/js/isotope.min.js') }}"></script>
<script src="{{ asset('manager/js/ranger.js') }}"></script>
{{-- FILTER PRICE SLIDER  --}}
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
                    headers: {
                        'Accept': 'application/json',
                    },
                    url: '{{ route('admin.ajax.filterProduct') }}',
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
                        function formarDate($date){
                            let d = new Date($date);
                            const year = d.getFullYear();
                            const monthIndex = d.getMonth();
                            const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                            const monthName = months[monthIndex]
                            const date = d.getDate();
                            return `${monthName} ${date}, ${year}`;
                        }

                        let jsonData = data.data;
                        jsonData.forEach(function(value){
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
                                    <a href="${href}/${value.id}/show">
                                        <img class="w120 rounded img-fluid" src="${ value.images ? value.images : ''}" alt="">
                                    </a>
                                    <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                        <a href="${href}/${value.id}/show"><h6 class="mb-3 fw-bold name-product">${ value.name }  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                            <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                                <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                    <div class="text-muted small">Special priceends</div>
                                                    <strong> ${formarDate(value.created_at)} </strong>
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

{{-- SEARCH PRODUCT BY CATEGORY NAME OR PRODUCT NAME  --}}
<script>
    {{--  search product  --}}
    $(document).ready(function () {
        //set keyup time
        function delay(callback, ms) {
            var timer = 0;
            return function() {
              var context = this, args = arguments;
              clearTimeout(timer);
              timer = setTimeout(function () {
                callback.apply(context, args);
              }, ms || 0);
            };
        }

        $('#searchName').keyup(delay(function(){
            $value = $(this).val();
            let this_ajax= true;
            var token='{{csrf_token()}}';
            $.ajax({
                type: 'GET',
                url: '{{ route('admin.ajax.filterProduct') }}',
                data: {
                    _token : token,
                    this_ajax: this_ajax,
                    'table': 'products',
                    'search': $value
                },
                success:function(data){
                    let output = ``;
                    let value = '';
                    let href = window.location.href;

                    function formarDate($date){
                        let d = new Date($date);
                        const year = d.getFullYear();
                        const monthIndex = d.getMonth();
                        const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                        const monthName = months[monthIndex]
                        const date = d.getDate();
                        return `${monthName} ${date}, ${year}`;
                    }


                    let jsonData = data.data;
                    jsonData.forEach(function(value){
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
                                <a href="${href}/${value.id}/show">
                                    <img class="w120 rounded img-fluid" src="${ value.images ? value.images : ''}" alt="">
                                </a>
                                <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <a href="${href}/${value.id}/show"><h6 class="mb-3 fw-bold name-product">${ value.name }  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Special priceends</div>
                                                <strong> ${formarDate(value.created_at)} </strong>
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
        }, 400))
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    });
</script>

{{-- STATUS PRODUCT  --}}
<script>
    $(document).ready(function(){
        $(document).on('click','#destroyButton',function(){
            const url = $(this).data('url');
            const value = $(this).data('content');
            $("#destroyModal").attr("action", url);
            $("#contentModal").html(value);
        });

        $(document).on("click", ".form-status input", function() {
            $value = $(this).val();
            $id = $(this).data('id');
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

{{-- FILTER CATEGORY  --}}
<script>
    $(document).ready(function(){
        $(document).on("click", ".categor-name, #resetProduct", function() {
            $idCategory = $(this).data('content');
            $reset = $(this).data('container');
            // console.log($reset);
            var token='{{csrf_token()}}';
            $.ajax({
                type: 'GET',
                url: '{{ route('admin.ajax.filterProduct') }}',
                data: {
                    _token : token,
                    'table': 'products',
                    'id_category': $idCategory,
                    'reset': $reset
                },
                success:function(data){
                    let output = ``;
                    let value = '';
                    let href = window.location.href;
                    function formarDate($date){
                        let d = new Date($date);
                        const year = d.getFullYear();
                        const monthIndex = d.getMonth();
                        const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                        const monthName = months[monthIndex]
                        const date = d.getDate();
                        return `${monthName} ${date}, ${year}`;
                    }

                    let jsonData = data.data;
                    jsonData.forEach(function(value){
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
                                <a href="${href}/${value.id}/show">
                                    <img class="w120 rounded img-fluid" src="${ value.images ? value.images : ''}" alt="">
                                </a>
                                <div class="ms-md-4 m-0 mt-4 mt-md-0 text-md-start text-center w-100">
                                    <a href="${href}/${value.id}/show"><h6 class="mb-3 fw-bold name-product">${ value.name }  <span class="text-muted small fw-light d-block">Reference 1204</span></h6></a>
                                        <div class="d-flex flex-row flex-wrap align-items-center justify-content-center justify-content-md-start">
                                            <div class="pe-xl-5 pe-md-4 ps-md-0 px-3 mb-2">
                                                <div class="text-muted small">Special priceends</div>
                                                <strong> ${formarDate(value.created_at)} </strong>
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
        });
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    })
</script>

@endsection
