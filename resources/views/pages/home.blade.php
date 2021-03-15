@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <section id="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/resources/img/ml.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="resources/img/pubg.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="resources/img/ff.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="news" class="parallax">
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>Game Online</h1>

            <div class="row gallery-feed">
                <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/ml.jpg">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/pubg.jpg">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/ff.jpg">
                </div><div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/ff.jpg">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/ml.jpg">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                <img class="img-responsive" src="resources/img/pubg.jpg">
                </div>
        </div>
       
        
            
    </section>

    <section id="galeri" parallax2>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>Top Up Mobile Legend</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Top Up Sekarang
                </button>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Mobile Legend</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
            </div>
        </div>
    </section>

    <section id="about" parallax3>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>Top Up PUBG Mobile</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Top Up Sekarang
                </button>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">PUBG Mobile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section id="contact" parallax4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>Top Up Free Fire</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Top Up Sekarang
                </button>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Free Fire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    </section>
    <section id="contact" parallax4>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consectetur labore incidunt, dignissimos illum temporibus placeat ratione nam odio ad molestias dolorem atque impedit maiores suscipit praesentium officiis itaque adipisci.</p>
                
                                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Chat Via Whatsapp
                </button>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">08292963626</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    </div>
    </section>
@stop

