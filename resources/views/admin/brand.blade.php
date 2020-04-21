@extends('admin')
@section('title','Brand')

@section('left-sidebar')
@include('admin.left-sidebar')
@stop

@section('right-sidebar')
@include('admin.right-sidebar')
@stop

@section('javascript')
<script type="text/javascript" src="{{ URL::to('ajax/brand.js') }}"></script>
@stop

@section('mainbody')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Manage Brand
                            </h2>
                            <p></p>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a data-toggle="modal" data-target="#modal">
                                    <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons" style="color:black;">add</i>
                                    </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Serial No</th>
                                            <th>Name</th>
                                            <th>User ID</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="frm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">New Product</h4>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                <label for="password">Brand Name</label>
                <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="name" id="brand" class="form-control" placeholder="Enter the Brand Name">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary m-t-5 waves-effect">Submit</button>
                <button type="button" class="btn btn-danger m-t-5 waves-effect"  data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>

    </div>
</div>
@stop