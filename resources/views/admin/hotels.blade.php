@extends('admin_layout.masterpage')

@section('content')

<div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Hotel Rooms</h3>
    </div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add new hotel room</button>
                    <!-- Modal -->
                    <form id="add-row-form" action="{{ route('hotel_add') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Hotel Room</h4>
                                </div>
                                <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" id="name-input" class="form-control" name="title" placeholder="Hotel Room Title" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="position-input" class="form-control" name="price" placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="age-input" class="form-control" name="advance_amount" placeholder="Advance Amount" required>
                                    </div>
                                    <textarea name="description" class="form-control" placeholder="Hotel Room Description" ></textarea><br>
                                    <div class="form-group">
                                        <label for="image1">Image 1</label>
                                        <input type="file" name="image1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image1">Image 2</label>
                                        <input type="file" name="image2" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" id="add-row" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="table-responsive">
                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                                <tr>
                                    <th>Hotel Room Title</th>
                                    <th>Price</th>
                                    <th>Advance Payment</th>
                                    <th>Image1</th>
                                    <th>Image2</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                @foreach ($hotels as $hotel)
                                <tr>
                                    <td>{{$hotel->title}}</td>
                                    <td>{{$hotel->price}}</td>
                                    <td>{{$hotel->advance_amount}}</td>
                                    <td><img src="{{ asset($hotel->image1) }}" alt="image1" height="60" width="80"></td>
                                    <td><img src="{{ asset($hotel->image1) }}" alt="image2" height="60" width="80"></td>
                                <td><a href="{{ route('admin.hotels_update',['id'=>$hotel->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="{{ route('admin.hotels_delete',['id'=>$hotel->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
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