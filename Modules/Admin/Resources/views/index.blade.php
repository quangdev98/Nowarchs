@extends('admin::layouts.master')
@section('content')
<div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án</font></font></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang tổng quan</font></font></a></li>
                                        <li class="breadcrumb-item active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án</font></font></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row project-wrapper">
                        <div class="col-xl-8">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase text-primary"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        Dự án đang hoạt động</font></font></p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">825</font></font></span></h4>
                                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5,02%</font></font></span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án tháng này</font></font></p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-warning"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p class="text-uppercase fw-medium text-muted mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng tiềm năng mới</font></font></p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7,522</font></font></span></h4>
                                                        <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3,58%</font></font></span>
                                                    </div>
                                                    <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Khách hàng tiềm năng trong tháng này</font></font></p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-4">
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-info"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden ms-3">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        Tổng số giờ</font></font></p>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">168</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> giờ </font></font><span class="counter-value" data-target="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> m</font></font></h4>
                                                        <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10,35%</font></font></span>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Làm việc trong tháng này</font></font></p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng quan về dự án</font></font></h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    TẤT CẢ CÁC
                                                </font></font></button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    1 triệu
                                                </font></font></button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    6 triệu
                                                </font></font></button>
                                                <button type="button" class="btn btn-soft-primary btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    1Y
                                                </font></font></button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-header p-0 border-0 bg-soft-light">
                                            <div class="row g-0 text-center">
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="9851"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9,851</font></font></span></h5>
                                                        <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng dự án</font></font></p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><span class="counter-value" data-target="1026"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1,026</font></font></span></h5>
                                                        <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án đang hoạt động</font></font></p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ </font></font><span class="counter-value" data-target="228.89"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">228,89</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> k</font></font></h5>
                                                        <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doanh thu</font></font></p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="10589"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10.589</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> giờ</font></font></h5>
                                                        <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giờ làm việc</font></font></p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </div><!-- end card header -->
                                        <div class="card-body p-0 pb-2">
                                            <div>
                                                <div id="projects-overview-chart" data-colors="[&quot;--vz-primary&quot;, &quot;--vz-warning&quot;, &quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 389px;"><div id="apexcharts8r48j7l5" class="apexcharts-canvas apexcharts8r48j7l5 apexcharts-theme-light" style="width: 1062px; height: 374px;"><svg id="SvgjsSvg1001" width="1062" height="374" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="1062" height="374"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px 20px; position: absolute; max-height: 187px;"><div class="apexcharts-legend-series" rel="1" seriesname="NumberxofxProjects" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(102, 145, 231) !important; color: rgb(102, 145, 231); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Number%20of%20Projects" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Number of Projects</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(232, 188, 82) !important; color: rgb(232, 188, 82); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="ActivexProjects" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(19, 197, 107) !important; color: rgb(19, 197, 107); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Active%20Projects" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Active Projects</span></div></div><style type="text/css">	
    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style></foreignObject><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(83.08692522915928, 30)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMask8r48j7l5"><rect id="SvgjsRect1009" width="996.438705444336" height="277.348" x="-21.019618710604583" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8r48j7l5"></clipPath><clipPath id="nonForecastMask8r48j7l5"></clipPath><clipPath id="gridRectMarkerMask8r48j7l5"><rect id="SvgjsRect1010" width="974.3994680231268" height="296.348" x="-10" y="-10" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1008" x1="520.0815280126146" y1="0" x2="520.0815280126146" y2="276.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="520.0815280126146" y="0" width="1" height="276.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1095" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1096" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1098" font-family="Helvetica, Arial, sans-serif" x="0" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1099">Jan</tspan><title>Jan</title></text><text id="SvgjsText1101" font-family="Helvetica, Arial, sans-serif" x="86.76358800210244" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1102">Feb</tspan><title>Feb</title></text><text id="SvgjsText1104" font-family="Helvetica, Arial, sans-serif" x="173.52717600420488" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1105">Mar</tspan><title>Mar</title></text><text id="SvgjsText1107" font-family="Helvetica, Arial, sans-serif" x="260.2907640063073" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1108">Apr</tspan><title>Apr</title></text><text id="SvgjsText1110" font-family="Helvetica, Arial, sans-serif" x="347.05435200840975" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1111">May</tspan><title>May</title></text><text id="SvgjsText1113" font-family="Helvetica, Arial, sans-serif" x="433.8179400105122" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1114">Jun</tspan><title>Jun</title></text><text id="SvgjsText1116" font-family="Helvetica, Arial, sans-serif" x="520.5815280126146" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1117">Jul</tspan><title>Jul</title></text><text id="SvgjsText1119" font-family="Helvetica, Arial, sans-serif" x="607.3451160147172" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1120">Aug</tspan><title>Aug</title></text><text id="SvgjsText1122" font-family="Helvetica, Arial, sans-serif" x="694.1087040168195" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1123">Sep</tspan><title>Sep</title></text><text id="SvgjsText1125" font-family="Helvetica, Arial, sans-serif" x="780.872292018922" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1126">Oct</tspan><title>Oct</title></text><text id="SvgjsText1128" font-family="Helvetica, Arial, sans-serif" x="867.6358800210244" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1129">Nov</tspan><title>Nov</title></text><text id="SvgjsText1131" font-family="Helvetica, Arial, sans-serif" x="954.3994680231269" y="305.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1132">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1145" class="apexcharts-grid"><g id="SvgjsG1146" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1147" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1148" x1="0" y1="0" x2="0" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1149" x1="86.76358800210244" y1="0" x2="86.76358800210244" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1150" x1="173.52717600420488" y1="0" x2="173.52717600420488" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1151" x1="260.2907640063073" y1="0" x2="260.2907640063073" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1152" x1="347.05435200840975" y1="0" x2="347.05435200840975" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1153" x1="433.8179400105122" y1="0" x2="433.8179400105122" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1154" x1="520.5815280126146" y1="0" x2="520.5815280126146" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1155" x1="607.3451160147171" y1="0" x2="607.3451160147171" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1156" x1="694.1087040168195" y1="0" x2="694.1087040168195" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1157" x1="780.8722920189219" y1="0" x2="780.8722920189219" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1158" x1="867.6358800210244" y1="0" x2="867.6358800210244" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1159" x1="954.3994680231268" y1="0" x2="954.3994680231268" y2="276.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1161" x1="0" y1="276.348" x2="954.3994680231268" y2="276.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1160" x1="0" y1="1" x2="0" y2="276.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1011" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1012" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="1"><path id="SvgjsPath1038" d="M0 276.348L0 70.814175C30.36725580073585 70.814175 56.39633220136659 49.32811800000002 86.76358800210244 49.32811800000002C117.13084380283829 49.32811800000002 143.15992020346903 118.04665400000002 173.52717600420488 118.04665400000002C203.89443180494072 118.04665400000002 229.92350820557147 25.631276999999983 260.2907640063073 25.631276999999983C290.65801980704316 25.631276999999983 316.6870962076739 97.78113399999998 347.05435200840975 97.78113399999998C377.4216078091456 97.78113399999998 403.45068420977634 82.83531300000001 433.8179400105122 82.83531300000001C464.18519581124804 82.83531300000001 490.2142722118788 158.34740399999998 520.5815280126146 158.34740399999998C550.9487838133505 158.34740399999998 576.9778602139812 210.554147 607.3451160147171 210.554147C637.7123718154529 210.554147 663.7414482160837 63.16854700000002 694.1087040168195 63.16854700000002C724.4759598175553 63.16854700000002 750.5050362181861 178.79715600000003 780.8722920189219 178.79715600000003C811.2395478196578 178.79715600000003 837.2686242202885 72.51832099999999 867.6358800210244 72.51832099999999C898.0031358217602 72.51832099999999 924.032212222391 192.130947 954.3994680231268 192.130947C954.3994680231268 192.130947 954.3994680231268 192.130947 954.3994680231268 276.348M954.3994680231268 192.130947C954.3994680231268 192.130947 954.3994680231268 192.130947 954.3994680231268 192.130947 " fill="rgba(232,188,82,0.1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="3" class="apexcharts-area" index="1" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 0 276.348L 0 70.814175C 30.36725580073585 70.814175 56.39633220136659 49.32811800000002 86.76358800210244 49.32811800000002C 117.13084380283829 49.32811800000002 143.15992020346903 118.04665400000002 173.52717600420488 118.04665400000002C 203.89443180494072 118.04665400000002 229.92350820557147 25.631276999999983 260.2907640063073 25.631276999999983C 290.65801980704316 25.631276999999983 316.6870962076739 97.78113399999998 347.05435200840975 97.78113399999998C 377.4216078091456 97.78113399999998 403.45068420977634 82.83531300000001 433.8179400105122 82.83531300000001C 464.18519581124804 82.83531300000001 490.2142722118788 158.34740399999998 520.5815280126146 158.34740399999998C 550.9487838133505 158.34740399999998 576.9778602139812 210.554147 607.3451160147171 210.554147C 637.7123718154529 210.554147 663.7414482160837 63.16854700000002 694.1087040168195 63.16854700000002C 724.4759598175553 63.16854700000002 750.5050362181861 178.79715600000003 780.8722920189219 178.79715600000003C 811.2395478196578 178.79715600000003 837.2686242202885 72.51832099999999 867.6358800210244 72.51832099999999C 898.0031358217602 72.51832099999999 924.032212222391 192.130947 954.3994680231268 192.130947C 954.3994680231268 192.130947 954.3994680231268 192.130947 954.3994680231268 276.348M 954.3994680231268 192.130947z" pathFrom="M -1 276.348L -1 276.348L 86.76358800210244 276.348L 173.52717600420488 276.348L 260.2907640063073 276.348L 347.05435200840975 276.348L 433.8179400105122 276.348L 520.5815280126146 276.348L 607.3451160147171 276.348L 694.1087040168195 276.348L 780.8722920189219 276.348L 867.6358800210244 276.348L 954.3994680231268 276.348"></path><path id="SvgjsPath1039" d="M0 70.814175C30.36725580073585 70.814175 56.39633220136659 49.32811800000002 86.76358800210244 49.32811800000002C117.13084380283829 49.32811800000002 143.15992020346903 118.04665400000002 173.52717600420488 118.04665400000002C203.89443180494072 118.04665400000002 229.92350820557147 25.631276999999983 260.2907640063073 25.631276999999983C290.65801980704316 25.631276999999983 316.6870962076739 97.78113399999998 347.05435200840975 97.78113399999998C377.4216078091456 97.78113399999998 403.45068420977634 82.83531300000001 433.8179400105122 82.83531300000001C464.18519581124804 82.83531300000001 490.2142722118788 158.34740399999998 520.5815280126146 158.34740399999998C550.9487838133505 158.34740399999998 576.9778602139812 210.554147 607.3451160147171 210.554147C637.7123718154529 210.554147 663.7414482160837 63.16854700000002 694.1087040168195 63.16854700000002C724.4759598175553 63.16854700000002 750.5050362181861 178.79715600000003 780.8722920189219 178.79715600000003C811.2395478196578 178.79715600000003 837.2686242202885 72.51832099999999 867.6358800210244 72.51832099999999C898.0031358217602 72.51832099999999 924.032212222391 192.130947 954.3994680231268 192.130947C954.3994680231268 192.130947 954.3994680231268 192.130947 954.3994680231268 192.130947 " fill="none" fill-opacity="1" stroke="#e8bc52" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="3" class="apexcharts-area" index="1" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 0 70.814175C 30.36725580073585 70.814175 56.39633220136659 49.32811800000002 86.76358800210244 49.32811800000002C 117.13084380283829 49.32811800000002 143.15992020346903 118.04665400000002 173.52717600420488 118.04665400000002C 203.89443180494072 118.04665400000002 229.92350820557147 25.631276999999983 260.2907640063073 25.631276999999983C 290.65801980704316 25.631276999999983 316.6870962076739 97.78113399999998 347.05435200840975 97.78113399999998C 377.4216078091456 97.78113399999998 403.45068420977634 82.83531300000001 433.8179400105122 82.83531300000001C 464.18519581124804 82.83531300000001 490.2142722118788 158.34740399999998 520.5815280126146 158.34740399999998C 550.9487838133505 158.34740399999998 576.9778602139812 210.554147 607.3451160147171 210.554147C 637.7123718154529 210.554147 663.7414482160837 63.16854700000002 694.1087040168195 63.16854700000002C 724.4759598175553 63.16854700000002 750.5050362181861 178.79715600000003 780.8722920189219 178.79715600000003C 811.2395478196578 178.79715600000003 837.2686242202885 72.51832099999999 867.6358800210244 72.51832099999999C 898.0031358217602 72.51832099999999 924.032212222391 192.130947 954.3994680231268 192.130947" pathFrom="M -1 276.348L -1 276.348L 86.76358800210244 276.348L 173.52717600420488 276.348L 260.2907640063073 276.348L 347.05435200840975 276.348L 433.8179400105122 276.348L 520.5815280126146 276.348L 607.3451160147171 276.348L 694.1087040168195 276.348L 780.8722920189219 276.348L 867.6358800210244 276.348L 954.3994680231268 276.348"></path><g id="SvgjsG1013" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG1015" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1016" r="4" cx="0" cy="70.814175" class="apexcharts-marker w7jmj1oao" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1017" r="4" cx="86.76358800210244" cy="49.32811800000002" class="apexcharts-marker wt9lffv5rk" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1018" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1019" r="4" cx="173.52717600420488" cy="118.04665400000002" class="apexcharts-marker wrw9kxzzq" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1020" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1021" r="4" cx="260.2907640063073" cy="25.631276999999983" class="apexcharts-marker w59u0a70ek" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1022" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1023" r="4" cx="347.05435200840975" cy="97.78113399999998" class="apexcharts-marker wt0dp0tcj" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1024" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1025" r="4" cx="433.8179400105122" cy="82.83531300000001" class="apexcharts-marker woy32fd63" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1026" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1027" r="4" cx="520.5815280126146" cy="158.34740399999998" class="apexcharts-marker wa2009jdi" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1028" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1029" r="4" cx="607.3451160147171" cy="210.554147" class="apexcharts-marker wh4epjk42" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1030" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1031" r="4" cx="694.1087040168195" cy="63.16854700000002" class="apexcharts-marker wpm11zk33" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1032" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1033" r="4" cx="780.8722920189219" cy="178.79715600000003" class="apexcharts-marker wwmq6066q" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1034" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1035" r="4" cx="867.6358800210244" cy="72.51832099999999" class="apexcharts-marker wgpuh0jdm" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1036" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8r48j7l5)"><circle id="SvgjsCircle1037" r="4" cx="954.3994680231268" cy="192.130947" class="apexcharts-marker w107zm7ewj" stroke="#ffffff" fill="#e8bc52" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="1" default-marker-size="4"></circle></g></g></g></g><g id="SvgjsG1040" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1041" class="apexcharts-series" rel="1" seriesName="NumberxofxProjects" data:realIndex="0"><path id="SvgjsPath1045" d="M-13.014538200315364 276.348L-13.014538200315364 198.0494C-13.014538200315364 198.0494 -13.014538200315364 198.0494 -13.014538200315364 198.0494L0 198.0494C0 198.0494 0 198.0494 0 198.0494L0 198.0494L0 276.348L0 276.348C0 276.348 -13.014538200315364 276.348 -13.014538200315364 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M -13.014538200315364 276.348L -13.014538200315364 198.0494Q -13.014538200315364 198.0494 -13.014538200315364 198.0494L 0 198.0494Q 0 198.0494 0 198.0494L 0 198.0494L 0 276.348L 0 276.348z" pathFrom="M -13.014538200315364 276.348L -13.014538200315364 276.348L 0 276.348L 0 276.348L 0 276.348L 0 276.348L 0 276.348L -13.014538200315364 276.348" cy="198.0494" cx="0" j="0" val="34" barHeight="78.29860000000001" barWidth="13.014538200315364"></path><path id="SvgjsPath1047" d="M73.74904980178707 276.348L73.74904980178707 126.65950000000001C73.74904980178707 126.65950000000001 73.74904980178707 126.65950000000001 73.74904980178707 126.65950000000001L86.76358800210244 126.65950000000001C86.76358800210244 126.65950000000001 86.76358800210244 126.65950000000001 86.76358800210244 126.65950000000001L86.76358800210244 126.65950000000001L86.76358800210244 276.348L86.76358800210244 276.348C86.76358800210244 276.348 73.74904980178707 276.348 73.74904980178707 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 73.74904980178707 276.348L 73.74904980178707 126.65950000000001Q 73.74904980178707 126.65950000000001 73.74904980178707 126.65950000000001L 86.76358800210244 126.65950000000001Q 86.76358800210244 126.65950000000001 86.76358800210244 126.65950000000001L 86.76358800210244 126.65950000000001L 86.76358800210244 276.348L 86.76358800210244 276.348z" pathFrom="M 73.74904980178707 276.348L 73.74904980178707 276.348L 86.76358800210244 276.348L 86.76358800210244 276.348L 86.76358800210244 276.348L 86.76358800210244 276.348L 86.76358800210244 276.348L 73.74904980178707 276.348" cy="126.65950000000001" cx="86.76358800210244" j="1" val="65" barHeight="149.6885" barWidth="13.014538200315364"></path><path id="SvgjsPath1049" d="M160.5126378038895 276.348L160.5126378038895 170.4146C160.5126378038895 170.4146 160.5126378038895 170.4146 160.5126378038895 170.4146L173.52717600420488 170.4146C173.52717600420488 170.4146 173.52717600420488 170.4146 173.52717600420488 170.4146L173.52717600420488 170.4146L173.52717600420488 276.348L173.52717600420488 276.348C173.52717600420488 276.348 160.5126378038895 276.348 160.5126378038895 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 160.5126378038895 276.348L 160.5126378038895 170.4146Q 160.5126378038895 170.4146 160.5126378038895 170.4146L 173.52717600420488 170.4146Q 173.52717600420488 170.4146 173.52717600420488 170.4146L 173.52717600420488 170.4146L 173.52717600420488 276.348L 173.52717600420488 276.348z" pathFrom="M 160.5126378038895 276.348L 160.5126378038895 276.348L 173.52717600420488 276.348L 173.52717600420488 276.348L 173.52717600420488 276.348L 173.52717600420488 276.348L 173.52717600420488 276.348L 160.5126378038895 276.348" cy="170.4146" cx="173.52717600420488" j="2" val="46" barHeight="105.9334" barWidth="13.014538200315364"></path><path id="SvgjsPath1051" d="M247.27622580599194 276.348L247.27622580599194 119.7508C247.27622580599194 119.7508 247.27622580599194 119.7508 247.27622580599194 119.7508L260.2907640063073 119.7508C260.2907640063073 119.7508 260.2907640063073 119.7508 260.2907640063073 119.7508L260.2907640063073 119.7508L260.2907640063073 276.348L260.2907640063073 276.348C260.2907640063073 276.348 247.27622580599194 276.348 247.27622580599194 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 247.27622580599194 276.348L 247.27622580599194 119.7508Q 247.27622580599194 119.7508 247.27622580599194 119.7508L 260.2907640063073 119.7508Q 260.2907640063073 119.7508 260.2907640063073 119.7508L 260.2907640063073 119.7508L 260.2907640063073 276.348L 260.2907640063073 276.348z" pathFrom="M 247.27622580599194 276.348L 247.27622580599194 276.348L 260.2907640063073 276.348L 260.2907640063073 276.348L 260.2907640063073 276.348L 260.2907640063073 276.348L 260.2907640063073 276.348L 247.27622580599194 276.348" cy="119.7508" cx="260.2907640063073" j="3" val="68" barHeight="156.59720000000002" barWidth="13.014538200315364"></path><path id="SvgjsPath1053" d="M334.0398138080944 276.348L334.0398138080944 163.5059C334.0398138080944 163.5059 334.0398138080944 163.5059 334.0398138080944 163.5059L347.05435200840975 163.5059C347.05435200840975 163.5059 347.05435200840975 163.5059 347.05435200840975 163.5059L347.05435200840975 163.5059L347.05435200840975 276.348L347.05435200840975 276.348C347.05435200840975 276.348 334.0398138080944 276.348 334.0398138080944 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 334.0398138080944 276.348L 334.0398138080944 163.5059Q 334.0398138080944 163.5059 334.0398138080944 163.5059L 347.05435200840975 163.5059Q 347.05435200840975 163.5059 347.05435200840975 163.5059L 347.05435200840975 163.5059L 347.05435200840975 276.348L 347.05435200840975 276.348z" pathFrom="M 334.0398138080944 276.348L 334.0398138080944 276.348L 347.05435200840975 276.348L 347.05435200840975 276.348L 347.05435200840975 276.348L 347.05435200840975 276.348L 347.05435200840975 276.348L 334.0398138080944 276.348" cy="163.5059" cx="347.05435200840975" j="4" val="49" barHeight="112.8421" barWidth="13.014538200315364"></path><path id="SvgjsPath1055" d="M420.8034018101968 276.348L420.8034018101968 135.8711C420.8034018101968 135.8711 420.8034018101968 135.8711 420.8034018101968 135.8711L433.8179400105122 135.8711C433.8179400105122 135.8711 433.8179400105122 135.8711 433.8179400105122 135.8711L433.8179400105122 135.8711L433.8179400105122 276.348L433.8179400105122 276.348C433.8179400105122 276.348 420.8034018101968 276.348 420.8034018101968 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 420.8034018101968 276.348L 420.8034018101968 135.8711Q 420.8034018101968 135.8711 420.8034018101968 135.8711L 433.8179400105122 135.8711Q 433.8179400105122 135.8711 433.8179400105122 135.8711L 433.8179400105122 135.8711L 433.8179400105122 276.348L 433.8179400105122 276.348z" pathFrom="M 420.8034018101968 276.348L 420.8034018101968 276.348L 433.8179400105122 276.348L 433.8179400105122 276.348L 433.8179400105122 276.348L 433.8179400105122 276.348L 433.8179400105122 276.348L 420.8034018101968 276.348" cy="135.8711" cx="433.8179400105122" j="5" val="61" barHeight="140.4769" barWidth="13.014538200315364"></path><path id="SvgjsPath1057" d="M507.56698981229925 276.348L507.56698981229925 179.6262C507.5669898122992 179.6262 507.5669898122992 179.6262 507.56698981229925 179.6262L520.5815280126146 179.6262C520.5815280126146 179.6262 520.5815280126146 179.6262 520.5815280126146 179.6262L520.5815280126146 179.6262L520.5815280126146 276.348L520.5815280126146 276.348C520.5815280126146 276.348 507.56698981229925 276.348 507.56698981229925 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 507.56698981229925 276.348L 507.56698981229925 179.6262Q 507.56698981229925 179.6262 507.56698981229925 179.6262L 520.5815280126146 179.6262Q 520.5815280126146 179.6262 520.5815280126146 179.6262L 520.5815280126146 179.6262L 520.5815280126146 276.348L 520.5815280126146 276.348z" pathFrom="M 507.56698981229925 276.348L 507.56698981229925 276.348L 520.5815280126146 276.348L 520.5815280126146 276.348L 520.5815280126146 276.348L 520.5815280126146 276.348L 520.5815280126146 276.348L 507.56698981229925 276.348" cy="179.6262" cx="520.5815280126146" j="6" val="42" barHeight="96.7218" barWidth="13.014538200315364"></path><path id="SvgjsPath1059" d="M594.3305778144017 276.348L594.3305778144017 175.0204C594.3305778144017 175.0204 594.3305778144017 175.0204 594.3305778144017 175.0204L607.3451160147171 175.0204C607.3451160147171 175.0204 607.3451160147171 175.0204 607.3451160147171 175.0204L607.3451160147171 175.0204L607.3451160147171 276.348L607.3451160147171 276.348C607.3451160147171 276.348 594.3305778144017 276.348 594.3305778144017 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 594.3305778144017 276.348L 594.3305778144017 175.0204Q 594.3305778144017 175.0204 594.3305778144017 175.0204L 607.3451160147171 175.0204Q 607.3451160147171 175.0204 607.3451160147171 175.0204L 607.3451160147171 175.0204L 607.3451160147171 276.348L 607.3451160147171 276.348z" pathFrom="M 594.3305778144017 276.348L 594.3305778144017 276.348L 607.3451160147171 276.348L 607.3451160147171 276.348L 607.3451160147171 276.348L 607.3451160147171 276.348L 607.3451160147171 276.348L 594.3305778144017 276.348" cy="175.0204" cx="607.3451160147171" j="7" val="44" barHeight="101.3276" barWidth="13.014538200315364"></path><path id="SvgjsPath1061" d="M681.0941658165042 276.348L681.0941658165042 96.7218C681.0941658165042 96.7218 681.0941658165042 96.7218 681.0941658165042 96.7218L694.1087040168195 96.7218C694.1087040168195 96.7218 694.1087040168195 96.7218 694.1087040168195 96.7218L694.1087040168195 96.7218L694.1087040168195 276.348L694.1087040168195 276.348C694.1087040168195 276.348 681.0941658165042 276.348 681.0941658165042 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 681.0941658165042 276.348L 681.0941658165042 96.7218Q 681.0941658165042 96.7218 681.0941658165042 96.7218L 694.1087040168195 96.7218Q 694.1087040168195 96.7218 694.1087040168195 96.7218L 694.1087040168195 96.7218L 694.1087040168195 276.348L 694.1087040168195 276.348z" pathFrom="M 681.0941658165042 276.348L 681.0941658165042 276.348L 694.1087040168195 276.348L 694.1087040168195 276.348L 694.1087040168195 276.348L 694.1087040168195 276.348L 694.1087040168195 276.348L 681.0941658165042 276.348" cy="96.7218" cx="694.1087040168195" j="8" val="78" barHeight="179.6262" barWidth="13.014538200315364"></path><path id="SvgjsPath1063" d="M767.8577538186066 276.348L767.8577538186066 156.5972C767.8577538186066 156.5972 767.8577538186066 156.5972 767.8577538186066 156.5972L780.8722920189219 156.5972C780.8722920189219 156.5972 780.8722920189219 156.5972 780.8722920189219 156.5972L780.8722920189219 156.5972L780.8722920189219 276.348L780.8722920189219 276.348C780.8722920189219 276.348 767.8577538186066 276.348 767.8577538186066 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 767.8577538186066 276.348L 767.8577538186066 156.5972Q 767.8577538186066 156.5972 767.8577538186066 156.5972L 780.8722920189219 156.5972Q 780.8722920189219 156.5972 780.8722920189219 156.5972L 780.8722920189219 156.5972L 780.8722920189219 276.348L 780.8722920189219 276.348z" pathFrom="M 767.8577538186066 276.348L 767.8577538186066 276.348L 780.8722920189219 276.348L 780.8722920189219 276.348L 780.8722920189219 276.348L 780.8722920189219 276.348L 780.8722920189219 276.348L 767.8577538186066 276.348" cy="156.5972" cx="780.8722920189219" j="9" val="52" barHeight="119.75080000000001" barWidth="13.014538200315364"></path><path id="SvgjsPath1065" d="M854.6213418207091 276.348L854.6213418207091 131.2653C854.6213418207092 131.2653 854.6213418207092 131.2653 854.6213418207091 131.2653L867.6358800210244 131.2653C867.6358800210244 131.2653 867.6358800210244 131.2653 867.6358800210244 131.2653L867.6358800210244 131.2653L867.6358800210244 276.348L867.6358800210244 276.348C867.6358800210244 276.348 854.6213418207091 276.348 854.6213418207091 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 854.6213418207091 276.348L 854.6213418207091 131.2653Q 854.6213418207091 131.2653 854.6213418207091 131.2653L 867.6358800210244 131.2653Q 867.6358800210244 131.2653 867.6358800210244 131.2653L 867.6358800210244 131.2653L 867.6358800210244 276.348L 867.6358800210244 276.348z" pathFrom="M 854.6213418207091 276.348L 854.6213418207091 276.348L 867.6358800210244 276.348L 867.6358800210244 276.348L 867.6358800210244 276.348L 867.6358800210244 276.348L 867.6358800210244 276.348L 854.6213418207091 276.348" cy="131.2653" cx="867.6358800210244" j="10" val="63" barHeight="145.08270000000002" barWidth="13.014538200315364"></path><path id="SvgjsPath1067" d="M941.3849298228115 276.348L941.3849298228115 122.05369999999999C941.3849298228115 122.05369999999999 941.3849298228115 122.05369999999999 941.3849298228115 122.05369999999999L954.3994680231268 122.05369999999999C954.3994680231267 122.05369999999999 954.3994680231267 122.05369999999999 954.3994680231268 122.05369999999999L954.3994680231268 122.05369999999999L954.3994680231268 276.348L954.3994680231268 276.348C954.3994680231268 276.348 941.3849298228115 276.348 941.3849298228115 276.348 " fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 941.3849298228115 276.348L 941.3849298228115 122.05369999999999Q 941.3849298228115 122.05369999999999 941.3849298228115 122.05369999999999L 954.3994680231268 122.05369999999999Q 954.3994680231268 122.05369999999999 954.3994680231268 122.05369999999999L 954.3994680231268 122.05369999999999L 954.3994680231268 276.348L 954.3994680231268 276.348z" pathFrom="M 941.3849298228115 276.348L 941.3849298228115 276.348L 954.3994680231268 276.348L 954.3994680231268 276.348L 954.3994680231268 276.348L 954.3994680231268 276.348L 954.3994680231268 276.348L 941.3849298228115 276.348" cy="122.05369999999999" cx="954.3994680231268" j="11" val="67" barHeight="154.29430000000002" barWidth="13.014538200315364"></path><g id="SvgjsG1043" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1044" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1046" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1048" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1050" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1052" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1054" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1056" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1058" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1060" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1062" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1064" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1066" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1068" class="apexcharts-series" rel="2" seriesName="ActivexProjects" data:realIndex="2"><path id="SvgjsPath1072" d="M0 276.348L0 257.9248C0 257.9248 0 257.9248 0 257.9248L13.014538200315364 257.9248C13.014538200315364 257.9248 13.014538200315364 257.9248 13.014538200315364 257.9248L13.014538200315364 257.9248L13.014538200315364 276.348L13.014538200315364 276.348C13.014538200315364 276.348 0 276.348 0 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 0 276.348L 0 257.9248Q 0 257.9248 0 257.9248L 13.014538200315364 257.9248Q 13.014538200315364 257.9248 13.014538200315364 257.9248L 13.014538200315364 257.9248L 13.014538200315364 276.348L 13.014538200315364 276.348z" pathFrom="M 0 276.348L 0 276.348L 13.014538200315364 276.348L 13.014538200315364 276.348L 13.014538200315364 276.348L 13.014538200315364 276.348L 13.014538200315364 276.348L 0 276.348" cy="257.9248" cx="13.014538200315364" j="0" val="8" barHeight="18.4232" barWidth="13.014538200315364"></path><path id="SvgjsPath1074" d="M86.76358800210244 276.348L86.76358800210244 248.7132C86.76358800210244 248.71319999999997 86.76358800210244 248.71319999999997 86.76358800210244 248.7132L99.77812620241781 248.7132C99.77812620241781 248.71319999999997 99.77812620241781 248.71319999999997 99.77812620241781 248.7132L99.77812620241781 248.7132L99.77812620241781 276.348L99.77812620241781 276.348C99.77812620241781 276.348 86.76358800210244 276.348 86.76358800210244 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 86.76358800210244 276.348L 86.76358800210244 248.7132Q 86.76358800210244 248.7132 86.76358800210244 248.7132L 99.77812620241781 248.7132Q 99.77812620241781 248.7132 99.77812620241781 248.7132L 99.77812620241781 248.7132L 99.77812620241781 276.348L 99.77812620241781 276.348z" pathFrom="M 86.76358800210244 276.348L 86.76358800210244 276.348L 99.77812620241781 276.348L 99.77812620241781 276.348L 99.77812620241781 276.348L 99.77812620241781 276.348L 99.77812620241781 276.348L 86.76358800210244 276.348" cy="248.7132" cx="99.7781262024178" j="1" val="12" barHeight="27.634800000000002" barWidth="13.014538200315364"></path><path id="SvgjsPath1076" d="M173.52717600420488 276.348L173.52717600420488 260.2277C173.52717600420488 260.2277 173.52717600420488 260.2277 173.52717600420488 260.2277L186.54171420452025 260.2277C186.54171420452025 260.2277 186.54171420452025 260.2277 186.54171420452025 260.2277L186.54171420452025 260.2277L186.54171420452025 276.348L186.54171420452025 276.348C186.54171420452025 276.348 173.52717600420488 276.348 173.52717600420488 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 173.52717600420488 276.348L 173.52717600420488 260.2277Q 173.52717600420488 260.2277 173.52717600420488 260.2277L 186.54171420452025 260.2277Q 186.54171420452025 260.2277 186.54171420452025 260.2277L 186.54171420452025 260.2277L 186.54171420452025 276.348L 186.54171420452025 276.348z" pathFrom="M 173.52717600420488 276.348L 173.52717600420488 276.348L 186.54171420452025 276.348L 186.54171420452025 276.348L 186.54171420452025 276.348L 186.54171420452025 276.348L 186.54171420452025 276.348L 173.52717600420488 276.348" cy="260.2277" cx="186.54171420452025" j="2" val="7" barHeight="16.1203" barWidth="13.014538200315364"></path><path id="SvgjsPath1078" d="M260.2907640063073 276.348L260.2907640063073 237.1987C260.2907640063073 237.19869999999997 260.2907640063073 237.19869999999997 260.2907640063073 237.1987L273.3053022066227 237.1987C273.3053022066227 237.19869999999997 273.3053022066227 237.19869999999997 273.3053022066227 237.1987L273.3053022066227 237.1987L273.3053022066227 276.348L273.3053022066227 276.348C273.3053022066227 276.348 260.2907640063073 276.348 260.2907640063073 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 260.2907640063073 276.348L 260.2907640063073 237.1987Q 260.2907640063073 237.1987 260.2907640063073 237.1987L 273.3053022066227 237.1987Q 273.3053022066227 237.1987 273.3053022066227 237.1987L 273.3053022066227 237.1987L 273.3053022066227 276.348L 273.3053022066227 276.348z" pathFrom="M 260.2907640063073 276.348L 260.2907640063073 276.348L 273.3053022066227 276.348L 273.3053022066227 276.348L 273.3053022066227 276.348L 273.3053022066227 276.348L 273.3053022066227 276.348L 260.2907640063073 276.348" cy="237.1987" cx="273.3053022066227" j="3" val="17" barHeight="39.149300000000004" barWidth="13.014538200315364"></path><path id="SvgjsPath1080" d="M347.05435200840975 276.348L347.05435200840975 227.9871C347.05435200840975 227.9871 347.05435200840975 227.9871 347.05435200840975 227.9871L360.0688902087251 227.9871C360.0688902087251 227.9871 360.0688902087251 227.9871 360.0688902087251 227.9871L360.0688902087251 227.9871L360.0688902087251 276.348L360.0688902087251 276.348C360.0688902087251 276.348 347.05435200840975 276.348 347.05435200840975 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 347.05435200840975 276.348L 347.05435200840975 227.9871Q 347.05435200840975 227.9871 347.05435200840975 227.9871L 360.0688902087251 227.9871Q 360.0688902087251 227.9871 360.0688902087251 227.9871L 360.0688902087251 227.9871L 360.0688902087251 276.348L 360.0688902087251 276.348z" pathFrom="M 347.05435200840975 276.348L 347.05435200840975 276.348L 360.0688902087251 276.348L 360.0688902087251 276.348L 360.0688902087251 276.348L 360.0688902087251 276.348L 360.0688902087251 276.348L 347.05435200840975 276.348" cy="227.9871" cx="360.0688902087251" j="4" val="21" barHeight="48.3609" barWidth="13.014538200315364"></path><path id="SvgjsPath1082" d="M433.8179400105122 276.348L433.8179400105122 251.01610000000002C433.8179400105122 251.01610000000005 433.8179400105122 251.01610000000005 433.8179400105122 251.01610000000002L446.83247821082756 251.01610000000002C446.8324782108275 251.01610000000005 446.8324782108275 251.01610000000005 446.83247821082756 251.01610000000002L446.83247821082756 251.01610000000002L446.83247821082756 276.348L446.83247821082756 276.348C446.83247821082756 276.348 433.8179400105122 276.348 433.8179400105122 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 433.8179400105122 276.348L 433.8179400105122 251.01610000000002Q 433.8179400105122 251.01610000000002 433.8179400105122 251.01610000000002L 446.83247821082756 251.01610000000002Q 446.83247821082756 251.01610000000002 446.83247821082756 251.01610000000002L 446.83247821082756 251.01610000000002L 446.83247821082756 276.348L 446.83247821082756 276.348z" pathFrom="M 433.8179400105122 276.348L 433.8179400105122 276.348L 446.83247821082756 276.348L 446.83247821082756 276.348L 446.83247821082756 276.348L 446.83247821082756 276.348L 446.83247821082756 276.348L 433.8179400105122 276.348" cy="251.01610000000002" cx="446.83247821082756" j="5" val="11" barHeight="25.3319" barWidth="13.014538200315364"></path><path id="SvgjsPath1084" d="M520.5815280126146 276.348L520.5815280126146 264.8335C520.5815280126146 264.8335 520.5815280126146 264.8335 520.5815280126146 264.8335L533.5960662129299 264.8335C533.5960662129299 264.8335 533.5960662129299 264.8335 533.5960662129299 264.8335L533.5960662129299 264.8335L533.5960662129299 276.348L533.5960662129299 276.348C533.5960662129299 276.348 520.5815280126146 276.348 520.5815280126146 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 520.5815280126146 276.348L 520.5815280126146 264.8335Q 520.5815280126146 264.8335 520.5815280126146 264.8335L 533.5960662129299 264.8335Q 533.5960662129299 264.8335 533.5960662129299 264.8335L 533.5960662129299 264.8335L 533.5960662129299 276.348L 533.5960662129299 276.348z" pathFrom="M 520.5815280126146 276.348L 520.5815280126146 276.348L 533.5960662129299 276.348L 533.5960662129299 276.348L 533.5960662129299 276.348L 533.5960662129299 276.348L 533.5960662129299 276.348L 520.5815280126146 276.348" cy="264.8335" cx="533.5960662129299" j="6" val="5" barHeight="11.5145" barWidth="13.014538200315364"></path><path id="SvgjsPath1086" d="M607.3451160147171 276.348L607.3451160147171 255.6219C607.3451160147171 255.6219 607.3451160147171 255.6219 607.3451160147171 255.6219L620.3596542150324 255.6219C620.3596542150324 255.6219 620.3596542150324 255.6219 620.3596542150324 255.6219L620.3596542150324 255.6219L620.3596542150324 276.348L620.3596542150324 276.348C620.3596542150324 276.348 607.3451160147171 276.348 607.3451160147171 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 607.3451160147171 276.348L 607.3451160147171 255.6219Q 607.3451160147171 255.6219 607.3451160147171 255.6219L 620.3596542150324 255.6219Q 620.3596542150324 255.6219 620.3596542150324 255.6219L 620.3596542150324 255.6219L 620.3596542150324 276.348L 620.3596542150324 276.348z" pathFrom="M 607.3451160147171 276.348L 607.3451160147171 276.348L 620.3596542150324 276.348L 620.3596542150324 276.348L 620.3596542150324 276.348L 620.3596542150324 276.348L 620.3596542150324 276.348L 607.3451160147171 276.348" cy="255.6219" cx="620.3596542150325" j="7" val="9" barHeight="20.726100000000002" barWidth="13.014538200315364"></path><path id="SvgjsPath1088" d="M694.1087040168195 276.348L694.1087040168195 260.2277C694.1087040168195 260.2277 694.1087040168195 260.2277 694.1087040168195 260.2277L707.1232422171348 260.2277C707.1232422171348 260.2277 707.1232422171348 260.2277 707.1232422171348 260.2277L707.1232422171348 260.2277L707.1232422171348 276.348L707.1232422171348 276.348C707.1232422171348 276.348 694.1087040168195 276.348 694.1087040168195 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 694.1087040168195 276.348L 694.1087040168195 260.2277Q 694.1087040168195 260.2277 694.1087040168195 260.2277L 707.1232422171348 260.2277Q 707.1232422171348 260.2277 707.1232422171348 260.2277L 707.1232422171348 260.2277L 707.1232422171348 276.348L 707.1232422171348 276.348z" pathFrom="M 694.1087040168195 276.348L 694.1087040168195 276.348L 707.1232422171348 276.348L 707.1232422171348 276.348L 707.1232422171348 276.348L 707.1232422171348 276.348L 707.1232422171348 276.348L 694.1087040168195 276.348" cy="260.2277" cx="707.1232422171349" j="8" val="7" barHeight="16.1203" barWidth="13.014538200315364"></path><path id="SvgjsPath1090" d="M780.8722920189219 276.348L780.8722920189219 209.5639C780.8722920189219 209.5639 780.8722920189219 209.5639 780.8722920189219 209.5639L793.8868302192373 209.5639C793.8868302192373 209.5639 793.8868302192373 209.5639 793.8868302192373 209.5639L793.8868302192373 209.5639L793.8868302192373 276.348L793.8868302192373 276.348C793.8868302192373 276.348 780.8722920189219 276.348 780.8722920189219 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 780.8722920189219 276.348L 780.8722920189219 209.5639Q 780.8722920189219 209.5639 780.8722920189219 209.5639L 793.8868302192373 209.5639Q 793.8868302192373 209.5639 793.8868302192373 209.5639L 793.8868302192373 209.5639L 793.8868302192373 276.348L 793.8868302192373 276.348z" pathFrom="M 780.8722920189219 276.348L 780.8722920189219 276.348L 793.8868302192373 276.348L 793.8868302192373 276.348L 793.8868302192373 276.348L 793.8868302192373 276.348L 793.8868302192373 276.348L 780.8722920189219 276.348" cy="209.5639" cx="793.8868302192374" j="9" val="29" barHeight="66.78410000000001" barWidth="13.014538200315364"></path><path id="SvgjsPath1092" d="M867.6358800210244 276.348L867.6358800210244 248.7132C867.6358800210244 248.71319999999997 867.6358800210244 248.71319999999997 867.6358800210244 248.7132L880.6504182213397 248.7132C880.6504182213398 248.71319999999997 880.6504182213398 248.71319999999997 880.6504182213397 248.7132L880.6504182213397 248.7132L880.6504182213397 276.348L880.6504182213397 276.348C880.6504182213397 276.348 867.6358800210244 276.348 867.6358800210244 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 867.6358800210244 276.348L 867.6358800210244 248.7132Q 867.6358800210244 248.7132 867.6358800210244 248.7132L 880.6504182213397 248.7132Q 880.6504182213397 248.7132 880.6504182213397 248.7132L 880.6504182213397 248.7132L 880.6504182213397 276.348L 880.6504182213397 276.348z" pathFrom="M 867.6358800210244 276.348L 867.6358800210244 276.348L 880.6504182213397 276.348L 880.6504182213397 276.348L 880.6504182213397 276.348L 880.6504182213397 276.348L 880.6504182213397 276.348L 867.6358800210244 276.348" cy="248.7132" cx="880.6504182213398" j="10" val="12" barHeight="27.634800000000002" barWidth="13.014538200315364"></path><path id="SvgjsPath1094" d="M954.3994680231268 276.348L954.3994680231268 195.74650000000003C954.3994680231267 195.74650000000003 954.3994680231267 195.74650000000003 954.3994680231268 195.74650000000003L967.4140062234421 195.74650000000003C967.4140062234421 195.74650000000003 967.4140062234421 195.74650000000003 967.4140062234421 195.74650000000003L967.4140062234421 195.74650000000003L967.4140062234421 276.348L967.4140062234421 276.348C967.4140062234421 276.348 954.3994680231268 276.348 954.3994680231268 276.348 " fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMask8r48j7l5)" pathTo="M 954.3994680231268 276.348L 954.3994680231268 195.74650000000003Q 954.3994680231268 195.74650000000003 954.3994680231268 195.74650000000003L 967.4140062234421 195.74650000000003Q 967.4140062234421 195.74650000000003 967.4140062234421 195.74650000000003L 967.4140062234421 195.74650000000003L 967.4140062234421 276.348L 967.4140062234421 276.348z" pathFrom="M 954.3994680231268 276.348L 954.3994680231268 276.348L 967.4140062234421 276.348L 967.4140062234421 276.348L 967.4140062234421 276.348L 967.4140062234421 276.348L 967.4140062234421 276.348L 954.3994680231268 276.348" cy="195.74650000000003" cx="967.4140062234422" j="11" val="35" barHeight="80.6015" barWidth="13.014538200315364"></path><g id="SvgjsG1070" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1071" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1073" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1075" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1077" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1079" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1081" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1083" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1085" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1087" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1089" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1091" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1093" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1014" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1042" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1069" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1162" x1="-18.519618710604583" y1="0" x2="972.9190867337314" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1163" x1="-18.519618710604583" y1="0" x2="972.9190867337314" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1164" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1165" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1166" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1167" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1168" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1007" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1133" class="apexcharts-yaxis" rel="0" transform="translate(32.56730651855469, 0)"><g id="SvgjsG1134" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1135" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1136">120.00</tspan><title>120.00</title></text><text id="SvgjsText1137" font-family="Helvetica, Arial, sans-serif" x="20" y="100.48700000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1138">90.00</tspan><title>90.00</title></text><text id="SvgjsText1139" font-family="Helvetica, Arial, sans-serif" x="20" y="169.574" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1140">60.00</tspan><title>60.00</title></text><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="20" y="238.66100000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1142">30.00</tspan><title>30.00</title></text><text id="SvgjsText1143" font-family="Helvetica, Arial, sans-serif" x="20" y="307.748" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1144">0.00</tspan><title>0.00</title></text></g></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 421.372px; top: 0px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thg 7</font></font></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(102, 145, 231);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng dự án</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 188, 82);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doanh thu</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 51,24 nghìn</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(19, 197, 107);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án đang hoạt động</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 582.426px; top: 308.348px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 19.4844px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thg 7</font></font></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h4 class="card-title mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lịch trình sắp tới</font></font></h4>
                                </div><!-- end cardheader -->
                                <div class="card-body pt-0">
                                    <div class="upcoming-scheduled">
                                        <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true" readonly="readonly"><div class="flatpickr-calendar animate inline" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Tháng" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tháng Giêng</font></font></option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tháng 2</font></font></option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bước đều</font></font></option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng tư</font></font></option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có thể</font></font></option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng sáu</font></font></option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng bảy</font></font></option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng tám</font></font></option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng 9</font></font></option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng Mười</font></font></option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng mười một</font></font></option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng 12</font></font></option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Năm"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
        Mặt trời</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thứ hai</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thứ ba</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thứ Tư</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thu</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T6</font></font></span><span class="flatpickr-weekday"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đã ngồi
      </font></font></span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day " aria-label="1 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><span class="flatpickr-day " aria-label="Ngày 2 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span><span class="flatpickr-day " aria-label="Ngày 3 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span><span class="flatpickr-day " aria-label="Ngày 4 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span><span class="flatpickr-day " aria-label="Ngày 5 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span><span class="flatpickr-day today selected" aria-label="Ngày 6 tháng 5 năm 2022" aria-current="date" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span><span class="flatpickr-day " aria-label="Ngày 7 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span><span class="flatpickr-day " aria-label="8 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">số 8</font></font></span><span class="flatpickr-day " aria-label="Ngày 9 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span><span class="flatpickr-day " aria-label="Ngày 10 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span><span class="flatpickr-day " aria-label="Ngày 11 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span><span class="flatpickr-day " aria-label="Ngày 12 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></span><span class="flatpickr-day " aria-label="Ngày 13 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></span><span class="flatpickr-day " aria-label="Ngày 14 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></span><span class="flatpickr-day " aria-label="Ngày 15 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span><span class="flatpickr-day " aria-label="Ngày 16 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></span><span class="flatpickr-day " aria-label="Ngày 17 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></span><span class="flatpickr-day " aria-label="18 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></span><span class="flatpickr-day " aria-label="Ngày 19 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></span><span class="flatpickr-day " aria-label="20 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></span><span class="flatpickr-day " aria-label="Ngày 21 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></span><span class="flatpickr-day " aria-label="Ngày 22 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></span><span class="flatpickr-day " aria-label="23 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></span><span class="flatpickr-day " aria-label="Ngày 24 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></span><span class="flatpickr-day " aria-label="Ngày 25 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span><span class="flatpickr-day " aria-label="Ngày 26 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></span><span class="flatpickr-day " aria-label="Ngày 27 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></span><span class="flatpickr-day " aria-label="28 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></span><span class="flatpickr-day " aria-label="Ngày 29 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></span><span class="flatpickr-day " aria-label="Ngày 30 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></span><span class="flatpickr-day " aria-label="Ngày 31 tháng 5 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="1 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 2 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 3 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="4 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 5 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 6 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 7 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="8 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">số 8</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 9 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 10 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></span><span class="flatpickr-day nextMonthDay" aria-label="Ngày 11 tháng 6 năm 2022" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></span></div></div></div></div></div>
                                    </div>

                                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sự kiện:</font></font></h6>
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                09
                                            </font></font></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kế hoạch phát triển</font></font></h6>
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà máy iTest</font></font></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9:20 </font></font><span class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sáng</font></font></span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                12
                                            </font></font></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thiết kế giao diện người dùng mới và kiểm tra doanh số bán hàng</font></font></h6>
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Meta4Systems</font></font></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11:30 </font></font><span class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sáng</font></font></span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                25
                                            </font></font></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cập nhật hàng tuần</font></font></h6>
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nesta Technologies</font></font></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02:00 </font></font><span class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chiều</font></font></span></p>
                                        </div>
                                    </div><!-- end -->
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                27
                                            </font></font></span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cuộc họp James Bangs (Khách hàng)</font></font></h6>
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nesta Technologies</font></font></p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03:45 </font></font><span class="text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chiều</font></font></span></p>
                                        </div>
                                    </div><!-- end -->

                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem tất cả các sự kiện</font></font></a>
                                    </div>

                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <h4 class="card-title flex-grow-1 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dự án đang hoạt động</font></font></h4>
                                    <div class="flex-shrink-0">
                                        <a href="javascript:void(0);" class="btn btn-soft-info btn-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Báo cáo xuất khẩu</font></font></a>
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-nowrap table-centered align-middle">
                                            <thead class="bg-light text-muted">
                                                <tr>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên dự án</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trưởng dự án</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phát triển</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Người được chuyển nhượng</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng</font></font></th>
                                                    <th scope="col" style="width: 10%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày đáo hạn</font></font></th>
                                                </tr><!-- end tr -->
                                            </thead><!-- thead -->

                                            <tbody>
                                                <tr>
                                                    <td class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thiết kế logo thương hiệu</font></font></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-1.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                        <a href="javascript: void(0);" class="text-reset"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Donald Risher</font></font></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-1 text-muted fs-13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">53%</font></font></div>
                                                            <div class="progress progress-sm  flex-grow-1" style="width: 68%;">
                                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group flex-nowrap">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-soft-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trong tiến trình</font></font></span></td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06/09/2021</font></font></td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thiết kế lại - Trang đích</font></font></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-2.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                        <a href="javascript: void(0);" class="text-reset"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prezy William</font></font></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 text-muted me-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0%</font></font></div>
                                                            <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-soft-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></span></td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13 tháng 11 năm 2021</font></font></td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mẫu Đích đa năng</font></font></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-3.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                        <a href="javascript: void(0);" class="text-reset"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Boonie Hoynas</font></font></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 text-muted me-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100%</font></font></div>
                                                            <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-soft-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoàn thành</font></font></span></td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26 tháng 11 năm 2021</font></font></td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ứng dụng trò chuyện</font></font></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-5.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                        <a href="javascript: void(0);" class="text-reset"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pauline Moll</font></font></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 text-muted me-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">64%</font></font></div>
                                                            <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-soft-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phát triển</font></font></span></td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15 tháng 12 năm 2021</font></font></td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="fw-medium"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tạo khung dây</font></font></td>
                                                    <td>
                                                        <img src="assets/images/users/avatar-6.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                        <a href="javascript: void(0);" class="text-reset"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">James Bangs</font></font></a>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 text-muted me-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">77%</font></font></div>
                                                            <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge badge-soft-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phát triển</font></font></span></td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21 tháng 12 năm 2021</font></font></td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>

                                    <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hiển thị </font></font><span class="fw-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> trên </font></font><span class="fw-semibold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kết quả
                                            </font></font></div>
                                        </div>
                                        <ul class="pagination pagination-separated pagination-sm mb-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">←</font></font></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">→</font></font></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1 py-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhiệm vụ của tôi</font></font></h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tất cả các nhiệm vụ</font></font><i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">All Tasks</a>
                                                <a class="dropdown-item" href="#">Completed </a>
                                                <a class="dropdown-item" href="#">Inprogress</a>
                                                <a class="dropdown-item" href="#">Pending</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dedline</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Người được chuyển nhượng</font></font></th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask1">
                                                            <label class="form-check-label ms-1" for="checkTask1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                Tạo mẫu quản trị mới
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03 tháng 11 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoàn thành</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mary Stoner">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask2">
                                                            <label class="form-check-label ms-1" for="checkTask2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                sự phối hợp của Marketing
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17 tháng 11 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phát triển</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Den Davis">
                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask3">
                                                            <label class="form-check-label ms-1" for="checkTask3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                Nhà phân tích hành chính
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26 tháng 11 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoàn thành</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Alex Brown">
                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask4">
                                                            <label class="form-check-label ms-1" for="checkTask4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                Trang đích thương mại điện tử
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 tháng 12 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Prezy Morin">
                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask5">
                                                            <label class="form-check-label ms-1" for="checkTask5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                Thiết kế UI / UX
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22 tháng 12 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phát triển</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask6">
                                                            <label class="form-check-label ms-1" for="checkTask6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                                Thiết kế dự án
                                                            </font></font></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31 tháng 12 năm 2021</font></font></td>
                                                    <td><span class="badge badge-soft-danger"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></span></td>
                                                    <td>
                                                        <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh William">
                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                        </a>
                                                    </td>
                                                </tr><!-- end -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải thêm</font></font></a>
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thành viên của nhóm</font></font></h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo: </font></font></span><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30 ngày qua</font></font><i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hôm nay</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hôm qua</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7 ngày qua</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30 ngày trước</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng này</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tháng trước</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">

                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless table-nowrap align-middle mb-0">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thành viên</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giờ</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhiệm vụ</font></font></th>
                                                    <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng</font></font></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Donald Risher</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giám đốc sản xuất</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">110 giờ: 150 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">giờ</font></font></span>
                                                        </h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        258
                                                    </font></font></td>
                                                    <td style="width:5%;">
                                                        <div id="radialBar_chart_1" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="50" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsy062m3o" class="apexcharts-canvas apexchartsy062m3o apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1323" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1325" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1324"><clipPath id="gridRectMasky062m3o"><rect id="SvgjsRect1327" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasky062m3o"></clipPath><clipPath id="nonForecastMasky062m3o"></clipPath><clipPath id="gridRectMarkerMasky062m3o"><rect id="SvgjsRect1328" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1329" class="apexcharts-radialbar"><g id="SvgjsG1330"><g id="SvgjsG1331" class="apexcharts-tracks"><g id="SvgjsG1332" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1334"><g id="SvgjsG1336" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1337" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 18 29.475609756097562" fill="none" fill-opacity="0.85" stroke="rgba(102,145,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="180" data:value="50" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 18 29.475609756097562"></path></g><circle id="SvgjsCircle1335" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1338" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1339" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1326" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jansh Brown</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà phát triển chính</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">83 giờ: 150 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">giờ</font></font></span></h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        105
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_2" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="45" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsn1uqp4we" class="apexcharts-canvas apexchartsn1uqp4we apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1340" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1342" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1341"><clipPath id="gridRectMaskn1uqp4we"><rect id="SvgjsRect1344" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskn1uqp4we"></clipPath><clipPath id="nonForecastMaskn1uqp4we"></clipPath><clipPath id="gridRectMarkerMaskn1uqp4we"><rect id="SvgjsRect1345" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1346" class="apexcharts-radialbar"><g id="SvgjsG1347"><g id="SvgjsG1348" class="apexcharts-tracks"><g id="SvgjsG1349" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1351"><g id="SvgjsG1353" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1354" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 21.546158435449094 28.913953436996824" fill="none" fill-opacity="0.85" stroke="rgba(102,145,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="162" data:value="45" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 21.546158435449094 28.913953436996824"></path></g><circle id="SvgjsCircle1352" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1355" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1356" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1343" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carroll Adams</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kỹ sư trưởng</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58 giờ: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">150 giờ</font></font></span></h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        75
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_3" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="75" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartshj3nvyfl" class="apexcharts-canvas apexchartshj3nvyfl apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1357" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1359" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1358"><clipPath id="gridRectMaskhj3nvyfl"><rect id="SvgjsRect1361" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhj3nvyfl"></clipPath><clipPath id="nonForecastMaskhj3nvyfl"></clipPath><clipPath id="gridRectMarkerMaskhj3nvyfl"><rect id="SvgjsRect1362" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1363" class="apexcharts-radialbar"><g id="SvgjsG1364"><g id="SvgjsG1365" class="apexcharts-tracks"><g id="SvgjsG1366" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1368"><g id="SvgjsG1370" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1371" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 6.524390243902438 18" fill="none" fill-opacity="0.85" stroke="rgba(102,145,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 6.524390243902438 18"></path></g><circle id="SvgjsCircle1369" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1372" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1373" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1360" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">William Pinto</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà thiết kế UI / UX</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">96 giờ: </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">150 giờ</font></font></span></h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        85
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_4" data-colors="[&quot;--vz-warning&quot;]" data-chart-series="25" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsiok9mk3d" class="apexcharts-canvas apexchartsiok9mk3d apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1374" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1376" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1375"><clipPath id="gridRectMaskiok9mk3d"><rect id="SvgjsRect1378" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskiok9mk3d"></clipPath><clipPath id="nonForecastMaskiok9mk3d"></clipPath><clipPath id="gridRectMarkerMaskiok9mk3d"><rect id="SvgjsRect1379" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1380" class="apexcharts-radialbar"><g id="SvgjsG1381"><g id="SvgjsG1382" class="apexcharts-tracks"><g id="SvgjsG1383" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1385"><g id="SvgjsG1387" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1388" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 29.475609756097562 18" fill="none" fill-opacity="0.85" stroke="rgba(232,188,82,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="90" data:value="25" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 29.475609756097562 18"></path></g><circle id="SvgjsCircle1386" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1389" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1390" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1377" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garry Fournier</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà thiết kế web</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">76 giờ: 150 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">giờ</font></font></span></h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        69
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_5" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="60" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsci60hig1i" class="apexcharts-canvas apexchartsci60hig1i apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1391" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1393" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1392"><clipPath id="gridRectMaskci60hig1i"><rect id="SvgjsRect1395" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskci60hig1i"></clipPath><clipPath id="nonForecastMaskci60hig1i"></clipPath><clipPath id="gridRectMarkerMaskci60hig1i"><rect id="SvgjsRect1396" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1397" class="apexcharts-radialbar"><g id="SvgjsG1398"><g id="SvgjsG1399" class="apexcharts-tracks"><g id="SvgjsG1400" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1402"><g id="SvgjsG1404" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1405" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 11.254805824302231 27.28396331349787" fill="none" fill-opacity="0.85" stroke="rgba(102,145,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 11.254805824302231 27.28396331349787"></path></g><circle id="SvgjsCircle1403" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1406" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1407" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1394" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Susan Denton</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kỹ sư trưởng</font></font></p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">123 giờ: 150 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">giờ</font></font></span>
                                                        </h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        658
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_6" data-colors="[&quot;--vz-success&quot;]" data-chart-series="85" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartstorpdxid" class="apexcharts-canvas apexchartstorpdxid apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1408" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1410" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1409"><clipPath id="gridRectMasktorpdxid"><rect id="SvgjsRect1412" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktorpdxid"></clipPath><clipPath id="nonForecastMasktorpdxid"></clipPath><clipPath id="gridRectMarkerMasktorpdxid"><rect id="SvgjsRect1413" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1414" class="apexcharts-radialbar"><g id="SvgjsG1415"><g id="SvgjsG1416" class="apexcharts-tracks"><g id="SvgjsG1417" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1419"><g id="SvgjsG1421" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1422" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 8.716036686502127 11.254805824302231" fill="none" fill-opacity="0.85" stroke="rgba(19,197,107,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 8.716036686502127 11.254805824302231"></path></g><circle id="SvgjsCircle1420" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1423" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1424" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1411" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                                <tr>
                                                    <td class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                        <div>
                                                            <h5 class="fs-13 mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Joseph Jackson</font></font></h5>
                                                            <p class="fs-12 mb-0 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhà phát triển React</font></font></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">117 giờ: 150 </font></font><span class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">giờ</font></font></span>
                                                        </h6>
                                                    </td>
                                                    <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        125
                                                    </font></font></td>
                                                    <td>
                                                        <div id="radialBar_chart_7" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="70" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsv2qvp1yk" class="apexcharts-canvas apexchartsv2qvp1yk apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1425" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1427" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1426"><clipPath id="gridRectMaskv2qvp1yk"><rect id="SvgjsRect1429" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskv2qvp1yk"></clipPath><clipPath id="nonForecastMaskv2qvp1yk"></clipPath><clipPath id="gridRectMarkerMaskv2qvp1yk"><rect id="SvgjsRect1430" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1431" class="apexcharts-radialbar"><g id="SvgjsG1432"><g id="SvgjsG1433" class="apexcharts-tracks"><g id="SvgjsG1434" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1436"><g id="SvgjsG1438" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1439" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 7.086046563003176 21.546158435449094" fill="none" fill-opacity="0.85" stroke="rgba(102,145,231,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 7.086046563003176 21.546158435449094"></path></g><circle id="SvgjsCircle1437" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1440" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1441" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1428" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                    </td>
                                                </tr><!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trò chuyện</font></font></h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted"><i class="ri-settings-4-line align-bottom me-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thiết lập</font></font><i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a class="dropdown-item" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem lí lịch</font></font></a>
                                                <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Lưu trữ</font></font></a>
                                                <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Đã tắt tiếng</font></font></a>
                                                <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Xóa bỏ</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body p-0">
                                    <div id="users-chat">
                                        <div class="chat-conversation p-3" id="chat-conversation" data-simplebar="init" style="height: 400px;"><div class="simplebar-wrapper" style="margin: -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="nội dung có thể cuộn" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 16px;">
                                            <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chào buổi sáng</font></font></p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sao chép</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:07 sáng</font></font></small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list right">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chào buổi sáng, bạn khỏe không? </font><font style="vertical-align: inherit;">Còn cuộc gặp tiếp theo của chúng ta thì sao?</font></font></p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sao chép</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:08 sáng</font></font></small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vâng, mọi thứ đều ổn. </font><font style="vertical-align: inherit;">Cuộc họp tiếp theo của chúng ta lúc 10 giờ sáng ngày mai</font></font></p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sao chép</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Này, tôi sẽ gặp một người bạn của tôi ở cửa hàng bách hóa. </font><font style="vertical-align: inherit;">Tôi phải mua một số quà cho cha mẹ của tôi 🎁.</font></font></p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sao chép</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:10 sáng</font></font></small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list right">
                                                    <div class="conversation-list">
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content">
                                                                    <p class="mb-0 ctext-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ồ điều đó thật tuyệt</font></font></p>
                                                                </div>
                                                                <div class="dropdown align-self-start message-box-drop">
                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="ri-more-2-fill"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sao chép</font></font></a>
                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="conversation-name"><small class="text-muted time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:12 sáng</font></font></small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- chat-list -->

                                                <li class="chat-list left">
                                                    <div class="conversation-list">
                                                        <div class="chat-avatar">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                                        </div>
                                                        <div class="user-chat-content">
                                                            <div class="ctext-wrap">
                                                                <div class="message-img mb-0">
                                                                    <div class="message-img-list">
                                                                        <div>
                                                                            <a class="popup-img d-inline-block" href="assets/images/small/img-1.jpg">
                                                                                <img src="assets/images/small/img-1.jpg" alt="" class="rounded border">
                                                                            </a>
                                                                        </div>
                                                                        <div class="message-img-link">
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item dropdown">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="ri-more-fill"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="assets/images/small/img-1.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <div class="message-img-list">
                                                                        <div>
                                                                            <a class="popup-img d-inline-block" href="assets/images/small/img-2.jpg">
                                                                                <img src="assets/images/small/img-2.jpg" alt="" class="rounded border">
                                                                            </a>
                                                                        </div>
                                                                        <div class="message-img-link">
                                                                            <ul class="list-inline mb-0">
                                                                                <li class="list-inline-item dropdown">
                                                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="ri-more-fill"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="assets/images/small/img-2.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đáp lại</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía trước</font></font></a>
                                                                                        <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dấu trang</font></font></a>
                                                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xóa bỏ</font></font></a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="conversation-name"><small class="text-muted time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09:30 sáng</font></font></small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- chat-list -->
                                            </ul>
                                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 648px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 246px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
                                    </div>
                                    <div class="border-top border-top-dashed">
                                        <div class="row g-2 mx-3 mt-2 mb-3">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control border-light bg-light" placeholder="Nhập tin nhắn...">
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-info"><span class="d-none d-sm-inline-block me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gửi</font></font></span> <i class="mdi mdi-send float-end"></i></button>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-4 col-lg-6">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tình trạng dự án</font></font></h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="dropdown-btn text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Mọi lúc</font></font><i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mọi lúc</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7 ngày qua</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30 ngày trước</font></font></a>
                                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">90 ngày qua</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div id="prjects-status" data-colors="[&quot;--vz-success&quot;, &quot;--vz-primary&quot;, &quot;--vz-warning&quot;, &quot;--vz-danger&quot;]" class="apex-charts" dir="ltr" style="min-height: 212.8px;"><div id="apexchartssgtgx8nc" class="apexcharts-canvas apexchartssgtgx8nc apexcharts-theme-light" style="width: 487px; height: 212.8px;"><svg id="SvgjsSvg1288" width="487" height="212.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1290" class="apexcharts-inner apexcharts-graphical" transform="translate(141.5, 0)"><defs id="SvgjsDefs1289"><clipPath id="gridRectMasksgtgx8nc"><rect id="SvgjsRect1292" width="210" height="228" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasksgtgx8nc"></clipPath><clipPath id="nonForecastMasksgtgx8nc"></clipPath><clipPath id="gridRectMarkerMasksgtgx8nc"><rect id="SvgjsRect1293" width="210" height="232" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1294" class="apexcharts-pie"><g id="SvgjsG1295" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1296" r="86.8390243902439" cx="103" cy="103" fill="transparent"></circle><g id="SvgjsG1297" class="apexcharts-slices"><g id="SvgjsG1298" class="apexcharts-series apexcharts-pie-series" seriesName="Completed" rel="1" data:realIndex="0"><path id="SvgjsPath1299" d="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 160.64719711426022 180.37374978023257 L 154.8824774028342 172.63637480220933 A 86.8390243902439 86.8390243902439 0 0 0 103 16.160975609756093 L 103 6.512195121951208 z" fill="rgba(19,197,107,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="143.31210191082803" data:startAngle="0" data:strokeWidth="0" data:value="125" data:pathOrig="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 160.64719711426022 180.37374978023257 L 154.8824774028342 172.63637480220933 A 86.8390243902439 86.8390243902439 0 0 0 103 16.160975609756093 L 103 6.512195121951208 z"></path></g><g id="SvgjsG1300" class="apexcharts-series apexcharts-pie-series" seriesName="InxProgress" rel="2" data:realIndex="1"><path id="SvgjsPath1301" d="M 160.64719711426022 180.37374978023257 A 96.48780487804879 96.48780487804879 0 0 1 83.82123957893091 197.56252766765306 L 85.73911562103783 188.10627490088774 A 86.8390243902439 86.8390243902439 0 0 0 154.8824774028342 172.63637480220933 L 160.64719711426022 180.37374978023257 z" fill="rgba(102,145,231,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="48.152866242038215" data:startAngle="143.31210191082803" data:strokeWidth="0" data:value="42" data:pathOrig="M 160.64719711426022 180.37374978023257 A 96.48780487804879 96.48780487804879 0 0 1 83.82123957893091 197.56252766765306 L 85.73911562103783 188.10627490088774 A 86.8390243902439 86.8390243902439 0 0 0 154.8824774028342 172.63637480220933 L 160.64719711426022 180.37374978023257 z"></path></g><g id="SvgjsG1302" class="apexcharts-series apexcharts-pie-series" seriesName="YetxtoxStart" rel="3" data:realIndex="2"><path id="SvgjsPath1303" d="M 83.82123957893091 197.56252766765306 A 96.48780487804879 96.48780487804879 0 0 1 8.634086897172239 123.12388964524445 L 18.070678207455032 121.11150068072 A 86.8390243902439 86.8390243902439 0 0 0 85.73911562103783 188.10627490088774 L 83.82123957893091 197.56252766765306 z" fill="rgba(232,188,82,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="66.49681528662418" data:startAngle="191.46496815286625" data:strokeWidth="0" data:value="58" data:pathOrig="M 83.82123957893091 197.56252766765306 A 96.48780487804879 96.48780487804879 0 0 1 8.634086897172239 123.12388964524445 L 18.070678207455032 121.11150068072 A 86.8390243902439 86.8390243902439 0 0 0 85.73911562103783 188.10627490088774 L 83.82123957893091 197.56252766765306 z"></path></g><g id="SvgjsG1304" class="apexcharts-series apexcharts-pie-series" seriesName="Cancelled" rel="4" data:realIndex="3"><path id="SvgjsPath1305" d="M 8.634086897172239 123.12388964524445 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98484373112863 16.160976932390057 A 86.8390243902439 86.8390243902439 0 0 0 18.070678207455032 121.11150068072 L 8.634086897172239 123.12388964524445 z" fill="rgba(237,94,94,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="102.03821656050957" data:startAngle="257.96178343949043" data:strokeWidth="0" data:value="89" data:pathOrig="M 8.634086897172239 123.12388964524445 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98484373112863 16.160976932390057 A 86.8390243902439 86.8390243902439 0 0 0 18.070678207455032 121.11150068072 L 8.634086897172239 123.12388964524445 z"></path></g></g></g></g><line id="SvgjsLine1306" x1="0" y1="0" x2="206" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1307" x1="0" y1="0" x2="206" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1291" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark" style="left: 141.055px; top: 128.109px;"><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex; background-color: rgb(232, 188, 82);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 188, 82); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa bắt đầu:</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2; display: none; background-color: rgb(232, 188, 82);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 188, 82); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa bắt đầu:</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3; display: none; background-color: rgb(232, 188, 82);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 188, 82); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa bắt đầu:</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4; display: none; background-color: rgb(232, 188, 82);"><span class="apexcharts-tooltip-marker" style="background-color: rgb(232, 188, 82); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa bắt đầu:</font></font></span><span class="apexcharts-tooltip-text-y-value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58</font></font></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                    <div class="mt-3">
                                        <div class="d-flex justify-content-center align-items-center mb-4">
                                            <h2 class="me-3 ff-secondary mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">258</font></font></h2>
                                            <div>
                                                <p class="text-muted mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số dự án</font></font></p>
                                                <p class="text-success fw-medium mb-0">
                                                    <span class="badge badge-soft-success p-1 rounded-circle"><i class="ri-arrow-right-up-line"></i></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+3 Mới
                                                </font></font></p>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                            <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-success align-middle me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Hoàn thành</font></font></p>
                                            <div>
                                                <span class="text-muted pe-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">125 Dự án </font></font></span>
                                                <span class="text-success fw-medium fs-12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15870 giờ</font></font></span>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                            <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-primary align-middle me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Trong tiến trình</font></font></p>
                                            <div>
                                                <span class="text-muted pe-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42 dự án </font></font></span>
                                                <span class="text-success fw-medium fs-12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">243 giờ</font></font></span>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                            <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-warning align-middle me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Chưa bắt đầu</font></font></p>
                                            <div>
                                                <span class="text-muted pe-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">58 dự án </font></font></span>
                                                <span class="text-success fw-medium fs-12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~ 2050 giờ</font></font></span>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex justify-content-between py-2">
                                            <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-danger align-middle me-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Đã hủy</font></font></p>
                                            <div>
                                                <span class="text-muted pe-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">89 dự án </font></font></span>
                                                <span class="text-success fw-medium fs-12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">~ 900 giờ</font></font></span>
                                            </div>
                                        </div><!-- end -->
                                    </div>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                </div>

@endsection
