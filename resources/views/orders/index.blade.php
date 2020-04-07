@extends('adminlte::page')

@section('title', 'Order')

@section('css')
  @include('layouts.ordercss')
@stop

@section('content_header')
@stop

@section('content')

<div class="container">

  <div class="d-flex justify-content-center mb-3">
    <h1 class="text-left d-inline h1">Orders</h1>
    <hr>
    <div class="text-right d-inline">
      <a class="btn btn-success btn-lg" href="{{route('orders.create')}}" id="createNeworder">New Order</a>
    </div>
  </div>

  <hr>


    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
      </div>
    @elseif($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
    @endif

    <table id="orders-table" class="table table-bordered data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Delivering Address</th>
                <th>Creation Date</th>
                <th>Doctor Name</th>
                <th>is Insured</th>
                <th>Status</th>
                <th>Creator</th>
                <th>Pharmacy</th>
                <th width="280px">Action</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


@stop

@section('js')
  @include('layouts.orderjs')
@stop
