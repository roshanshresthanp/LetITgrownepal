<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<script src="{{asset('js/main.js')}}"></script> 
	<link href="{{asset('css/style.css')}}" rel="stylesheet">


</head>
  <body>
<div class="container-fluid">

  		<div class="col-lg-12">
  			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="test.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="test.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="test.jpg" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
  		</div>
    </div>


<!-- Strategic Plan of BBDMP -->
@if(count($strategy)>0)
  		<section class="pricing-table">
			<div class="container">
				<div class="block-heading">
					<h2>Strategic Plan of BBDMP</h2>
					<p></p>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>Vision</h3>
							</div>
							<p>
                                @foreach($strategy as $strat)
                                @if($strat->heading==="vision")
                                <li>
                                {{$strat->description}}
                                @endif
                                @endforeach
                                </li></p>
							
							
							<button class="btn btn-block btn-outline-primary" type="submit">View more</button>
						</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<!-- <div class="ribbon">Best Value</div> -->
							<div class="heading">
								<h3>Mission</h3>
							</div>
                            <p>
                                @foreach($strategy as $strat)
                                @if($strat->heading==="mission")
                                <li>
                                {{$strat->description}}
                                @endif
                                @endforeach
                                </li></p>
						<button class="btn btn-block btn-outline-primary" type="submit">View more</button>						
					</div>
					</div>
					<div class="col-md-5 col-lg-4">
						<div class="item">
							<div class="heading">
								<h3>Objectives</h3>
							</div>
							<p>
                                @foreach($strategy as $strat)
                                @if($strat->heading==="objective")
                                <li>
                                {{$strat->description}}
                                @endif
                                @endforeach
                                </li></p>
							
							<button class="btn btn-block btn-outline-primary" type="submit">View more</button>						
						</div>
					</div>
				</div>
			</div>
		</section>
        @endif
		<!--Strategies end -->


		<!-- Testimonials begins -->
		

		<!-- Testimonials ends-->
    
		<!-- News section begins -->
    @if(count($notice)>0)
			<div class="news-section">
      <div class="heading">
        <h2>Notice Board</h2>
      </div>
    <div class="row">
      <div class="column">
        <img src="test.jpg" height="400px" width="550">
      </div>
      <div class="column">
        <div id="accordion">
   
  
  @foreach($notice as $new)
  <div class="card">
    
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          {{$new->created_at}}
        </button>
      </h5>
      
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        {{$new->description}}
      </div>
    </div>
  </div>
  @endforeach

  {{-- <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div> --}}
</div> 
      </div>
    </div> 
  </div>
  @endif
		<!-- News section ends -->

		<!-- About us begins-->
		<div class="about">
			<div class="container-fluid">
			<div class="row">
			<div class ="col-sm-8"> 
				
				<h2><strong>About Project</strong></h2><br>
				<p>Bheri Babai Diversion Multipurpose Project (BBDMP) is the first of its kind of inter-basin water transfer project conceptualized to provide round the year irrigation facility to 51,000 A of land of Banke and Bardiya districts. Therefore, it has two components i.e. Hydropower and Irrigation.</p>
					<div class="column">
					<h5>Design & Architecture</h5>
						<li>Label area</li>
						<li>Label area</li>
						<li>Label area</li>
						<li>Label area</li>
						<br><br><a href="{{url('/datatable')}}"><h6>Find out more...</h6></a>
					</div>
					<div class="column">
					<h5>Construction & Building</h5>
						<li>Label area</li>
						<li>Label area</li>
						<li>Label area</li>
						<li>Label area</li>
						<br><br><a href="{{url('/datatable')}}"><h6>Find out more...</h6></a>
					</div>
					
			</div>
				<div class="col-sm-4">
					<img src ="test.jpg" height="400px" width="400px">
								<!-- <h1>About Me</h1> -->

			</div>
		<!-- </div> -->
		</div>
	</div>
</div>
		<!-- About us ends -->


<!--Image gallery begins-->


  <div class="container">
  	<div class ="imageg">
  	<h2>IMAGE GALLERY</h2>

    <hr class="my-4">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
      <!--Slides-->
      
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        
        <!--/.First slide-->

        <!--Second slide-->
        
        <div class="carousel-item active">

          <div class="row">
            @foreach($gallery as $g)
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{asset('storage/gallery')}}/{{$g->image}}"
                  alt="Card image cap" height="200px" width="120px">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">{{$g->description}}</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div>
            @endforeach

            {{-- <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div> --}}

            {{-- <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">quick fox</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div> --}}
          </div>
          

        </div>
        <div class="d-flex justify-content-center">
          {!! $gallery->links() !!}
      </div>
        <!--/.Second slide-->

        <!--Third slide-->
        {{-- <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <!-- <h4 class="card-title">Card title</h4> -->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">See more</a>
                </div>
              </div>
            </div>
          </div>

        </div> --}}
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>
</div>




    </div> <!-- container fluid closing div -->



  </body>
  <script type="text/javascript"></script>
  
</html>

