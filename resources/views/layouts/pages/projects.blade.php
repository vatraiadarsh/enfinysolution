@section('title','Projects')
@extends('layouts.designs.master')
@section('content')


<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Our projects</h3>
        </div><!-- /.box -->
    </div><!-- /.container -->
</div>

<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index-2.html">Home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    our projects
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-share"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>


<section class="portfolio portfolio-style-two padd-1">
    <div class="container">

        <!--Filter-->
        <div class="filters clearfix filters-style-two">
            <ul class="filter-tabs filter-btns">
                <li class="filter active" data-role="button" data-filter="all"><span>All</span></li>
                <li class="filter" data-role="button" data-filter=".BRANDING"><span>Branding</span></li>
                <li class="filter" data-role="button" data-filter=".LOGO"><span>Consulting</span></li>
                <li class="filter" data-role="button" data-filter=".ILLUSTRATION"><span>Office</span></li>
                <li class="filter" data-role="button" data-filter=".VIDEO"><span>Video</span></li>
            </ul>
        </div>

        <div class="row filter-list">
            <div class="projects-block-one mix all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/1.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one mix all BRANDING col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/2.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one mix all LOGO ILLUSTRATION col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/3.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one mix all VIDEO col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/4.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one mix all LOGO col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/5.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one mix all BRANDING col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/6.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Parallax Section-->
<section class="parallax-style-two padd-2" style="background-image:url(images/background/8.jpg);">
    <div class="container">
        <div class="text-center">
            <h2>For financial advice contact now</h2>
            <div class="text">Some lorem ipsum subtitle will be here ipsum dolor</div>
            <a href="contact.html" class="btn-style-five">Contact Us</a>
            <a href="#" class="btn-style-six">Learn More</a>
        </div>
    </div>
</section>

<section class="portfolio padd-1">
    <div class="container-fluid">

        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/1.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/2.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/3.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/4.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/5.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
            <div class="projects-block-one">
                <div class="inner-box">
                    <figure class="image">
                        <img src="images/project/6.jpg" alt="image">
                        <div class="overlay">
                            <a href="project-single.html"><i class="fa fa-link"></i></a>
                        </div>
                    </figure>
                    <div class="caption-title">
                        <h3><a href="project-single.html">Project Item Title</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Purchase Box-->
<section class="purchase-section" style="background-image:url(images/background/5.jpg);">
    <div class="container">
        <div class="row clearfix">
            <div class="column col-md-8 col-sm-12 col-xs-12">
                <h2>We Are The Best Consulting Company Ever!!</h2>
            </div>
            <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                <a href="#" class="btn-style-seven">Purchase Now</a>
            </div>
        </div>
    </div>
</section>
<!--End Purchase Box-->


@endsection
