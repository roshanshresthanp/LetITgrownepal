@if(count($errors)>0)
    
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
      <p style="text-align:center">{{$error}}</p>
    </div>    
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success"> 
       <p style="text-align:center"> {{session('success')}} <p>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <p style="text-align:center">{{session('error')}}</p>
    </div>
@endif