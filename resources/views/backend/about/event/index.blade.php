@extends('backend.layouts.app')
@section('styles')
@section('content')
    <!-- content @s
        -->
        <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-xl">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Events</h3>

                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                            data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="form-group"> 
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left"><em
                                                                    class="icon ni ni-search"></em></div><input type="text"
                                                                class="form-control" id="searchBar" placeholder="Search">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="#" class="btn btn-primary btn-sm d-none d-md-inline-flex" data-toggle="modal"
                                                    href="" data-act="ajax-modal" data-complete-location="true"
                                                    data-method="get"
                                                    data-action-url="{{ route('admin.events.create') }}">
                                                        <em class="icon ni ni-plus"></em><span>Add Event</span></a>
                                                </li>
                                                           
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                                    <div class="card-inner p-0">
                                        <table class="datatable-init1 table" id="event-table">
                                            <thead>
                                                <tr class="nk-tb-item nk-tb-head">
                                                    <th class="nk-tb-col py-2"><span class="sub-text">Sr No.</span></th>
                                                    <th class="nk-tb-col py-2"><span class="sub-text">Event Title</span></th>
                                                    <th class="nk-tb-col py-2"><span class="sub-text">Event Description</span></th>
                                                    <th class="nk-tb-col py-2"><span class="sub-text">Event Type</span></th>
                                                    <th class="nk-tb-col py-2"><span class="sub-text">Image</span></th>
                                                    <th class="nk-tb-col py-2 text-right"><span class="sub-text">Action</span>
                                                    </th>
                                                </tr><!-- .nk-tb-item -->
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
  
    
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> 
   
        <script> 
            $(document).ready(function() {
                // Fetch data using datatable start
                $(function() {
                    var table = $('#event-table').DataTable({
                        ajax: {
                            url: "{{ route('admin.about.event.datatable') }}",
                        },
                        processing: false,
                        serverSide: true,
                        scrollX: false,
                        autoWidth: false,
                        stateSave: false,
                        lengthChange: false,
                        bAutoWidth: false,
                        dom: 'ltpr',
                        language: {
                            paginate: {
                                previous: "Prev",
                                next: "Next",
                            },
                            info: "",
                            emptyTable: "No Event Available",
                            infoFiltered: "",
                            select: {
                                rows: {
                                    _: " (%d rows selected)",
                                    0: "",
                                    1: " (1 row selected)",
                                }
                            }
                        },
                        columns: [{
                                data: 'id',
                                name: 'id',
                                sClass: "nk-tb-col",
                                orderable: false
                            },
                            {
                                data: 'title',
                                name: 'title',
                                sClass: "nk-tb-col",
                                orderable: false
                            },
                            {
                                data: 'description',
                                name: 'description',
                                sClass: "nk-tb-col",
                                orderable: false
                            },
                            {
                                data: 'is_special',
                                name: 'is_special',
                                sClass: "nk-tb-col",
                                orderable: false
                            },
                            {
                                data: 'image',
                                name: 'image',
                                sClass: "nk-tb-col",
                                orderable: false
                            },
                            {
                                data: 'action',
                                name: 'action',
                                sClass: "nk-tb-col",
                                orderable: false,
                                searchable: false
                            },
                        ],
                        "fnRowCallback": function(nRow, aData, iDisplayIndex) {
                            $(nRow).addClass('nk-tb-item');

                        },
                        "drawCallback": function(settings) {

                            $('#event-table_paginate').css({
                                'padding': '10px 25px'
                            });
                        }
                    });
                    $('#searchBar').on('keyup', function() {
                        table.search($('#searchBar').val()).draw();
                    });
                });
                // datatable fetch end
            });
        </script>
