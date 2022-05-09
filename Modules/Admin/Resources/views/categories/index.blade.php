@extends('admin::layouts.master')
@section('style')
    <link rel="stylesheet" href="{{ asset('manager/css/style_product.css') }}">
    <link rel="stylesheet" href="{{ asset('manager/css/dropify.min.css') }}">
@endsection
@section('content')
    @php
    $category = $data['category'];
    @endphp
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Categorie List</h3>
                        <a href="{{ Route('admin.categories.create') }}"
                            class="btn btn-primary py-2 px-5 btn-set-task w-sm-100"><i
                                class="ri ri-folder-add-fill"></i> Add Categories</a>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="myDataTable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="myDataTable_length">
                                            <label>Show <select name="myDataTable_length" aria-controls="myDataTable"
                                                    class="form-select form-select-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="myDataTable_filter" class="dataTables_filter" style="text-align: right">
                                            <label style="text-align: left">Search:<input type="search"
                                                    class="form-control form-control-sm" placeholder=""
                                                    aria-controls="myDataTable"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="myDataTable"
                                            class="table table-hover align-middle mb-0 nowrap dataTable no-footer dtr-inline"
                                            style="width: 100%;" role="grid" aria-describedby="myDataTable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="myDataTable"
                                                        rowspan="1" colspan="1" style="width: 140.2px;"
                                                        aria-sort="ascending"
                                                        aria-label="Id: activate to sort column descending">Id</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myDataTable"
                                                        rowspan="1" colspan="1" style="width: 349.2px;"
                                                        aria-label="Categorie: activate to sort column ascending">Categorie
                                                    </th>
                                                    <th class="dt-body-right sorting" tabindex="0"
                                                        aria-controls="myDataTable" rowspan="1" colspan="1"
                                                        style="width: 350.2px;"
                                                        aria-label="Date: activate to sort column ascending">Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="myDataTable"
                                                        rowspan="1" colspan="1" style="width: 206.2px;"
                                                        aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th class="dt-body-right sorting" tabindex="0"
                                                        aria-controls="myDataTable" rowspan="1" colspan="1"
                                                        style="width: 244.2px;"
                                                        aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $c)
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1">
                                                            <strong>#00{{ $c->id < 10 ? '0' . $c->id : $c->id }}</strong>
                                                        </td>
                                                        <td>{{ $c->name }}</td>
                                                        <td class=" dt-body-right">{{ $c->created_at }}</td>
                                                        <td><span class="badge bg-success">Published</span></td>
                                                        <td class=" dt-body-right">
                                                            <div class="btn-group" role="group"
                                                                aria-label="Basic outlined example">
                                                                <a href="#"
                                                                    class="btn btn-outline-secondary" id="editCategoryButton" data-bs-toggle="modal" data-url="{{ route('admin.categories.update', ['id' => $c->id]) }}" data-content="{{ $c->name }}" data-bs-target="#editCategoryModal">
                                                                    <i class="bx bx-edit-alt"></i></a>
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary deleterow" id="destroyCategoryButton"
                                                                    data-bs-toggle="modal" data-url="{{ route('admin.categories.delete', ['id' => $c->id]) }}"
                                                                    data-content="{{ $c->name }}"
                                                                    data-bs-target="#destroyCategoryModal">
                                                                    <i class="ri ri-delete-bin-6-line"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{--  <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="myDataTable_info" role="status" aria-live="polite">
                                            Showing 1 to 10 of 13 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="myDataTable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="myDataTable_previous"><a href="#" aria-controls="myDataTable"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="myDataTable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="myDataTable" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="myDataTable_next"><a href="#"
                                                        aria-controls="myDataTable" data-dt-idx="3" tabindex="0"
                                                        class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-danger fade" id="destroyCategoryModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" id="destroyCategory" name="delete-category">
                    @csrf
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                        <p class="text-center font-bold mb-4">Bạn có muốn xoá danh mục này không？</p>
                        <p class="text-center" id="contentModal"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn big bg-gray" data-dismiss="modal">Trở lại</button>
                        <button type="submit" class="btn big bg-blue" name="action" value="delete">Xoá bỏ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="post" action="" method="POST" id="editCategory">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sửa danh mục</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="" style="width: 100%">
                                    <label><b>Tên danh mục</b></label>
                                    <input class="form-control" name="name" value="" placeholder="Vui lòng nhập tên danh mục" style="width: 100%" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn big bg-gray" data-dismiss="modal">Trở lại</button>
                        <button type="submit" name="submit" class="btn big bg-blue" value="add">Update</button>
                    </div>
                <form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('Modules\Admin\Http\Requests\CategoryEditRequest', '#editCategory'); !!}
    <script type="text/javascript">
        $(document).on('click','#editCategoryButton',function(){
            const url = $(this).data('url');
            const value = $(this).data('content');
            $("#editCategory").attr("action", url);
            $("#editCategory input[name='name']").attr("value", value);
        });
        $(document).on('click','#destroyCategoryButton',function(){
            const url = $(this).data('url');
            const value = $(this).data('content');
            $("#destroyCategory").attr("action", url);
            $("#contentModal").html(value);
        });
    </script>
@endsection

