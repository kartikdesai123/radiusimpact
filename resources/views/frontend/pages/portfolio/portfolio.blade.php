@extends('frontend.layout.app')
@section('content')
<section class="cloud-hero-section">
    <div class="container">
        <div class="row">

        </div>
    </div> 
</section>


<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-title portfolio-page">
                    <h1>PORTFOLIO</h1>
                </div>
            </div>
            <!-- MAIN (Center website) -->
            <div class="main">
                <div id="myBtnContainer" class="portfolio-page-btn">
                    <button class="btn-2 active" onclick="filterSelection('all')"> Web Development</button>
                    <button class="btn-2" onclick="filterSelection('category-2')">Category 2</button>
                </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row2 popup">
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


        </div>
    </div>
</section>
@endsection