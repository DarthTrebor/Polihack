@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column">
                        <!--begin::Title-->
                        <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <div class="d-flex align-items-center font-weight-bold my-2">
                            <!--begin::Item-->
                            <a href="#" class="opacity-75 hover-opacity-100">
                                <i class="flaticon2-shelter text-white icon-1x"></i>
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                            <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Latest Updated</a>
                            <!--end::Item-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Reports</a>
                    <!--end::Button-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Quick actions">
                        <a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover py-5">
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-drop"></i>
														</span>
                                        <span class="navi-text">New Group</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-list-3"></i>
														</span>
                                        <span class="navi-text">Contacts</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-rocket-1"></i>
														</span>
                                        <span class="navi-text">Groups</span>
                                        <span class="navi-link-badge">
															<span class="label label-light-primary label-inline font-weight-bold">new</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
                                        <span class="navi-text">Calls</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-gear"></i>
														</span>
                                        <span class="navi-text">Settings</span>
                                    </a>
                                </li>
                                <li class="navi-separator my-3"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-magnifier-tool"></i>
														</span>
                                        <span class="navi-text">Help</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-bell-2"></i>
														</span>
                                        <span class="navi-text">Privacy</span>
                                        <span class="navi-link-badge">
															<span class="label label-light-danger label-rounded font-weight-bold">5</span>
														</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Dashboard-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Tiles Widget 1-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <div class="card-title">
                                    <div class="card-label">
                                        <div class="font-weight-bolder">Weekly Sales Stats</div>
                                        <div class="font-size-sm text-muted mt-2">890,344 Sales</div>
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column px-0" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="kt_tiles_widget_1_chart" data-color="danger" style="height: 125px; min-height: 125px;"><div id="apexcharts3exx4rpk" class="apexcharts-canvas apexcharts3exx4rpk apexcharts-theme-light" style="width: 474px; height: 125px;"><svg id="SvgjsSvg1159" width="474" height="125" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1161" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1160"><clipPath id="gridRectMask3exx4rpk"><rect id="SvgjsRect1164" width="481" height="128" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask3exx4rpk"><rect id="SvgjsRect1165" width="478" height="129" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1170" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1171" stop-opacity="1" stop-color="rgba(255,242,243,1)" offset="0.25"></stop><stop id="SvgjsStop1172" stop-opacity="0.2" stop-color="rgba(255,226,229,0.2)" offset="0.5"></stop><stop id="SvgjsStop1173" stop-opacity="0.2" stop-color="rgba(255,226,229,0.2)" offset="1"></stop></linearGradient></defs><g id="SvgjsG1176" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1177" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1179" class="apexcharts-grid"><g id="SvgjsG1180" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1182" x1="0" y1="0" x2="474" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1183" x1="0" y1="12.5" x2="474" y2="12.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1184" x1="0" y1="25" x2="474" y2="25" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1185" x1="0" y1="37.5" x2="474" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1186" x1="0" y1="50" x2="474" y2="50" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1187" x1="0" y1="62.5" x2="474" y2="62.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1188" x1="0" y1="75" x2="474" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1189" x1="0" y1="87.5" x2="474" y2="87.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1190" x1="0" y1="100" x2="474" y2="100" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1191" x1="0" y1="112.5" x2="474" y2="112.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1192" x1="0" y1="125" x2="474" y2="125" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1181" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1194" x1="0" y1="125" x2="474" y2="125" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1193" x1="0" y1="1" x2="0" y2="125" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1166" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1167" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1174" d="M 0 125L 0 57.432432432432435C 15.081818181818178 57.432432432432435 28.009090909090908 50.67567567567568 43.090909090909086 50.67567567567568C 58.172727272727265 50.67567567567568 71.1 23.648648648648646 86.18181818181817 23.648648648648646C 101.26363636363637 23.648648648648646 114.19090909090909 30.405405405405403 129.27272727272728 30.405405405405403C 144.35454545454544 30.405405405405403 157.28181818181818 40.54054054054053 172.36363636363635 40.54054054054053C 187.44545454545454 40.54054054054053 200.37272727272725 37.16216216216216 215.45454545454544 37.16216216216216C 230.53636363636363 37.16216216216216 243.46363636363637 23.648648648648646 258.54545454545456 23.648648648648646C 273.6272727272727 23.648648648648646 286.55454545454546 30.405405405405403 301.6363636363636 30.405405405405403C 316.7181818181818 30.405405405405403 329.6454545454545 50.67567567567568 344.7272727272727 50.67567567567568C 359.80909090909086 50.67567567567568 372.73636363636365 43.91891891891892 387.8181818181818 43.91891891891892C 402.9 43.91891891891892 415.8272727272727 40.54054054054053 430.9090909090909 40.54054054054053C 445.99090909090904 40.54054054054053 458.91818181818184 6.756756756756758 474 6.756756756756758C 474 6.756756756756758 474 6.756756756756758 474 125M 474 6.756756756756758z" fill="url(#SvgjsLinearGradient1170)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3exx4rpk)" pathTo="M 0 125L 0 57.432432432432435C 15.081818181818178 57.432432432432435 28.009090909090908 50.67567567567568 43.090909090909086 50.67567567567568C 58.172727272727265 50.67567567567568 71.1 23.648648648648646 86.18181818181817 23.648648648648646C 101.26363636363637 23.648648648648646 114.19090909090909 30.405405405405403 129.27272727272728 30.405405405405403C 144.35454545454544 30.405405405405403 157.28181818181818 40.54054054054053 172.36363636363635 40.54054054054053C 187.44545454545454 40.54054054054053 200.37272727272725 37.16216216216216 215.45454545454544 37.16216216216216C 230.53636363636363 37.16216216216216 243.46363636363637 23.648648648648646 258.54545454545456 23.648648648648646C 273.6272727272727 23.648648648648646 286.55454545454546 30.405405405405403 301.6363636363636 30.405405405405403C 316.7181818181818 30.405405405405403 329.6454545454545 50.67567567567568 344.7272727272727 50.67567567567568C 359.80909090909086 50.67567567567568 372.73636363636365 43.91891891891892 387.8181818181818 43.91891891891892C 402.9 43.91891891891892 415.8272727272727 40.54054054054053 430.9090909090909 40.54054054054053C 445.99090909090904 40.54054054054053 458.91818181818184 6.756756756756758 474 6.756756756756758C 474 6.756756756756758 474 6.756756756756758 474 125M 474 6.756756756756758z" pathFrom="M -1 125L -1 125L 43.090909090909086 125L 86.18181818181817 125L 129.27272727272728 125L 172.36363636363635 125L 215.45454545454544 125L 258.54545454545456 125L 301.6363636363636 125L 344.7272727272727 125L 387.8181818181818 125L 430.9090909090909 125L 474 125"></path><path id="SvgjsPath1175" d="M 0 57.432432432432435C 15.081818181818178 57.432432432432435 28.009090909090908 50.67567567567568 43.090909090909086 50.67567567567568C 58.172727272727265 50.67567567567568 71.1 23.648648648648646 86.18181818181817 23.648648648648646C 101.26363636363637 23.648648648648646 114.19090909090909 30.405405405405403 129.27272727272728 30.405405405405403C 144.35454545454544 30.405405405405403 157.28181818181818 40.54054054054053 172.36363636363635 40.54054054054053C 187.44545454545454 40.54054054054053 200.37272727272725 37.16216216216216 215.45454545454544 37.16216216216216C 230.53636363636363 37.16216216216216 243.46363636363637 23.648648648648646 258.54545454545456 23.648648648648646C 273.6272727272727 23.648648648648646 286.55454545454546 30.405405405405403 301.6363636363636 30.405405405405403C 316.7181818181818 30.405405405405403 329.6454545454545 50.67567567567568 344.7272727272727 50.67567567567568C 359.80909090909086 50.67567567567568 372.73636363636365 43.91891891891892 387.8181818181818 43.91891891891892C 402.9 43.91891891891892 415.8272727272727 40.54054054054053 430.9090909090909 40.54054054054053C 445.99090909090904 40.54054054054053 458.91818181818184 6.756756756756758 474 6.756756756756758" fill="none" fill-opacity="1" stroke="#f64e60" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3exx4rpk)" pathTo="M 0 57.432432432432435C 15.081818181818178 57.432432432432435 28.009090909090908 50.67567567567568 43.090909090909086 50.67567567567568C 58.172727272727265 50.67567567567568 71.1 23.648648648648646 86.18181818181817 23.648648648648646C 101.26363636363637 23.648648648648646 114.19090909090909 30.405405405405403 129.27272727272728 30.405405405405403C 144.35454545454544 30.405405405405403 157.28181818181818 40.54054054054053 172.36363636363635 40.54054054054053C 187.44545454545454 40.54054054054053 200.37272727272725 37.16216216216216 215.45454545454544 37.16216216216216C 230.53636363636363 37.16216216216216 243.46363636363637 23.648648648648646 258.54545454545456 23.648648648648646C 273.6272727272727 23.648648648648646 286.55454545454546 30.405405405405403 301.6363636363636 30.405405405405403C 316.7181818181818 30.405405405405403 329.6454545454545 50.67567567567568 344.7272727272727 50.67567567567568C 359.80909090909086 50.67567567567568 372.73636363636365 43.91891891891892 387.8181818181818 43.91891891891892C 402.9 43.91891891891892 415.8272727272727 40.54054054054053 430.9090909090909 40.54054054054053C 445.99090909090904 40.54054054054053 458.91818181818184 6.756756756756758 474 6.756756756756758" pathFrom="M -1 125L -1 125L 43.090909090909086 125L 86.18181818181817 125L 129.27272727272728 125L 172.36363636363635 125L 215.45454545454544 125L 258.54545454545456 125L 301.6363636363636 125L 344.7272727272727 125L 387.8181818181818 125L 430.9090909090909 125L 474 125"></path><g id="SvgjsG1168" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1200" r="0" cx="0" cy="0" class="apexcharts-marker wanhommgz no-pointer-events" stroke="#f64e60" fill="#ffe2e5" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1169" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1195" x1="0" y1="0" x2="474" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1196" x1="0" y1="0" x2="474" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1197" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1198" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1199" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1178" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1162" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 226, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                                <!--begin::Items-->
                                <div class="flex-grow-1 card-spacer-x">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50">
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Authors</a>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Ricky Hunt, Sandra Trepp</div>
                                            </div>
                                        </div>
                                        <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+105$</div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <img src="assets/media/svg/misc/015-telegram.svg" alt="" class="h-50">
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Bestsellers</a>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">Pitstop Email Marketing</div>
                                            </div>
                                        </div>
                                        <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+60$</div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <img src="assets/media/svg/misc/003-puzzle.svg" alt="" class="h-50">
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Engagement</a>
                                                <div class="font-size-sm text-muted font-weight-bold mt-1">KT.com solution provider</div>
                                            </div>
                                        </div>
                                        <div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+75$</div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 475px; height: 384px;"></div></div><div class="contract-trigger"></div></div></div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tiles Widget 1-->
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-3">
                                <!--begin::Tiles Widget 3-->
                                <div class="card card-custom bgi-no-repeat bgi-no-repeat bgi-size-cover gutter-b" style="height: 150px; background-image: url(assets/media/bg/bg-9.jpg)">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column">
                                        <!--begin::Title-->
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bolder font-size-h3">Properties</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tiles Widget 3-->
                            </div>
                            <div class="col-xl-9">
                                <!--begin::Mixed Widget 10-->
                                <div class="card card-custom gutter-b" style="height: 150px">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="mr-2">
                                            <h3 class="font-weight-bolder">Create CRM Reports</h3>
                                            <div class="text-dark-50 font-size-lg mt-2">Generate the latest CRM Report</div>
                                        </div>
                                        <a href="#" class="btn btn-primary font-weight-bold py-3 px-6">Start Now</a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 10-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin::Tiles Widget 13-->
                                <div class="card card-custom bgi-no-repeat gutter-b" style="height: 175px; background-color: #663259; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url(assets/media/svg/patterns/taieri.svg)">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex align-items-center">
                                        <div>
                                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Create SaaS
                                                <br>Based Reports</h3>
                                            <a href="#" class="btn btn-success font-weight-bold px-6 py-3">Create Report</a>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tiles Widget 13-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Tiles Widget 11-->
                                        <div class="card card-custom bg-primary gutter-b" style="height: 150px">
                                            <div class="card-body">
																<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
																			<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                                <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3">790</div>
                                                <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1">New Products</a>
                                            </div>
                                        </div>
                                        <!--end::Tiles Widget 11-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Tiles Widget 12-->
                                        <div class="card card-custom gutter-b" style="height: 150px">
                                            <div class="card-body">
																<span class="svg-icon svg-icon-3x svg-icon-success">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																			<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                                <div class="text-dark font-weight-bolder font-size-h2 mt-3">8,600</div>
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">New Customers</a>
                                            </div>
                                        </div>
                                        <!--end::Tiles Widget 12-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <!--begin::Mixed Widget 14-->
                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch" style="background-image: url(assets/media/stock-600x600/img-16.jpg)">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column align-items-start justify-content-start">
                                        <div class="p-1 flex-grow-1">
                                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Create Reports
                                                <br>With App</h3>
                                        </div>
                                        <a href="#" class="btn btn-link btn-link-warning font-weight-bold">Create Report
                                            <span class="svg-icon svg-icon-lg svg-icon-warning">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																	<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																</g>
															</svg>
                                                <!--end::Svg Icon-->
														</span></a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 14-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-6 col-xxl-4">
                        <!--begin::Mixed Widget 4-->
                        <div class="card card-custom bg-radial-gradient-danger gutter-b card-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title font-weight-bolder text-white">Sales Progress</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header pb-1">
                                                    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
                                                        <span class="navi-text">Order</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-calendar-8"></i>
																		</span>
                                                        <span class="navi-text">Event</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-graph-1"></i>
																		</span>
                                                        <span class="navi-text">Report</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                        <span class="navi-text">Post</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-writing"></i>
																		</span>
                                                        <span class="navi-text">File</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column p-0" style="position: relative;">
                                <!--begin::Chart-->
                                <div id="kt_mixed_widget_6_chart" style="height: 200px; min-height: 200px;"><div id="apexchartsd7ckkcmn" class="apexcharts-canvas apexchartsd7ckkcmn apexcharts-theme-light" style="width: 474px; height: 200px;"><svg id="SvgjsSvg1103" width="474" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1105" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs1104"><linearGradient id="SvgjsLinearGradient1108" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1109" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1110" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1111" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskd7ckkcmn"><rect id="SvgjsRect1113" width="439" height="201" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskd7ckkcmn"><rect id="SvgjsRect1114" width="438" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1112" width="9.3" height="200" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1108)" class="apexcharts-xcrosshairs" y2="200" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1134" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1135" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1137" class="apexcharts-grid"><g id="SvgjsG1138" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1140" x1="0" y1="0" x2="434" y2="0" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1141" x1="0" y1="20" x2="434" y2="20" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1142" x1="0" y1="40" x2="434" y2="40" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1143" x1="0" y1="60" x2="434" y2="60" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1144" x1="0" y1="80" x2="434" y2="80" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1145" x1="0" y1="100" x2="434" y2="100" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1146" x1="0" y1="120" x2="434" y2="120" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1147" x1="0" y1="140" x2="434" y2="140" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1148" x1="0" y1="160" x2="434" y2="160" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1149" x1="0" y1="180" x2="434" y2="180" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1150" x1="0" y1="200" x2="434" y2="200" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1139" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1152" x1="0" y1="200" x2="434" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1151" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1115" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1116" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1118" d="M 21.7 200L 21.7 131.825Q 25.85 128.17499999999998 30 131.825L 30 131.825L 30 200L 30 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 21.7 200L 21.7 131.825Q 25.85 128.17499999999998 30 131.825L 30 131.825L 30 200L 30 200z" pathFrom="M 21.7 200L 21.7 200L 30 200L 30 200L 30 200L 21.7 200" cy="130" cx="83.2" j="0" val="35" barHeight="70" barWidth="9.3"></path><path id="SvgjsPath1119" d="M 83.7 200L 83.7 71.825Q 87.85000000000001 68.175 92 71.825L 92 71.825L 92 200L 92 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 83.7 200L 83.7 71.825Q 87.85000000000001 68.175 92 71.825L 92 71.825L 92 200L 92 200z" pathFrom="M 83.7 200L 83.7 200L 92 200L 92 200L 92 200L 83.7 200" cy="70" cx="145.2" j="1" val="65" barHeight="130" barWidth="9.3"></path><path id="SvgjsPath1120" d="M 145.7 200L 145.7 51.825Q 149.85 48.175000000000004 154 51.825L 154 51.825L 154 200L 154 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 145.7 200L 145.7 51.825Q 149.85 48.175000000000004 154 51.825L 154 51.825L 154 200L 154 200z" pathFrom="M 145.7 200L 145.7 200L 154 200L 154 200L 154 200L 145.7 200" cy="50" cx="207.2" j="2" val="75" barHeight="150" barWidth="9.3"></path><path id="SvgjsPath1121" d="M 207.7 200L 207.7 91.825Q 211.85 88.175 216 91.825L 216 91.825L 216 200L 216 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 207.7 200L 207.7 91.825Q 211.85 88.175 216 91.825L 216 91.825L 216 200L 216 200z" pathFrom="M 207.7 200L 207.7 200L 216 200L 216 200L 216 200L 207.7 200" cy="90" cx="269.2" j="3" val="55" barHeight="110" barWidth="9.3"></path><path id="SvgjsPath1122" d="M 269.7 200L 269.7 111.825Q 273.84999999999997 108.175 278 111.825L 278 111.825L 278 200L 278 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 269.7 200L 269.7 111.825Q 273.84999999999997 108.175 278 111.825L 278 111.825L 278 200L 278 200z" pathFrom="M 269.7 200L 269.7 200L 278 200L 278 200L 278 200L 269.7 200" cy="110" cx="331.2" j="4" val="45" barHeight="90" barWidth="9.3"></path><path id="SvgjsPath1123" d="M 331.7 200L 331.7 81.825Q 335.84999999999997 78.175 340 81.825L 340 81.825L 340 200L 340 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 331.7 200L 331.7 81.825Q 335.84999999999997 78.175 340 81.825L 340 81.825L 340 200L 340 200z" pathFrom="M 331.7 200L 331.7 200L 340 200L 340 200L 340 200L 331.7 200" cy="80" cx="393.2" j="5" val="60" barHeight="120" barWidth="9.3"></path><path id="SvgjsPath1124" d="M 393.7 200L 393.7 91.825Q 397.84999999999997 88.175 402 91.825L 402 91.825L 402 200L 402 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 393.7 200L 393.7 91.825Q 397.84999999999997 88.175 402 91.825L 402 91.825L 402 200L 402 200z" pathFrom="M 393.7 200L 393.7 200L 402 200L 402 200L 402 200L 393.7 200" cy="90" cx="455.2" j="6" val="55" barHeight="110" barWidth="9.3"></path></g><g id="SvgjsG1125" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1127" d="M 31 200L 31 121.825Q 35.15 118.175 39.3 121.825L 39.3 121.825L 39.3 200L 39.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 31 200L 31 121.825Q 35.15 118.175 39.3 121.825L 39.3 121.825L 39.3 200L 39.3 200z" pathFrom="M 31 200L 31 200L 39.3 200L 39.3 200L 39.3 200L 31 200" cy="120" cx="92.5" j="0" val="40" barHeight="80" barWidth="9.3"></path><path id="SvgjsPath1128" d="M 93 200L 93 61.825Q 97.15 58.175000000000004 101.3 61.825L 101.3 61.825L 101.3 200L 101.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 93 200L 93 61.825Q 97.15 58.175000000000004 101.3 61.825L 101.3 61.825L 101.3 200L 101.3 200z" pathFrom="M 93 200L 93 200L 101.3 200L 101.3 200L 101.3 200L 93 200" cy="60" cx="154.5" j="1" val="70" barHeight="140" barWidth="9.3"></path><path id="SvgjsPath1129" d="M 155 200L 155 41.825Q 159.15 38.175000000000004 163.3 41.825L 163.3 41.825L 163.3 200L 163.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 155 200L 155 41.825Q 159.15 38.175000000000004 163.3 41.825L 163.3 41.825L 163.3 200L 163.3 200z" pathFrom="M 155 200L 155 200L 163.3 200L 163.3 200L 163.3 200L 155 200" cy="40" cx="216.5" j="2" val="80" barHeight="160" barWidth="9.3"></path><path id="SvgjsPath1130" d="M 217 200L 217 81.825Q 221.15 78.175 225.3 81.825L 225.3 81.825L 225.3 200L 225.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 217 200L 217 81.825Q 221.15 78.175 225.3 81.825L 225.3 81.825L 225.3 200L 225.3 200z" pathFrom="M 217 200L 217 200L 225.3 200L 225.3 200L 225.3 200L 217 200" cy="80" cx="278.5" j="3" val="60" barHeight="120" barWidth="9.3"></path><path id="SvgjsPath1131" d="M 279 200L 279 101.825Q 283.15 98.175 287.3 101.825L 287.3 101.825L 287.3 200L 287.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 279 200L 279 101.825Q 283.15 98.175 287.3 101.825L 287.3 101.825L 287.3 200L 287.3 200z" pathFrom="M 279 200L 279 200L 287.3 200L 287.3 200L 287.3 200L 279 200" cy="100" cx="340.5" j="4" val="50" barHeight="100" barWidth="9.3"></path><path id="SvgjsPath1132" d="M 341 200L 341 71.825Q 345.15 68.175 349.3 71.825L 349.3 71.825L 349.3 200L 349.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 341 200L 341 71.825Q 345.15 68.175 349.3 71.825L 349.3 71.825L 349.3 200L 349.3 200z" pathFrom="M 341 200L 341 200L 349.3 200L 349.3 200L 349.3 200L 341 200" cy="70" cx="402.5" j="5" val="65" barHeight="130" barWidth="9.3"></path><path id="SvgjsPath1133" d="M 403 200L 403 81.825Q 407.15 78.175 411.3 81.825L 411.3 81.825L 411.3 200L 411.3 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskd7ckkcmn)" pathTo="M 403 200L 403 81.825Q 407.15 78.175 411.3 81.825L 411.3 81.825L 411.3 200L 411.3 200z" pathFrom="M 403 200L 403 200L 411.3 200L 411.3 200L 411.3 200L 403 200" cy="80" cx="464.5" j="6" val="60" barHeight="120" barWidth="9.3"></path></g><g id="SvgjsG1117" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1126" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1153" x1="0" y1="0" x2="434" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1154" x1="0" y1="0" x2="434" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1155" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1156" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1157" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1136" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1106" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-spacer bg-white card-rounded flex-grow-1">
                                    <!--begin::Row-->
                                    <div class="row m-0">
                                        <div class="col px-8 py-6 mr-8">
                                            <div class="font-size-sm text-muted font-weight-bold">Average Sale</div>
                                            <div class="font-size-h4 font-weight-bolder">$650</div>
                                        </div>
                                        <div class="col px-8 py-6">
                                            <div class="font-size-sm text-muted font-weight-bold">Commission</div>
                                            <div class="font-size-h4 font-weight-bolder">$233,600</div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row m-0">
                                        <div class="col px-8 py-6 mr-8">
                                            <div class="font-size-sm text-muted font-weight-bold">Annual Taxes</div>
                                            <div class="font-size-h4 font-weight-bolder">$29,004</div>
                                        </div>
                                        <div class="col px-8 py-6">
                                            <div class="font-size-sm text-muted font-weight-bold">Annual Income</div>
                                            <div class="font-size-h4 font-weight-bolder">$1,480,00</div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 475px; height: 401px;"></div></div><div class="contract-trigger"></div></div></div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 4-->
                    </div>
                    <div class="col-lg-6 col-xxl-8">
                        <!--begin::Advance Table Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0 py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
                                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-success font-weight-bolder font-size-sm">
													<span class="svg-icon svg-icon-md svg-icon-white">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24"></polygon>
																<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
															</g>
														</svg>
                                                        <!--end::Svg Icon-->
													</span>Add New Member</a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-0">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
                                        <thead>
                                        <tr class="text-left">
                                            <th class="pl-0" style="width: 20px">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th class="pr-0" style="width: 50px">authors</th>
                                            <th style="min-width: 200px"></th>
                                            <th style="min-width: 150px">company</th>
                                            <th style="min-width: 150px">progress</th>
                                            <th class="pr-0 text-right" style="min-width: 150px">action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="pl-0">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pr-0">
                                                <div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
																		</span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                <span class="text-muted font-weight-bold text-muted d-block">HTML, JS, ReactJS</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pr-0 text-right">
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pr-0">
                                                <div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="">
																		</span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                <span class="text-muted font-weight-bold text-muted d-block">C#, ASP.NET, MS SQL</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                                                <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pr-0 text-right">
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pr-0">
                                                <div class="symbol symbol-50 symbol-lightv mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="">
																		</span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                <span class="text-muted font-weight-bold text-muted d-block">PHP, Laravel, VueJS</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                                                <span class="text-muted font-weight-bold">Transportation</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pr-0 text-right">
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0">
                                                <label class="checkbox checkbox-lg checkbox-inline">
                                                    <input type="checkbox" value="1">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td class="pr-0">
                                                <div class="symbol symbol-50 symbol-light mt-1">
																		<span class="symbol-label">
																			<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="">
																		</span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                <span class="text-muted font-weight-bold text-muted d-block">Python, PostgreSQL, ReactJS</span>
                                            </td>
                                            <td>
                                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                                                <span class="text-muted font-weight-bold">Insurance</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pr-0 text-right">
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																					<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																					<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
																		<span class="svg-icon svg-icon-md svg-icon-primary">
																			<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																					<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
																				</g>
																			</svg>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Advance Table Widget 1-->
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 pb-5">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center pr-2 mb-6">
                                        <span class="text-muted font-weight-bold font-size-lg flex-grow-1">7 Hours Ago</span>
                                        <div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="">
															</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">PitStop - Multiple Email
                                        <br>Generator</a>
                                    <!--end::Link-->
                                    <!--begin::Desc-->
                                    <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Pitstop creates quick email campaigns.
                                        <br>We help to strengthen your brand
                                        <br>for your every purpose.</p>
                                    <!--end::Desc-->
                                </div>
                                <!--begin::Team-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 10-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 11-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 pb-5">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center pr-2 mb-6">
                                        <span class="text-muted font-weight-bold font-size-lg flex-grow-1">2 Days Ago</span>
                                        <div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="">
															</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                    <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">Craft - ReactJS Admin
                                        <br>Theme</a>
                                    <!--begin::Desc-->
                                    <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Craft uses the latest and greatest frameworks
                                        <br>with ReactJS for complete modernization and
                                        <br>future proofing your business operations
                                        <br>and sales opportunities</p>
                                    <!--end::Desc-->
                                </div>
                                <!--begin::Team-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin: Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/005-girl-2.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 11-->
                    </div>
                    <div class="col-xl-4">
                        <!--begin::Mixed Widget 12-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 pb-5">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center pr-2 mb-6">
                                        <span class="text-muted font-weight-bold font-size-lg flex-grow-1">5 Weeks Ago</span>
                                        <div class="symbol symbol-50">
															<span class="symbol-label bg-light-light">
																<img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="">
															</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                    <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">KT.com - High Quality
                                        <br>Templates</a>
                                    <!--begin::Desc-->
                                    <p class="text-dark-50 font-weight-normal font-size-lg mt-6">Easy to use, incredibly flexible and secure
                                        <br>with in-depth documentation that outlines
                                        <br>everything for you</p>
                                    <!--end::Desc-->
                                </div>
                                <!--begin::Team-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light mr-3">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                    <!--begin::Pic-->
                                    <a href="#" class="symbol symbol-45 symbol-light">
                                        <div class="symbol-label">
                                            <img src="assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt="">
                                        </div>
                                    </a>
                                    <!--end::Pic-->
                                </div>
                                <!--end::Team-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 12-->
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row">
                    <div class="col-lg-6">
                        <!--begin::List Widget 10-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Notifications</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Naviigation-->
                                            <ul class="navi">
                                                <li class="navi-header font-weight-bold py-5">
                                                    <span class="font-size-lg">Add New:</span>
                                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
                                                        <span class="navi-text">Order</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-calendar-8"></i>
																		</span>
                                                        <span class="navi-text">Members</span>
                                                        <span class="navi-label">
																			<span class="label label-light-danger label-rounded font-weight-bold">3</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-telegram-logo"></i>
																		</span>
                                                        <span class="navi-text">Project</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="navi-icon flaticon2-new-email"></i>
																		</span>
                                                        <span class="navi-text">Record</span>
                                                        <span class="navi-label">
																			<span class="label label-light-success label-rounded font-weight-bold">5</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer pt-5 pb-4">
                                                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                                </li>
                                            </ul>
                                            <!--end::Naviigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Item-->
                                <div class="mb-6">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Checkbox-->
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Daily Standup Meeting</a>
                                                <!--end::Title-->
                                                <!--begin::Data-->
                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                <!--end::Data-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Label-->
                                            <span class="label label-lg label-light-primary label-inline font-weight-bold py-4">Approved</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-6">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Checkbox-->
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Group Town Hall Meet-up with showcase</a>
                                                <!--end::Title-->
                                                <!--begin::Data-->
                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                <!--end::Data-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Label-->
                                            <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-6">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Checkbox-->
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Next sprint planning and estimations</a>
                                                <!--end::Title-->
                                                <!--begin::Data-->
                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                <!--end::Data-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Label-->
                                            <span class="label label-lg label-light-success label-inline font-weight-bold py-4">Success</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-6">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Checkbox-->
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint delivery and project deployment</a>
                                                <!--end::Title-->
                                                <!--begin::Data-->
                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                <!--end::Data-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Label-->
                                            <span class="label label-lg label-light-danger label-inline font-weight-bold py-4">Rejected</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end: Item-->
                                <!--begin: Item-->
                                <div class="">
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Checkbox-->
                                        <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                                            <input type="checkbox" value="1">
                                            <span></span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Section-->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column align-items-cente py-2 w-75">
                                                <!--begin::Title-->
                                                <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Data analytics research showcase</a>
                                                <!--end::Title-->
                                                <!--begin::Data-->
                                                <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                <!--end::Data-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Label-->
                                            <span class="label label-lg label-light-warning label-inline font-weight-bold py-4">In Progress</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end: Item-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end: Card-->
                        <!--end: List Widget 10-->
                    </div>
                    <div class="col-lg-6">
                        <!--begin::List Widget 11-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Header-->
                            <div class="card-header border-0">
                                <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                                <div class="card-toolbar">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-ver"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                        <span class="navi-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                        <span class="navi-text">Contacts</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                        <span class="navi-text">Groups</span>
                                                        <span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                        <span class="navi-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                        <span class="navi-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                        <span class="navi-text">Privacy</span>
                                                        <span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-0">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-9 bg-light-warning rounded p-5">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-warning mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
																	<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Group lunch celebration</a>
                                        <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-success mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																	<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Home navigation optimization</a>
                                        <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-9">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-danger mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
																	<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Rebrand strategy planning</a>
                                        <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center bg-light-info rounded p-5">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-info mr-5">
														<span class="svg-icon svg-icon-lg">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"></rect>
																	<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)"></path>
																	<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)"></path>
																	<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)"></path>
																	<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)"></path>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Product goals strategy meet-up</a>
                                        <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Lable-->
                                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                                    <!--end::Lable-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::List Widget 11-->
                    </div>
                </div>
                <!--end::Row-->
                <!--end::Dashboard-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
