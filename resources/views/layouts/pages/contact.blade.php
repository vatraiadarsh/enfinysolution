@section('title','Contact')
@extends('layouts.designs.master')
@section('content')



<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>contact us</h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index-2.html">Home</a>
                </li><!-- comment for inline hack
                --><li>
                    contact us
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-share"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>



<section class="contact_us">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="sec-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="" method="post">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    <input type="text" name="full_name" class="form-control" value="" placeholder="Your Name *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Your Mail *" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea required" placeholder="Your Message...."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="btn-style-one" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="sec-title">
                    <h2>Get in Touch</h2>
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet, vix an natum labitur eleifend, mel amet a laorit menandri.</p>
                </div>
                <br>
                <div class="default-cinfo">

                    <div class="acc-content collapsed">
                        <ul class="contact-infos">
                            <li>
                                <div class="icon_box">
                                    <i class="fa fa-map-marker"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <p><b>Address:</b> <br> 121 Rain St, Melbourne 3000, Australia.</p>
                                </div><!-- /.text-box -->
                            </li>
                            <li>
                                <div class="icon_box">
                                    <i class="fa fa-phone"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <p><b>Call Us:</b> <br> +222 4444 88 999</p>
                                </div><!-- /.text-box -->
                            </li>
                            <li>
                                <div class="icon_box">
                                    <i class="fa fa-envelope"></i>
                                </div><!-- /.icon-box -->
                                <div class="text-box">
                                    <p><b>Mail Us:</b> <br> Yourmail@info.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

    <!--Map Section-->
    <div class="map-section">
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="15"
                data-lat="45.438412"
                data-lng="10.993389"
                data-icon-path="images/resource/map-marker.png"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
                style="height: 400px;">
            </div>

        </div>
    </div>
    <!--End Map Section-->


@endsection
