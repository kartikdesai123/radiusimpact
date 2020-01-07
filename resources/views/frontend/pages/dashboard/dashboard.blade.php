@extends('frontend.layout.app')
@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="banner-heading">
                <h1>We provide affordable</h1>
                <h1>IT solutions.</h1>
                <a href="#" class="btn-1">Learn More</a>
            </div>
        </div>
    </div> 
</section>
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="service-title">SERVICES</h1>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-1.png') }}">
                    </div>  
                    <h3>Web Development</h3>
                    <p>As Website are becoming more sophisticated, They not only need to look great,but also function well...</p>
                    <a href="{{ route('web-development') }}"> Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-2.png') }}">
                    </div>  
                    <h3>Technical Support</h3>
                    <p>We provide high end technical support to all our clients.If you are in need of our technical support...</p>
                    <a href="{{ route('technical-support') }}"> Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-3.png') }}">
                    </div>  
                    <h3>Cloud Backup</h3>
                    <p>Valuable data is something that you simply cannot replace.Our client know how critical it is backup...</p>
                    <a href="{{ route('cloud-backup') }}"> Read More</a>
                </div>
            </div>
        </div>
    </div> 
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-title">
                    <h1>ABOUT US</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-heading">
                    <h1>WE ARE RADIUS IMPACT,</h1>
                    <h1>EXPERT IN COMPUTER</h1>
                    <h1>TECHNOLOGY!</h1>
                </div>
                <div class="about-logo">
                    <h1>Radius<br>Impact</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-detail">
                    <p>Radius Impact can help you resolve the most frustrating computer or technology issues. We are an affordable solution for both business and residential needs. If you are not a client with Radius Impact and would like to request a per-incident support call or Would you like to upgrade to Windows 10? Contact Expert Tech to find out if your machine is compatible for an upgrade!</p>
                    <a href="{{ route('contact') }}" class="btn-1">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-title">
                    <h1>PORTFOLIO</h1>
                </div>
            </div>
            <!-- MAIN (Center website) -->
            <div class="main">
                <div id="myBtnContainer" class="home-portbtn">
                    <button class="btn-2 active" onclick="filterSelection('all')"> Web Development</button>
                    <button class="btn-2" onclick="filterSelection('category-2')">Category 2</button>
                </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row2">
                    <div class="column2 category-2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port1.png') }}" alt="Mountains" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="column2 category-2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port2.png') }}" alt="Lights" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="column2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port3.png') }}" alt="category-2" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="column2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port3.png') }}" alt="category-2" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div> <div class="column2 category-2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port3.png') }}" alt="category-2" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div> <div class="column2">
                        <div class="content">
                            <a href="#">
                                <img src="{{ url('public/frontend/assets/images/banners/port3.png') }}" alt="category-2" style="width:100%">
                                <div class="img-detail">
                                    <p>Site name <span><i class="fas fa-globe-americas"></i></span> Webpage</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- END GRID -->
                </div>

                <!-- END MAIN -->
            </div>
            <div class="col-md-12" style="text-align: center;">
                <a href="{{ route('portfolio') }}" class="btn-3">See More</a>
            </div>


        </div>
    </div>
</section>

<section class="contact">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <p>Have question ?</p>
                    <h1>Contact Us</h1>
                    <h6>all field with an * are required</h6>
                </div>
            </div>
            <div class="col-md-12">
                <form class="contact-form row" id='contactusform' method='post'>{{ csrf_field() }}
                    <div class="col-md-6">

                        <div class="form-group">

                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name*" >
                            <!--placing icon using a span element-->
                            <span class="icon fa fa-user fa-lg"></span>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">

                            <input type="text" class="form-control" id="email" name="email" placeholder="Email*" >
                            <!--placing icon using a span element-->
                            <span class="icon fas fa-envelope"></span>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="msg" name="msg" placeholder="Message*"></textarea>
                            <span class="icon-textarea fas fa-comment "></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="custom-control">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">Send copy to yourself</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="frm-btn">
                            <input type='submit' class='btn-2' value='Submit'>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection