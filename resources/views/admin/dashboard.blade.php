@extends('admin')

@section('title','Dashboard')

@section('left-sidebar')
@include('admin.left-sidebar')
@stop

@section('right-sidebar')
@include('admin.right-sidebar')
@stop

@section('widget')
@include('admin.widget')
@stop

@section('mainbody')
@include('admin.main')
@stop