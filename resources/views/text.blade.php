@extends('layouts.master')

@section('title')
    What Can You Do | Niswaarth Foundation
@endsection

@section('content')
    <div class="all">
        @extends('layouts.header')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>what can you do</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>what can you do</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix">
                        <section>
                            <div id="text-page">

                                <h1>Volunteer</h1>

                                <p align="justify"><span class="lead">Do you ever wish you could share your talent, time and skills for those less privileged than you? Are you not quite sure where to begin? If your answer is yes, then get involved as a volunteer with Niswaarth Foundation. Volunteers are Networks of professionals, corporates, students, residents or like-minded people who believe in the same goal.</span></p>

                                <hr>

                            </div>
                            <div id="text-page">

                                <h1>Donate</h1>

                                <p><span class="lead">Your donation will be utilized to realize the mission of the NGO. You can donate online or through Cheque/DD. Our bank details are:
                                <ul class="lead">
                                	<li>Bank Name - ICICI BANK</li>
                                	<li>Branch - NEW FRIENDS COLONY</li>
                                	<li>Account Type - SAVINGS BANK ACCOUNT</li>
                                	<li>Account Number - 004601059915</li>
                                    <li>IFSC Code - ICIC0000046</li>
                                    <li>MICR Code - 110229007</li>
                                </ul></span></p>

                                <hr>

                            </div>
                        </section>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
				_________________________________________________________ --><!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
    </div>

    @extends('layouts.footer')
@endsection
