@extends('admin.layouts.dashboard')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Strategic Plan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href={{url('/dashboard')}}>Home</a></li>
            <li class="breadcrumb-item active">Strategic page </li>
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
            Add Strategic plan
          </h3>
        </div> 
        <div class="card-body">
          {{-- <div class="col-12"> --}}
            
            
            {!! Form::open(['action'=>'App\Http\Controllers\StrategyController@store','method'=>'POST','class'=>"form-horizontal",'enctype'=>'multipart/form-data']) !!}

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Select Plan</label>
                                    <div class="col-sm-10">
                                        <select name="heading" class="form-control" required >
                                            <option value="vision">Vision</option>
                                            <option value="mission">Mission</option>
                                            <option value="objective">Objective</option>

                                        </select>
                                    </div>
                                </div>
            
                              
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Description</label>
                                      <div class="col-sm-10">
                                          <textarea class="form-control" name="description" required placeholder="Plan description"></textarea>
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
              <h3 class="card-title">Strategic Plan of BBDMP</h3>

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
            @if(count($strat)>0)
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>Vision</th>
                    <th>Mission</th>
                    <th>Objective</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>@foreach($visions as $vision)
                     <li> {{$vision->description}}
                      <div class="btn-group">
                        {!!Form::open(['action'=>['App\Http\Controllers\StrategyController@delete',$vision->id],'method'=>'POST']) !!}
  
                    
                        {{Form::hidden('_method','DELETE')}}
  
                        <button type="submit" class="btn btn-danger">
                        <i class="fa fa-times">
                        </i></button>
                    </a>
                        {!!Form::close()!!}
                        
                        
                    </div>
                    </li>
                    
                      @endforeach
                      </td>

                    <td>@foreach($missions as $mission)
                      <li> {{$mission->description}}
                        <div class="btn-group">
                          {!!Form::open(['action'=>['App\Http\Controllers\StrategyController@delete',$mission->id],'method'=>'POST']) !!}
    
                      
                          {{Form::hidden('_method','DELETE')}}
    
                          <button type="submit" class="btn btn-danger">
                          <i class="fa fa-times">
                          </i></button>
                      </a>
                          {!!Form::close()!!}
                          
                          
                      </div></li>
                      @endforeach</td>

                     <td>@foreach($objectives as $objective)
                      <li> {{$objective->description}}
                      <div class="btn-group">
                        {!!Form::open(['action'=>['App\Http\Controllers\StrategyController@delete',$objective->id],'method'=>'POST']) !!}
  
                    
                        {{Form::hidden('_method','DELETE')}}
  
                        <button type="submit" class="btn btn-danger">
                        <i class="fa fa-times">
                        </i></button>
                    </a>
                        {!!Form::close()!!}
                        
                        
                    </div></li>
                       @endforeach</td>

                  </tr>
                 
                </tbody>
              </table>
            </div>

            @else
            <div class="alert alert-danger">
              <p style="text-align:center">Sorry, There is no plan to show !!</p>
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