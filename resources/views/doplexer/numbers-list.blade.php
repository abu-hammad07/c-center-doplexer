<?php $page = 'numbers-list'; ?>
@section('directry')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Channels & Number</a></li>
            <li class="breadcrumb-item active" aria-current="page">Numbers</li>
        </ol>
    </nav>
@endsection
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">

            <div class="page-header settings-pg-header">


                <div class="add-item d-flex">
                    {{--  <div class="dash-widget">
                        <div class="dash-widgetimg">
                            <span>
                                <img src="{{ URL::asset('/build/img/icons/dash1.svg') }}" alt="img">
                            </span>
                        </div>
                    </div>  --}}
                    <div class="me-3 dash-widgetimg">
                        <svg width="70px" height="70px" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="bepo-pictogram-svg _2bvj2j0">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.022 12.7999C11.1249 12.7999 10.4 13.5286 10.4 14.3999V17.5199C10.4 28.5912 19.4808 37.6 30.6716 37.6H33.578C34.4752 37.6 35.2 36.8712 35.2 35.9999V31.3199C35.2 30.4486 34.4752 29.7199 33.578 29.7199H28.6129C28.2238 29.7199 27.8191 29.8727 27.4805 30.2082L25.5429 32.1282C25.1164 32.5508 24.5311 32.7199 24.011 32.7199C24.0045 32.7199 23.9978 32.7199 23.9909 32.7199C23.8858 32.7201 23.7354 32.7202 23.5779 32.6942C23.3904 32.6633 23.2233 32.6024 23.0504 32.5168C19.7355 30.8744 17.0717 28.1033 15.4253 24.8403C15.0181 24.0334 15.2231 23.0618 15.8186 22.4717L17.9176 20.3917L17.9632 20.3579C18.1723 20.2025 18.367 19.7729 18.367 19.3199V14.3999C18.367 13.5286 17.6422 12.7999 16.745 12.7999H12.022ZM8.80005 14.3999C8.80005 12.6312 10.255 11.2 12.022 11.2H16.745C18.512 11.2 19.967 12.6312 19.967 14.3999V19.3199C19.967 20.0502 19.6901 21.0323 18.9679 21.6034L16.9448 23.6082C16.8137 23.7381 16.7765 23.9665 16.8537 24.1196C18.3558 27.0965 20.7783 29.6055 23.7607 31.0831C23.7978 31.1015 23.8184 31.1094 23.8278 31.1126C23.8355 31.1152 23.8377 31.1155 23.8386 31.1156C23.8412 31.1161 23.8514 31.1176 23.8788 31.1187C23.9098 31.1198 23.9466 31.12 24.011 31.12C24.2176 31.12 24.3589 31.049 24.4168 30.9917L26.3544 29.0717C26.9846 28.4472 27.7909 28.12 28.6129 28.12H33.578C35.345 28.12 36.8 29.5512 36.8 31.3199V35.9999C36.8 37.7686 35.345 39.1999 33.578 39.1999H30.6716C18.611 39.1999 8.80005 29.4886 8.80005 17.5199V14.3999Z"
                                fill="#1B1B1A" class="bepo-2-pictogram--color-primary"></path>
                            <path
                                d="M24 10.7999C24.6627 10.7999 25.2 10.2626 25.2 9.5999C25.2 8.93716 24.6627 8.3999 24 8.3999C23.3372 8.3999 22.8 8.93716 22.8 9.5999C22.8 10.2626 23.3372 10.7999 24 10.7999Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M28.8 8.80186C28.3593 8.80186 28.002 9.15913 28.002 9.59986C28.002 10.0406 28.3593 10.3979 28.8 10.3979H38.4C38.8407 10.3979 39.198 10.0406 39.198 9.59986C39.198 9.15913 38.8407 8.80186 38.4 8.80186H28.8Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M28.8 13.6019C28.3593 13.6019 28.002 13.9591 28.002 14.3999C28.002 14.8406 28.3593 15.1979 28.8 15.1979H38.4C38.8407 15.1979 39.198 14.8406 39.198 14.3999C39.198 13.9591 38.8407 13.6019 38.4 13.6019H28.8Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M28.002 19.1999C28.002 18.7591 28.3593 18.4019 28.8 18.4019H38.4C38.8407 18.4019 39.198 18.7591 39.198 19.1999C39.198 19.6406 38.8407 19.9979 38.4 19.9979H28.8C28.3593 19.9979 28.002 19.6406 28.002 19.1999Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M25.2 14.3999C25.2 15.0626 24.6627 15.5999 24 15.5999C23.3372 15.5999 22.8 15.0626 22.8 14.3999C22.8 13.7372 23.3372 13.1999 24 13.1999C24.6627 13.1999 25.2 13.7372 25.2 14.3999Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                            <path
                                d="M24 20.3999C24.6627 20.3999 25.2 19.8626 25.2 19.1999C25.2 18.5372 24.6627 17.9999 24 17.9999C23.3372 17.9999 22.8 18.5372 22.8 19.1999C22.8 19.8626 23.3372 20.3999 24 20.3999Z"
                                fill="#FC6423" class="bepo-2-pictogram--color-secondary"></path>
                        </svg>
                    </div>
                    <div class="page-title mt-2">
                        <h1>Numbers</h1>
                        <h6>Buy and manage phone numbers used for sending and receiving communications.
                            Learn more</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <button type="button" class="btn  btn-square btn-primary">Import Number</button>
                    </li>
                    <li>
                        <button type="button" class="btn  btn-square btn-secondary">Buy Number</button>
                    </li>
                    {{--  <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw"
                                class="feather-rotate-ccw"></i></a>
                    </li>  --}}
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>


            <div class="row">

                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-tabs-top mb-3">
                        <li class="nav-item"><a class="nav-link active" href="#top-tab1" data-bs-toggle="tab"> All</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#top-tab2" data-bs-toggle="tab"> 10 DLC and VLN</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#top-tab3" data-bs-toggle="tab"> Short Code</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="top-tab1">
                            <!-- /product list -->
                            <div class="card table-list-card">
                                <div class="card-body">
                                    <div class="table-top">
                                        <div class="search-set">
                                            <div class="search-input">
                                                <a href="" class="btn btn-searchset"><i data-feather="search"
                                                        class="feather-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="search-path">
                                            <div class="d-flex align-items-center">
                                                <a class="btn btn-filter" id="filter_search">
                                                    <i data-feather="filter" class="filter-icon"></i>
                                                    <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}"
                                                            alt="img"></span>
                                                </a>
                                                <div class="layout-hide-box">
                                                    <a href="javascript:void(0);" class="me-3 layout-box"><i
                                                            data-feather="layout" class="feather-search"></i></a>
                                                    <div class="layout-drop-item card">
                                                        <div class="drop-item-head">
                                                            <h5>Want to manage datatable?</h5>
                                                            <p>Please drag and drop your column to reorder your table and
                                                                enable see
                                                                option
                                                                as you want.</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Number</span>
                                                                    <input type="checkbox" id="option1" class="check"
                                                                        checked>
                                                                    <label for="option1" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Country</span>
                                                                    <input type="checkbox" id="option2" class="check"
                                                                        checked>
                                                                    <label for="option2" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Type</span>
                                                                    <input type="checkbox" id="option3" class="check"
                                                                        checked>
                                                                    <label for="option3" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Capabilities</span>
                                                                    <input type="checkbox" id="option4" class="check"
                                                                        checked>
                                                                    <label for="option4" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Fees</span>
                                                                    <input type="checkbox" id="option5" class="check"
                                                                        checked>
                                                                    <label for="option5" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-sort">
                                            <i data-feather="sliders" class="info-img"></i>
                                            <select class="select">
                                                <option>Sort by Date</option>
                                                <option>Newest</option>
                                                <option>Oldest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="card" id="filter_inputs">
                                        <div class="card-body pb-0">
                                            @component('components.numberlist-filderting')
                                            @endcomponent
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="table-responsive">
                                        <table class="table  datanew">
                                            <thead>
                                                <tr>
                                                    <th class="no-sort">
                                                        <label class="checkboxs">
                                                            <input type="checkbox" id="select-all">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </th>
                                                    <th>Number</th>
                                                    <th>Country</th>
                                                    <th>Type</th>
                                                    <th>Capabilities</th>
                                                    <th>Fees</th>
                                                    {{--  <th>Used</th>
                                                    <th>Valid</th>
                                                    <th>Status</th>
                                                    <th class="no-sort">Action</th>  --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </td>
                                                    <td>+923 373 1192139 <span class="badge badge-linesuccess">Share</span>
                                                    </td>
                                                    <td><span class="badge badge-bgdanger">Pakistan</span></td>
                                                    <td>Virtual long number</td>
                                                    <td>WhatsApp</td>
                                                    <td>$40</td>
                                                    {{--  <td>01</td>
                                                    <td>04 Jan 2023</td>
                                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#edit-units">
                                                                <i data-feather="edit" class="feather-edit"></i>
                                                            </a>
                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                            </a>
                                                        </div>

                                                    </td>  --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /product list -->
                        </div>
                        <div class="tab-pane" id="top-tab2">
                            <!-- /product list -->
                            <div class="card table-list-card">
                                <div class="card-body">
                                    <div class="table-top">
                                        <div class="search-set">
                                            <div class="search-input">
                                                <a href="" class="btn btn-searchset"><i data-feather="search"
                                                        class="feather-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="search-path">
                                            <div class="d-flex align-items-center">
                                                <a class="btn btn-filter" id="filter_search1">
                                                    <i data-feather="filter" class="filter-icon"></i>
                                                    <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}"
                                                            alt="img"></span>
                                                </a>
                                                <div class="layout-hide-box">
                                                    <a href="javascript:void(0);" class="me-3 layout-box"><i
                                                            data-feather="layout" class="feather-search"></i></a>
                                                    <div class="layout-drop-item card">
                                                        <div class="drop-item-head">
                                                            <h5>Want to manage datatable?</h5>
                                                            <p>Please drag and drop your column to reorder your table and
                                                                enable see
                                                                option
                                                                as you want.</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Number</span>
                                                                    <input type="checkbox" id="option1" class="check"
                                                                        checked>
                                                                    <label for="option1" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Country</span>
                                                                    <input type="checkbox" id="option2" class="check"
                                                                        checked>
                                                                    <label for="option2" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Type</span>
                                                                    <input type="checkbox" id="option3" class="check"
                                                                        checked>
                                                                    <label for="option3" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Capabilities</span>
                                                                    <input type="checkbox" id="option4" class="check"
                                                                        checked>
                                                                    <label for="option4" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Fees</span>
                                                                    <input type="checkbox" id="option5" class="check"
                                                                        checked>
                                                                    <label for="option5" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-sort">
                                            <i data-feather="sliders" class="info-img"></i>
                                            <select class="select">
                                                <option>Sort by Date</option>
                                                <option>Newest</option>
                                                <option>Oldest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="card" id="filter_inputs1">
                                        <div class="card-body pb-0">
                                            @component('components.numberlist-filderting')
                                            @endcomponent
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="table-responsive">
                                        <table class="table  datanew">
                                            <thead>
                                                <tr>
                                                    <th class="no-sort">
                                                        <label class="checkboxs">
                                                            <input type="checkbox" id="select-all">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </th>
                                                    <th>Number</th>
                                                    <th>Country</th>
                                                    <th>Type</th>
                                                    <th>Capabilities</th>
                                                    <th>Fees</th>
                                                    {{--  <th>Used</th>
                                                    <th>Valid</th>
                                                    <th>Status</th>
                                                    <th class="no-sort">Action</th>  --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </td>
                                                    <td>+923 313 1192331 <span class="badge badge-linesuccess">Share</span>
                                                    </td>
                                                    <td><span class="badge badge-bgdanger">Pakistan</span></td>
                                                    <td>Virtual long number</td>
                                                    <td>SMS</td>
                                                    <td>$40</td>
                                                    {{--  <td>01</td>
                                                    <td>04 Jan 2023</td>
                                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#edit-units">
                                                                <i data-feather="edit" class="feather-edit"></i>
                                                            </a>
                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                            </a>
                                                        </div>

                                                    </td>  --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /product list -->
                        </div>
                        <div class="tab-pane" id="top-tab3">
                            <!-- /product list -->
                            <div class="card table-list-card">
                                <div class="card-body">
                                    <div class="table-top">
                                        <div class="search-set">
                                            <div class="search-input">
                                                <a href="" class="btn btn-searchset"><i data-feather="search"
                                                        class="feather-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="search-path">
                                            <div class="d-flex align-items-center">
                                                <a class="btn btn-filter" id="filter_search2">
                                                    <i data-feather="filter" class="filter-icon"></i>
                                                    <span><img src="{{ URL::asset('/build/img/icons/closes.svg') }}"
                                                            alt="img"></span>
                                                </a>
                                                <div class="layout-hide-box">
                                                    <a href="javascript:void(0);" class="me-3 layout-box"><i
                                                            data-feather="layout" class="feather-search"></i></a>
                                                    <div class="layout-drop-item card">
                                                        <div class="drop-item-head">
                                                            <h5>Want to manage datatable?</h5>
                                                            <p>Please drag and drop your column to reorder your table and
                                                                enable see
                                                                option
                                                                as you want.</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Number</span>
                                                                    <input type="checkbox" id="option1" class="check"
                                                                        checked>
                                                                    <label for="option1" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Country</span>
                                                                    <input type="checkbox" id="option2" class="check"
                                                                        checked>
                                                                    <label for="option2" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Type</span>
                                                                    <input type="checkbox" id="option3" class="check"
                                                                        checked>
                                                                    <label for="option3" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Capabilities</span>
                                                                    <input type="checkbox" id="option4" class="check"
                                                                        checked>
                                                                    <label for="option4" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div
                                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                                    <span class="status-label"><i data-feather="menu"
                                                                            class="feather-menu"></i>Fees</span>
                                                                    <input type="checkbox" id="option5" class="check"
                                                                        checked>
                                                                    <label for="option5" class="checktoggle"> </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-sort">
                                            <i data-feather="sliders" class="info-img"></i>
                                            <select class="select">
                                                <option>Sort by Date</option>
                                                <option>Newest</option>
                                                <option>Oldest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="card" id="filter_inputs2">
                                        <div class="card-body pb-0">
                                            @component('components.numberlist-filderting')
                                            @endcomponent
                                        </div>
                                    </div>
                                    <!-- /Filter -->
                                    <div class="table-responsive">
                                        <table class="table  datanew">
                                            <thead>
                                                <tr>
                                                    <th class="no-sort">
                                                        <label class="checkboxs">
                                                            <input type="checkbox" id="select-all">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </th>
                                                    <th>Number</th>
                                                    <th>Country</th>
                                                    <th>Type</th>
                                                    <th>Capabilities</th>
                                                    <th>Fees</th>
                                                    {{--  <th>Used</th>
                                                    <th>Valid</th>
                                                    <th>Status</th>
                                                    <th class="no-sort">Action</th>  --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="checkboxs">
                                                            <input type="checkbox">
                                                            <span class="checkmarks"></span>
                                                        </label>
                                                    </td>
                                                    <td>+923 313 1192139 <span class="badge badge-linesuccess">Share</span>
                                                    </td>
                                                    <td><span class="badge badge-bgdanger">Pakistan</span></td>
                                                    <td>Virtual long number</td>
                                                    <td>WhatsApp</td>
                                                    <td>$40</td>
                                                    {{--  <td>01</td>
                                                    <td>04 Jan 2023</td>
                                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#edit-units">
                                                                <i data-feather="edit" class="feather-edit"></i>
                                                            </a>
                                                            <a class="confirm-text p-2" href="javascript:void(0);">
                                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                                            </a>
                                                        </div>

                                                    </td>  --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /product list -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
