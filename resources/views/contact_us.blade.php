@extends('layouts.public')
@section('title')
    Contact Suranga
@endsection
@section('body')


    <section id="header-container">

        <header id="header">
            <div class="container">
                <nav id="navigation" class="navigation-login fl-r" role="navigation">
                    <ul>
                        <li><a href="#"><i
                                        class="ico icon-user-male rounded_50 base-text-color base-border-color"></i>
                                <span>Login</span></a></li>

                        <li id="signup"><a href="#">Sign Up</a></li>
                    </ul>
                </nav>
                <a href="#" id="logo"></a>

                <nav id="navigation" class="fl-r" role="navigation">
                    <ul>
                        <li>

                            <a href="{{route('welcome')}}">Home</a>


                        </li>


                        <li>
                            <a href="{{route('packages')}}">Packages</a>


                            <div class="submenu " style="width: 400px;">
                                <ul class="base-bg-color">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="our_team.html">Our Team</a></li>
                                    <li><a href="project_details_1.html">Project Details 1</a></li>
                                    <li><a href="project_details_2.html">Project Details 2</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                                <ul class="base-bg-color ">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="our_team.html">Our Team</a></li>
                                    <li><a href="project_details_1.html">Project Details 1</a></li>
                                    <li><a href="project_details_2.html">Project Details 2</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>

                            </div>

                        </li>
                        <li><a href="#">Sri Lanka</a></li>
                        <li><a href="#">Services</a></li>
                        <li class="current"><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>

                </nav>

            </div>
        </header>
    </section>
    <section id="contact" class="base-bg-color_light">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <h3>Get in touch with us</h3>

                    <p>
                        Introducing crystals splash. Very bigger brings most velvety treat burst unique choosy it's
                        spring. Satisfying sleek clinically made reputation agree hello full-bodied. New talking waxy
                        magically made exotic aroma odor newest.
                    </p>
                    @if(count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li><span>! {{$error}}</span></li>
                                @endforeach
                            </ul>

                        </div>
                    @endif

                    @if(Auth::check())
                        <form method="post" action="{{route('user_message')}}">
                            {{ csrf_field() }}

                            <textarea id="message" name="message" required></textarea>

                            <input class="base-text-color" type="submit" value="Send"/>
                        </form>

                    @else

                        <form method="post" action="{{route('public_message')}}">
                            {{ csrf_field() }}
                            <label>Please Enter Your Name *</label>
                            <input type="text" id="name" name="name" required/>
                            <label>Your Email *</label>
                            <input type="email" id="email" name="email" required/>
                            <label>Your Message *</label>
                            <textarea id="message" name="message" required></textarea>

                            <input class="base-text-color" type="submit" value="Send"/>
                        </form>
                    @endif
                </div>

                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="contact-address">
                        <div class="title-with-ico">
                            <i class="ico icon-location rounded_50 base-text-color base-border-color"></i>

                            <h3>Address<br/>NYC Head Office</h3>
                        </div>

                        <p>
                            Rockefeller Center, 45 Rockefeller Plaza, New York, NY, USA
                        </p>

                        <p>
                            P: +1 123 444 5678<br/>
                            f: +1 123 555 6789<br/>
                            E: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </p>

                        <p>
                            Traditional mountain finest ocean take. Survey affordable healthy seasoned outstanding spend
                            chocolatey why more.
                        </p>

                        <p>
                            Feedback also customer agree yet racy. Fights gentle chocolatey what luxury goodbye latest
                            seeing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="footer-item">
                        <h4>About Us</h4>

                        <p>Accomodations trust works tighter just. Chance however dry pennies effective. Deeply soaking
                            below genuine bold care burst. Reduced unique win.</p>

                        <img id="footer-logo" src="images/logo2.png" alt="single"/>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="footer-item">
                        <h4>Our Tweets</h4>

                        <div class="tweet">
                            <article>
                                <p>Check out this great #themeforest item 'FR – Elegant One Page Fashion PSD Template'
                                    http://themeforest.net/item/fr-elegant-one-page-fashion-psd-template/5339674</p>

                                <span><i class="icon-twitter-bird"></i> about 2 week ago</span>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="footer-item">
                        <h4>Newsletter Signup</h4>

                        <p>Please subscribe to our University newsletters</p>

                        <form class="style1" action="http://idealui.com/">
                            <input type="text" value=""/>

                            <input type="submit" value="Subscribe"/>
                        </form>

                        <p>We promise NO SPAM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



@endsection

