@extends('layouts.default')

@section('content')

<!-- Jumbtron / Slider -->
<div class="jumbotron-wrap jumbotron-image mb-0">
    <div class="container">
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="jumbotron">
                        <h1 class="text-center">Tristique sem vitae metus ornare </h1>
                        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        <p class="lead text-center">
                            <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                            <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="jumbotron">
                        <h1 class="text-center">Cras sit amet nibh libero, in gravida nulla</h1>
                        <p class="lead text-center">Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                        <p class="lead text-center">
                            <a class="btn btn-secondary btn-lg" href="#" role="button"><i class="fa fa-gbp"></i> &nbsp; Buy now</a>
                            <a class="btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-info"></i> &nbsp; Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
       
       
<!-- Main content area -->
<div class="card-container">
    <div class="container">
        <div class="text-center padded-box pb-0">
                <h2>Aenean nec massa a tortor</h2>
                <p class="lead">Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>
        </div>
        
        <div class="padded-box row">
            <div class="col-md-4">
                <div class="card text-center">
                  <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Integer dictum sed nibh vitae imperdiet. Nam suscipit lorem nec dui viverra vestibulum. </p>
                    <a href="#" class="btn btn-primary">Left link</a>
                      <a href="#" class="btn btn-secondary">Right link</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                  <img class="card-img-top" src="images/pic2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Morbi iaculis, justo vitae dignissim aliquam, quam eros vehicula est, facilisis ultrices mi nunc eget lacus.</p>
                     <a href="#" class="btn btn-primary">Left link</a>
                      <a href="#" class="btn btn-secondary">Right link</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                  <img class="card-img-top" src="images/pic3.jpg" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Nam lacinia aliquet tempus. Sed vitae semper augue. Vestibulum pulvinar laoreet egestas.  </p>
                     <a href="#" class="btn btn-primary">Left link</a>
                      <a href="#" class="btn btn-secondary">Right link</a>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="padded-box row">
            <div class="col-md-4">
                <div class="card text-center">
                    <img class="card-img-top" src="images/pic4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <blockquote class="card-text">In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</blockquote>
                        <p class="card-text quote-text">- Joe Bloggs, <a href="#">A Company</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                  <img class="card-img-top" src="images/pic5.jpg" alt="Card image cap">
                  <div class="card-body">
                    <blockquote class="card-text">Aenean non libero vestibulum, finibus lacus quis, ullamcorper diam. Ut quis sollicitudin mi, dignissim ultrices elit. </blockquote>
                    <p class="card-text quote-text">- Jane Doe, <a href="#">Marketing Business</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                  <img class="card-img-top" src="images/pic6.jpg" alt="Card image cap">
                  <div class="card-body">
                    <blockquote class="card-text">Quisque faucibus neque sodales, suscipit nisi vitae, placerat nisi. Nam cursus molestie posuere. Mauris fringilla condimentum lacus. </blockquote>
                    <p class="card-text quote-text">- Annaleigh Rose, <a href="#">CEO</a></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop