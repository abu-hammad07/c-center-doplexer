<?php $page = 'storage-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content settings-content">
            <div class="page-header settings-pg-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Settings</h4>
                        <h6>Manage your settings on portal</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw"
                                class="feather-rotate-ccw"></i></a>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="settings-wrapper d-flex">
                        @component('components.settings-sidebar')
                        @endcomponent
                        <div class="settings-page-wrap">
                            <div class="setting-title">
                                <h4>Storage</h4>
                            </div>
                            <div class="page-header text-end justify-content-end">
                                <a href="javascript:void(0);" class="btn-added btn-primary"><i data-feather="mail"
                                        class="me-2"></i>Send test email</a>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6 d-flex">
                                    <div class="connected-app-card d-flex w-100">
                                        <ul class="w-100 d-flex justify-content-between align-items-center">
                                            <li class="storage-icon mb-0">
                                                <span class="system-app-icon">
                                                    <img src="{{ URL::asset('/build/img/icons/storage-icon-01.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>Local Storage</h6>
                                            </li>
                                            <li class="setting-gateway d-flex align-items-center">
                                                <a href="javascript:void(0);"><i data-feather="settings"
                                                        class="me-2"></i></a>
                                                <div
                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                    <input type="checkbox" id="user1" class="check" checked>
                                                    <label for="user1" class="checktoggle"> </label>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 d-flex">
                                    <div class="connected-app-card d-flex w-100">
                                        <ul class="w-100 d-flex justify-content-between align-items-center">
                                            <li class="storage-icon mb-0">
                                                <span class="system-app-icon">
                                                    <img src="{{ URL::asset('/build/img/icons/storage-icon-02.svg') }}"
                                                        alt="">
                                                </span>
                                                <h6>AWS</h6>
                                            </li>
                                            <li class="setting-gateway d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                                    data-bs-target="#aws-config"><i data-feather="settings"
                                                        class="me-2"></i></a>
                                                <div
                                                    class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
                                                    <input type="checkbox" id="user2" class="check" checked>
                                                    <label for="user2" class="checktoggle"> </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
