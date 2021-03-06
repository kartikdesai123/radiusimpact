@extends('frontend.layout.app')
@section('content')
<section class="service-hero-section">
    <div class="container">
        <div class="row">

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
                        <img src="{{ url('public/frontend/assets/images/icons/service-1.png') }}" style="width: 200px">
                    </div>  
                    <h3>Web Development</h3>
                    <p>As Website are becoming more sophisticated, They not only need to look great,but also function well...</p>
                    <a href="{{ route("web-development") }}"> Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-2.png') }}" style="width: 200px"> 
                    </div>  
                    <h3>Technical Support</h3>
                    <p>We provide high end technical support to all our clients.If you are in need of our technical support...</p>
                    <a href="{{ route('technical-support') }}"> Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-3.png') }}" style="width: 200px">
                    </div>  
                    <h3>Managed Services</h3>
                    <p>We provide high end technical support to all our clients.If you are in need of our technical support...</p>
                    <a href="{{ route('managed-services') }}"> Read More</a>
                </div>
            </div>
<!--            <div class="col-md-4">
                <div class="service-1">
                    <div class="service-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-3.png') }}">
                    </div>  
                    <h3>Cloud Backup</h3>
                    <p>Valuable data is something that you simply cannot replace.Our client know how critical it is backup...</p>
                    <a href="{{ route('cloud-backup') }}"> Read More</a>
                </div>
            </div>-->
        </div>
    </div> 
</section>
@endsection