@extends('frontend.layout.app')
@section('content')
<section class="cloud-hero-section">
    <div class="container">
        <div class="row">

        </div>
    </div> 
</section>
<section class="web">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="web-title">CLUOD BACKUP</h1>
            </div>
            <div class="col-md-4">
                <div class="service-1">
                    <div class="web-image">
                        <img src="{{ url('public/frontend/assets/images/icons/service-3.png') }}">
                    </div>   
                </div>
            </div>
        </div>
    </div> 
</section>


<section class="cloud-back">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="cloud-1">
                    <div class="cloud-img">
                        <img src="{{ url('public/frontend/assets/images/banners/cloud1.png') }}">
                    </div>
                    <h4>cloud backup solution</h4>
                    <p>Valuable data is something that you simply cannot replace. Our clients know how critical it is to backup their data. It’s in our experience that it only takes one fatal hard drive crash for someone to realize the importance of backing up their data.</p>
                    <p>Expert Tech now offers cloud backup solutions for your computers, phones, tablets, servers, etc. Keep your data safe with Expert Tech.<br>
                        <a href="#">Request Trial Backup Now!</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cloud-2">
                    <div class="cloud-img">
                        <img src="{{ url('public/frontend/assets/images/banners/cloud2.png') }}">
                    </div>
                    <h4>CLOUD BACKUP OFFERS REAL
                        -TIME SYNCHRONIZATION ON:
                    </h4>
                    <p>DESKTOPS | SYNC CRITICAL FILES TO THE CLOUD<br>
                        LAPTOPS | SYNC CRITICAL FILES TO THE CLOUD<br>
                        TABLETS | SYNC PHOTOS, MUSIC, DOCS TO THE CLOUD<br>
                        SMART PHONES | SYNC PHOTOS, MUSIC, DOCS, TO THE CLOUD<br>
                        Your data gets stored all in one place! You can access all your files online by logging into the encrypted website. Once you log into the website you will gain instant access to your files. In the event that your device fails, you can instantly download your files to a new device.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cloud-3">
                    <div class="cloud-img">
                        <img src="{{ url('public/frontend/assets/images/banners/cloud3.png') }}">
                    </div>
                    <h4>Compatability</h4>
                    <p class="first">MAC OS
                    <p>Microsoft Windows 8, Windows 7, Windows XP, Microsoft Surface</p>
                    <p>Iphone, Ipad</p>
                    <p>Blackberry</p>
                    <p>Android phone, Android Tablet
                    </p>
                    <ul class="system">
                        <li><a href="#"><img src="{{ url('public/frontend/assets/images/icons/android.png') }}"></a></li>
                        <li><a href="#"><img src="{{ url('public/frontend/assets/images/icons/window.png') }}"></a></li>
                        <li><a href="#"><img src="{{ url('public/frontend/assets/images/icons/apple.png') }}"></a></li>
                        <li><a href="#"><img src="{{ url('public/frontend/assets/images/icons/berry.png') }}"></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection