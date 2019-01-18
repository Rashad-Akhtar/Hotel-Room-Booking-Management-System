@extends('admin_layout.masterpage')

@section('content')
      <!-- Page Inner -->
      <div class="page-inner">
            <div class="page-title">
                <h3 class="breadcrumb-header">Invoice</h3>
            </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                                <div class="col-md-4" style="padding-left:0;">
                                    <h3 class="m-b-md m-t-xxs"><b>Company</b></h3>
                                    <address>
                                        Luxury Hotel Rooms
                                    </address>
                                </div>
                                <div class="col-md-8 text-right" style="padding-right:0;">
                                    <h3 class="m-t-xs">Invoice</h3>
                                    <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                                </div>
                                <div class="col-md-12" style="padding-left:0;">
                                    <hr>
                                    <p>
                                        <strong>Invoice to</strong><br>
                                        {{ $order->name }}<br>
                                        {{$order->email}}<br>
                                        {{$order->phone}}<br>
                                        {{$order->address}}
                                    </p>
                                </div>
                                <div class="col-md-12" style="padding-left:0;padding-right:0;">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Room Title</th>
                                                <th>Price</th>
                                                <th>Advance Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($booked_rooms as $booked_room)
                                            <tr>
                                                <td>{{$booked_room->title}}</td>
                                                <td>{{$booked_room->price}}</td>
                                                <td>{{$booked_room->advance_amount}}</td>
                                            </tr>                                           
                                            @endforeach                                          
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-8" style="padding-left:0;">
                                    <h4>Thank you!</h4>
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo.<br>Cum sociis natoque penatibus et magnis dis<br>nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                                    <img src="http://via.placeholder.com/350x150?text=signature" height="150" class="m-t-lg" alt="">
                                </div>
                                <div class="col-md-4" style="padding-right:0;">
                                    <div class="text-right">
                                        <h4 class="no-m m-t-sm">Total Advance</h4>
                                        <h2 class="no-m">{{$order->total_advance}}</h2>
                                        <hr>
                                        <h4 class="no-m m-t-sm">Total Due</h4>
                                        <h2 class="no-m">{{$order->due_amount}}</h2>
                                        <hr>
                                        <button class="btn btn-info">Submit your invoice</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by stacks</p>
        </div>
        </div><!-- /Page Inner -->
@endsection