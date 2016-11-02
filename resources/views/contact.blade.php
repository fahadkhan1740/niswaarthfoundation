@extends('layouts.master')

@section('title')
    Contact | Niswaarth Foundation
@endsection

@section('content')
    <div class="all">
        @extends('layouts.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container" id="contact">

                <section>

                    <div class="row">
                        <div class="col-md-12">
                            <section>
                                <div class="heading">
                                    <h2>We are here to help you</h2>
                                </div>

                                <p class="lead">Are you curious about something? Do you want to come forward for a cause? Do you want to serve the needy and poor?</p>
                                <p class="lead">Please feel free to contact us.</p>
                            </section>
                        </div>
                    </div>

                </section>

                <section>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-map-marker adjust-icon"></i>
                                </div>
                                <h3>Address</h3>
                                <p>259A/3, Ground Floor, Nayyar Manzil,
                                    <br>Noor Nagar, Jamia,
                                    <br>New Delhi 110025.
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>


                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-phone adjust-icon"></i>
                                </div>
                                <h3>Contact Number</h3>
                                <p class="text-muted">You can call us at any of the mentioned numbers below..</p>
                                <p>+91 989 995 9499<br>
                                    +91 981 020 9823<br>
                                    +91 987 353 4463<br>
                                </p>
                            </div>
                            <!-- /.box-simple -->

                        </div>

                        <div class="col-md-4">

                            <div class="box-simple">
                                <div class="icon">
                                    <i class="fa fa-envelope adjust-icon"></i>
                                </div>
                                <h3>E-mail</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                <p class="text-muted">
                                    <a href="mailto:contactus@niswaarthfoundation.org">contactus@niswaarthfoundation.org</a>
                                </p>
                            </div>
                            <!-- /.box-simple -->
                        </div>
                    </div>

                </section>
            </div>
            <!-- /#contact.container -->
        </div>
        <!-- /#content -->
{{--

        <div id="map">

        </div>
--}}

        <div id="map" class="bg-image" data-latitude="28.558992" data-longitude="77.287532" data-style="light"></div>
    </div>

    @extends('layouts.footer')
@endsection
