@extends('admin_layout.masterpage')

@section('content')
<div class="page-inner">
    <div class="page-title">
    <h3 class="breadcrumb-header">Edit Hotel Room {{ $hotels->title }}</h3>
    </div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    
                <form action="{{ route( 'hotel.update' ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <input type="hidden" name="id" value="{{ $hotels->id }}">
                            <div class="form-group">
                                <label for="title">Hotel Room Title</label>
                            <input type="text" id="name-input" class="form-control" name="title" value="{{ $hotels->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                            <input type="text" id="position-input" class="form-control" name="price" value="{{ $hotels->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="advance">Advance Amount</label>
                            <input type="text" id="age-input" class="form-control" name="advance_amount" value="{{ $hotels->advance_amount }}" required>
                            </div>
                            <label for="description">Description</label>
                        <textarea name="description" class="form-control" placeholder="Hotel Room Description" >{{ $hotels->description }}</textarea><br>
                            <div class="form-group">
                                <label for="image1">Image 1</label>
                                <input type="file" name="image1" required>
                            </div>
                            <div class="form-group">
                                <label for="image1">Image 2</label>
                                <input type="file" name="image2" required>
                            </div>
                            <button type="submit" id="add-row" class="btn btn-success">Update</button>
                    </form>
                    
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