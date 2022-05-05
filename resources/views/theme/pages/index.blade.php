<style>
    .landing-section {
        padding: 100px 0;
    }
</style>

@extends('theme.main')
@section('content')
    <section class="content"></section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Servicios</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card bg-dark text-white">
                <img src="/images/background.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">Auto Escuela ZS</h3>
                    <p class="card-text">Saca tu licencia de conducir con nosotros!</p>
                </div>
            </div>
                {{--<img src="/images/background.jpg" class="img-fluid"  alt="" style="width: 100%">
                {{--<div class="landing-header img-fluid" style="background-image: url('../images/background.jpg');"  >
                    <div class="container">
                        <div class="motto">
                            <h1 class="title-uppercase">Auto Escuela ZS</h1>
                            <h3>Saca tu licencia de conducir con nosotros!</h3>
                        </div>
                    </div>
                </div>--}}
        </div>

    <section id="aboutUs"></section>
    <div class="main">
            <div class="section text-center landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Sobre Nosotros</h2>
                            <h5>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                            <br />
                            <a href="#" class="btn btn-danger btn-fill">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="section section-light-brown landing-section">
        <div class="container">
            <h4 class="text-center">NUESTROS SERVICIOS</h4><br>
            <div class="row">
                <div class="col-md-4 column">
                    <h4>First Attribute</h4>
                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                    <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="col-md-4 column">
                    <h4>Second Attribute</h4>
                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                    <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="col-md-4 column">
                    <h4>Third Attribute</h4>
                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                    <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="services"></section>
    <div class="section section-light-brown landing-section">
    <div class="container">
        <div class="col-md-12">
            <div class="row row-cols-3">
                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    </div>
            </div>

    </div>
    </div>
@endsection