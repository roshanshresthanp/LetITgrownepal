@extends('admin.layouts.dashboard')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Image Gallery</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href={{url('/dashboard')}}>Home</a></li>
            <li class="breadcrumb-item active">Gallery page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @include('inc.message')
      <!-- COLOR PALETTE -->
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-th"></i> &nbsp;
            Add Image
          </h3>
        </div> 
        <div class="card-body">
          {{-- <div class="col-12"> --}}
            
            
            {!! Form::open(['action'=>'App\Http\Controllers\GalleryController@store','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!}
            
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Upload</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" accept="image/*" required>
                                    </div>
                                </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Description</label>
                                      <div class="col-sm-10">
                                          <textarea class="form-control" name="description" required placeholder="Image description"></textarea>
                                      </div>
                                  </div>
                                  
                        
                      <div class="panel-body">
                              
                              <input type="submit" value="Add" class="btn btn-primary">
                              {{-- {{Form::submit('Submit',['class'=>'btn btn-primary'])}} --}}
                              <input type="reset" value="Cancel" class="btn btn-danger">
                              {{-- <a href="#myModal-1" data-toggle="modal" class="btn  btn-danger">
                                  Cancel
                              </a> --}}
                             
                      </div>
                            
                              
                              {!!Form::close()!!}

          </div>
        </div>
        <!-- /.card-body -->
      </div>
      

      
      <!-- /.card -->
      <!-- START ALERTS AND CALLOUTS -->
      <!-- table starts-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Showing all image gallery</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @if(count($gallery)>0)
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>S. No</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach($gallery as $g)
                  <tr>
                    <td><?php echo $i++ ?> </td>
                    <td>{{$g->description}}</td>
                    <td><img src="{{asset('storage/gallery')}}/{{$g->image}}" height="90px" width="90px"></td>

                     <td><div class="btn-group">
                        {!!Form::open(['action'=>['App\Http\Controllers\GalleryController@delete',$g->id],'method'=>'POST']) !!}
  
                        {{-- <a  class="btn btn-success" href="{{url('notice')}}/{{$g->id}}/edit"><i class="nav-icon fas fa-edit"></i></a> --}}

                        {{Form::hidden('_method','DELETE')}}
  
                        <button type="submit" class="btn btn-danger">
                        <i class="fa fa-times">
                        </i></button>
                    </a>
                        {!!Form::close()!!}
                        
                        
                    </div></td>

                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>

            @else
            <div class="alert alert-danger">
              <p style="text-align:center">Sorry, There is no image to show !!</p>
            </div>
            @endif
            <!-- /.card-body -->
          </div>
          
          <!-- /.card -->
        </div>
      </div>
      <!-- table ends -->
      <!-- /.row -->
      <!-- END TYPOGRAPHY -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection