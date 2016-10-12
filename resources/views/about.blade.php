@extends('layouts.master')

@section('title')
    About | Niswaarth Foundation
@endsection

@section('content')
    <div class="all">
        @extends('layouts.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>About us</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Who We Are</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <section>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="heading">
                                <h2>who we are</h2>
                            </div>

                            <p class="lead" align="justify">Individuals from varied fields form the Board of Trustees and Advisory Board. Bringing their skills and knowledge to the table, they formulate policies and plans for the NGO, oversee budgets, finance and human resource development. While some of them also help in developing strategies for communication and resource mobilization, many of them are actively involved as Mentors and Volunteers.</p>

                        </div>
                    </div>

                </section>
            </div>
            <!-- /#contact.container --><!-- /.bar -->

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Meet our team</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /.row1 -->
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <img src="img/person1.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                        </div>
                        <!-- /.team-member -->

                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/person2.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/person3.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>

                    </div>
                    <!-- /.row1 -->

                    <!-- /.row2 -->
                    <div class="row">
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/person4.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <img src="img/person5.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/person6.jpg" alt="" class="img-responsive img-circle">
                                </div>
                            </div>
                            <!-- /.team-member -->
                        </div>
                        <div class="col-md-3 col-sm-3" data-animate="fadeInUp">
                            <div class="team-member">
                                <div class="image">
                                    <img src="img/person7.jpg" alt="" class="img-responsive img-circle">
                                </div>

                            </div>
                            <!-- /.team-member -->
                        </div>

                    </div>
                    <!-- /.row2 -->

                </div>
                <!-- /.container -->
            </section>
            <section class="bar background-pentagon no-mb">
                <div class="container">
                    <div class="row"></div>
                </div>
            </section>
            <!-- /.bar -->

        </div>

    </div>
@endsection

@extends('layouts.footer')