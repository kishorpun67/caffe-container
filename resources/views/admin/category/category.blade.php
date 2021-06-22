@extends('layouts.admin_layout.admin_layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(Session::has('success_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
        {{ Session::get('success_message') }}
        <button type="button" class="close" item-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category</h3>
             <a href="" data-toggle="modal" data-target="#myModal"  style="max-width: 150px; float:right; display:inline-block;" class="btn btn-block btn-success">Add Category</a>
            </div>
            <div class="card-body">
              <table id="categories" class="table table-bordered table-striped  text-center">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category </th>
                  <th>Icon </th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ($category as $item)
                  <td>{{$item->id}}</td>
                  <td>{{$item->category}}</td>
                  <td>{{$item->icon}}</td>
                   <td>
                    <a href="" data-toggle="modal" data-target="#myModal{{$item->id}}"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                    <a href="{{route('delete.category',$item->id)}}"  style="display:inline;">
                      <i class="fa fa-trash fa-" aria-hidden="true" ></i>
                    </a>
                   </td>
                </tr>
                <div class="modal fade" id="myModal{{$item->id}}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <form  method="POST"   action="{{route('admin.edit.category',$item->id)}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="start_time">Category</label>
                                    <input class="form-control" name="category"value="{{$item->category}}" >
                                    <label for="icon">Icon</label>
                                    <input class="form-control" name="icon"value="{{$item->icon}}" >
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>



@endsection
@section('script')
<script>
  $(function () {
    $("#categories").itemTable();

  });
</script><div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form  method="POST"   action="{{route('admin.add.category')}}"  enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="start_time">Category</label>
                    <input class="form-control" name="category" >
                    <label for="start_time">Icon</label>
                    <input class="form-control" name="icon">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
      </div>
    </div>
</div>


@endsection
