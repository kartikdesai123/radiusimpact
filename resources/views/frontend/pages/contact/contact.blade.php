@extends('frontend.layout.app')
@section('content')
<section class="cloud-hero-section">
    <div class="container">
        <div class="row">

        </div>
    </div> 
</section>

<section class="contact">
    <div class="container"> 
        <div class="row">
            <div class="col-md-6">
                <div class="row">


                    <div class="col-md-12">
                        <div class="contact-title contactpage-title">

                            <h1>Contact Us</h1>
                            <h6>all field with an * are required</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form class="contact-form row" id='contactusmainform' method='post'>{{ csrf_field() }}
                            <div class="col-md-12"  style="padding:0px;">

                                <div class="form-group">

                                    <input type="text" class="form-control cnt-cntrl" id="name" name="name" placeholder="Full Name*" required>
                                    <!--placing icon using a span element-->
                                    <span class="icon fa fa-user fa-lg"></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="padding:0px;">

                                <div class="form-group">

                                    <input type="text" class="form-control cnt-cntrl" id="email" name="email" placeholder="Email*" required>
                                    <!--placing icon using a span element-->
                                    <span class="icon fas fa-envelope"></span>
                                </div>

                            </div>
                            <div class="col-md-12" style="padding:0px">
                                <div class="form-group">
                                    <textarea class="txt" id="msg" name="msg" placeholder="Message*"></textarea>
                                    <span class="icon-textarea fas fa-comment "></span>
                                </div>
                            </div>
                            <div class="col-md-12" style="padding:0px;padding-bottom: 10px">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control no-center">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">Send copy to yourself</label>
                                </div>
                            </div>
                            

                            <div class="col-md-12">
                                <div class="frm-btn no-center">
                                    <input type='submit' id='submit' class='btn-2' value='Submit'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" offset-md-1 col-md-5">

                <div class="contact-title contactpage-title2 ctn-2">

                    <h1>Find us!</h1>
                </div>
                <div class="embed-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2602.4428616024315!2d-123.11608418478141!3d49.286953378389704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867182ea2a7a0d%3A0xabed52a7ff0e0f7b!2sHotel%20Fairmont%20Waterfront!5e0!3m2!1sen!2sin!4v1578205801231!5m2!1sen!2sin" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection