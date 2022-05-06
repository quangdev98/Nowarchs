@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">
    <div class="profile-foreground position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg">
            <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img">
        </div>
    </div>
    <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
        <div class="row g-4">
            <div class="col-auto">
                <div class="avatar-lg">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle">
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="p-2">
                    <h3 class="text-white mb-1">{{ $data['detail']->email }}</h3>
                    <p class="text-white-75">Owner &amp; Founder</p>
                    <div class="hstack text-white-50 gap-1">
                        <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>California,
                            United States</div>
                        <div><i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Themesbrand
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-12 col-lg-auto order-last order-lg-0">
                <div class="row text text-white-50 text-center">
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">24.3K</h4>
                            <p class="fs-14 mb-0">Followers</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-4">
                        <div class="p-2">
                            <h4 class="text-white mb-1">1.3K</h4>
                            <p class="fs-14 mb-0">Following</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="d-flex">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-shrink-0">
                        <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content pt-4 text-muted">
                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-5">Complete Your Profile</h5>
                                        <div class="progress animated-progress custom-progress progress-label">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                <div class="label">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Info</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Full Name :</th>
                                                        <td class="text-muted">Anna Adame</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Mobile :</th>
                                                        <td class="text-muted">+(1) 987 6543</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">E-mail :</th>
                                                        <td class="text-muted">daveadame@velzon.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Location :</th>
                                                        <td class="text-muted">California, United States
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="ps-0" scope="row">Joining Date</th>
                                                        <td class="text-muted">24 Nov 2021</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Portfolio</h5>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                        <i class="ri-github-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                        <i class="ri-global-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-success">
                                                        <i class="ri-dribbble-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="avatar-xs d-block">
                                                    <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                        <i class="ri-pinterest-fill"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-4">Skills</h5>
                                        <div class="d-flex flex-wrap gap-2 fs-15">
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">Photoshop</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">illustrator</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">HTML</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">CSS</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">Javascript</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">Php</a>
                                            <a href="javascript:void(0);" class="badge badge-soft-primary">Python</a>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->


                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-0">Popular Posts</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-2-fill fs-14"></i>
                                                    </a>

                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1">
                                                        <li><a class="dropdown-item" href="#">View</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Edit</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/small/img-4.jpg" alt="" height="50" class="rounded">
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-14">Design your apps in
                                                        your own way</h6>
                                                </a>
                                                <p class="text-muted mb-0">15 Dec 2021</p>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/small/img-5.jpg" alt="" height="50" class="rounded">
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-14">Smartest
                                                        Applications for Business</h6>
                                                </a>
                                                <p class="text-muted mb-0">28 Nov 2021</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/small/img-6.jpg" alt="" height="50" class="rounded">
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <a href="javascript:void(0);">
                                                    <h6 class="text-truncate fs-14">How to get creative
                                                        in your work</h6>
                                                </a>
                                                <p class="text-muted mb-0">21 Nov 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">About</h5>
                                        <p>Hi Im Anna Adame, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi error itaque consequatur beatae ipsum quis cumque deleniti ratione, illum possimus sed repellendus eaque, corporis aut facere fugiat necessitatibus sint expedita.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quo necessitatibus commodi voluptatibus cupiditate veritatis eveniet, qui mollitia laborum! Obcaecati et architecto non inventore totam id modi eligendi quia officiis?</p>
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="d-flex mt-4">
                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                            <i class="ri-user-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="mb-1">Designation :</p>
                                                        <h6 class="text-truncate mb-0">Lead Designer /
                                                            Developer</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end card-body-->
                                </div><!-- end card -->

                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="tab-pane fade" id="activities" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Activities</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, impedit possimus consectetur beatae ipsum, quisquam labore quia quod quam quos architecto ab. Ex praesentium natus ipsa explicabo ut architecto culpa?</p>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                </div>
                <!--end tab-content-->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div>

@endsection
