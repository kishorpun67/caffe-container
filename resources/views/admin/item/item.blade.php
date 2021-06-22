@extends('layouts.admin_layout.admin_layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(Session::has('success_message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
        {{ Session::get('success_message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
              <h3 class="card-title">View Item</h3>
              <a href="" data-toggle="modal" data-target="#myModals" style="max-width: 150px; float:right; display:inline-block;" class="btn btn-block btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;Add Item</a>
            </div>
            <div class="card-body">
              <table id="categories" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Item Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($item as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->item_name}}</td>
                    <td>
                        @if(!empty($item->category->category))
                        {{$item->category->category}}
                        @else
                        No Category
                        @endif
                    </td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->details}}</td>
                    <td><img src="{{asset($item->image)}}" alt="" with="100" height="100" srcset=""></td>
                    <td>
                    <a href=""data-toggle="modal" data-target="#myModal{{$item->id}}" > <i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                    <a href="{{ route('admin.addon', $item->id) }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="{{ route('admin.size', $item->id) }}"><i class="fa fa-plus" aria-hidden="true"></i></a>&nbsp;&nbsp;
                    <a href="javascript:" class="delete_form" record="item" rel="{{$item->id}}" style="display:inline;">
                    <i class="fa fa-trash fa-" aria-hidden="true" ></i>
                    </a>
                   </td>
                </tr>
                <div class="modal fade" id="myModal{{$item->id}}">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <form  method="POST"   action="{{route('admin.edit.item',$item->id)}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="class">Item</label>
                                    <input type="text" name="name" class="form-control" value="{{$item->item_name}}">
                                    <label for="class"> Price</label>
                                    <input class="form-control" name="price" value="{{$item->price}}">
                                    <label for="class"> Select Category</label>
                                    <select name="category_id" id="" class="form-control">
                                    <option value="" >Select</option>
                                      @foreach($category as $cat)
                                      <option value="{{$cat->id}}" @if($cat->id == $item->category_id) selected="" @endif>{{$cat->category}}</option>
                                      @endforeach
                                    </select>
                                    <label for="class">Description</label>
                                    <textarea name="description" id="" class="form-control" cols="6" rows="4">{{$item->details}}</textarea>
                                    <label for="class"> Image</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    <br>
                                    @if($item->image)
                                      <input type="hidden"  name="old_image" value="{{$item->image}}">
                                      <img src="{{asset($item->image)}}" width="100" height="100" alt="" srcset="">
                                    @endif
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
                @empty

                @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="modal fade" id="myModals">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form  method="POST"   action="{{route('admin.add.item')}}"  enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="class">Item Name</label>
                    <input class="form-control" name="name" placeholder="Item Name">
                    <label for="class"> Price</label>
                    <input class="form-control" name="price" placeholder="Price">
                    <label for="class"> Select Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="" >Select</option>
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->category}}</option>
                        @endforeach
                    </select>
                    <label for="class">Description</label>
                    <textarea name="description" id="" class="form-control" cols="6" rows="6"></textarea>
                    <label for="description">Image</label>
                    <input type="file" name="image" class="form-control" id="">
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
@section('script')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>

  $(function () {
    $("#categories").DataTable();

  });
  $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endsection

