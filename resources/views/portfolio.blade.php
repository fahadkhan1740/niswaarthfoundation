@extends('layouts.master')

@section('title')
    News & Info | Niswaarth Foundation
@endsection

@section('content')
    <div class="all">
        @extends('layouts.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>News and Info</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>News and Info</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">

                        </div>
                    </div>
                </div>
                <div class="row portfolio-project">

                    <section>

                        <div class="col-sm-8">
                            <div class="project owl-carousel">
                                <div class="item">
                                    <img src="img/news/news1.jpg" alt="" class="img-responsive">
                                    <p class="lead">
                                        <i> Source : Ab Hoga Nyay</i>
                                    </p>
                                </div>
                            </div>
                            <!-- /.project owl-slider -->

                        </div>
                    </section>
                </div>
            </div>
            <!-- /.container -->


        </div>
        <!-- /#content 1 -->



    </div>
    </div>
@endsection

@extends('layouts.footer')