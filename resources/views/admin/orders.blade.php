@extends('admin_layout.masterpage')

@section('content')

<div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Orders</h3>
        </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Total Advance</th>
                                        <th>Total Due</th>
                                        <th>Details</th>
                                        <th>Delete</th>
                                        <th>Approve</th>
                                    </tr>
                                </thead>
                                @php
                                    $count =1;
                                @endphp
                                <tfoot>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$count++}}</td>
                                        <td>{{$order->name}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->total_advance}}</td>
                                        <td>{{$order->due_amount}}</td>
                                        <td><a href="{{ route('admin.order_details',['id'=>$order->id]) }}" class="btn btn-success btn-sm">Details</a></td>
                                        <td><a href="{{ route('admin.order_delete',['id'=>$order->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                                        <td><a href="{{ route('admin.order_approve',['id'=>$order->id]) }}" class="btn btn-primary btn-sm">Approve</a></td>
                                    </tr>
                                    @endforeach                               
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p>Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
    </div>

@endsection