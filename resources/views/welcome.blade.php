@extends('layouts.master')

@section('title')
    Niswaarth Foundation
@endsection

@section('content')
    <div class="all">
        @extends('layouts.header')

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <p></p>
                                    <h3>You educate a man, you educate a man, you educate a woman, you educate a generation</h3>
                                    <p>-Brigham Young
                                    </p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slider/slider1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <div class="col-sm-7 text-center">
                                    <img class="img-responsive" src="img/slider/slider2.jpg" alt="">
                                </div>

                                <div class="col-sm-5">
                                    <h3>It is health that is real wealth and not pieces of gold and silver</h3>

                                    <p>-Mahatma Gandhi
                                    </p>

                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h3>Education is the most powerful weapon which you can use to change the world</h3>
                                    <p>-Nelson Mandela
                                    </p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slider/slider3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slider/slider4.jpg" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h3>I really believe that everyone has a talent, ability or skill that he can mine to support himself and to succeed in life</h3>
                                    <p>-Dean Koontz
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 right">
                                    <h3>The best way to find yourself is to lose yourself in the service of others</h3>
                                    <p>-Mahatma Gandhi
                                    </p>
                                </div>
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slider/slider5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <img class="img-responsive" src="img/slider/slider6.jpg" alt="">
                                </div>
                                <div class="col-sm-5">
                                    <h3>One person can make a difference, <br>and everyone should try</h3>
                                    <p>-John F Kennedy
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>


        <section class="bar background-white">
            <div class="container">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Welcome to NISWAARTH FOUNDATION</h2>
                    </div>

                    <p class="lead" align="center"><i>“Niswaarth” is the Sanskrit word for selfless.</i></p>
                    <br>
                    <p class="lead" align="justify">Registered in 2014 in New Delhi as a purely Non-Governmental Organization (NGO) having a non- political, non-religious and noncommercial character, Niswaarth Foundation works to impart completely free Vocational Training to the underprivileged, young people belonging to the economically weaker sections of the society and backward class, in Northern part of the country.</p>
                    <hr>
                    <div class="heading text-center">
                        <h2>Conception of Niswaarth Foundation</h2>
                    </div>

                    <p class="lead" align="justify">Once, a group of common friends from diverse backgrounds were sitting together after a long gap. Despite the fact that they were meeting after a long time, they still remembered the vow they had taken some years back of doing their bit for the Society. This is how Niswaarth Foundation was formed, with the main <b>Mission</b> of creating employment opportunities for the underprivileged through Vocational
                        Skills Training so that they can become self-reliant and earn a livelihood for their families and to assist them to become independent in their upcoming future.</p>
                    <p class="lead">
                        The <b>Vision</b> of the NGO is to build a better India by building a better
                        trained workforce.
                    </p>

                    <hr>
                    <div class="heading text-center">
                        <h2>Source of funding</h2>
                    </div>

                    <p class="lead" align="justify">All our programmes are donation based and we have been running our activities with the kind contributions from the public at large since the inception of the NGO.</p>
                    <p class="lead" align="justify">
                        Thank you for visiting us. Do stay a little longer to read more about what we do and how little it takes for you to make a change.
                    </p>

                </div>
            </div>
        </section>

    </div>

    @extends('layouts.footer')
@endsection
