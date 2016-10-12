<header>

    <!-- *** TOP ***
_________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 contact">
                    <p class="hidden-sm hidden-xs">Contact us on +91 987 353 4463 or contactus@niswaarthfoundation.org</p>
                    <p class="hidden-md hidden-lg"><a href="tel:9873534463" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="mailto:contactus@niswaarthfoundation.org" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <div class="col-xs-7">
                    <div class="social">
                        <a href="https://www.facebook.com/niswaarthfoundation/" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/niswaarth" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">

            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="/">
                        <img src="img/logo.png" alt="Universal logo" width="250" height="56" class="hidden-xs hidden-sm">
                        <img src="img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only"></span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('/') ? 'class = active' : '' }}">
                            <a href="/" >Home </a>

                        </li>
                        <li class="{{ Request::is('about') ? 'class = active' : '' }}">
                            <a href="/about">Who We Are</a>

                        </li>
                        <li class="{{ Request::is('whatWeDo') ? 'class = active' : '' }}">
                            <a href="/whatWeDo">What We Do</a>
                        </li>

                        <li class="{{ Request::is('whatCanYouDo') ? 'class = active' : '' }}">
                            <a href="/whatCanYouDo">What Can You Do</a>
                        </li>

                        <li class="{{ Request::is('newsAndInfo') ? 'class = active' : '' }}">
                            <a href="/newsAndInfo">News And Info</a>

                        </li>
                        <li class="{{ Request::is('contact') ? 'class = active' : '' }}">
                            <a href="/contact">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <!--/.nav-collapse -->




                <!--/.nav-collapse -->

            </div>


        </div>
        <!-- /#navbar -->

    </div>

    <!-- *** NAVBAR END *** -->

</header>