@extends('admin')
@section('title','Users')

@section('left-sidebar')
@include('admin.left-sidebar')
@stop

@section('right-sidebar')
@include('admin.right-sidebar')
@stop

@section('javascript')
<script type="text/javascript" src="{{ URL::to('ajax/user.js') }}"></script>
@stop

@section('mainbody')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Manage Users
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
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Company</th>
                                            <th>Role</th>
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
                <h4 class="modal-title" id="defaultModalLabel">New User</h4>
            </div>
            <div class="modal-body">
                {{ csrf_field() }}
                <!-- <label for="password">Category Name</label> -->
                <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="name" id="brand" class="form-control" placeholder="Your Name">
                        </div>
                </div>
                <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="mobile" id="brand" class="form-control" placeholder="Mobile No">
                        </div>
                </div>
                <div class="form-group">
                        <div class="form-line">
                            <input type="email" name="email" id="brand" class="form-control" placeholder="Email Address">
                        </div>
                </div>
                <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="address" id="brand" class="form-control" placeholder="Address Here">
                        </div>
                </div>
                <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="company" id="brand" class="form-control" placeholder="Company Name">
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