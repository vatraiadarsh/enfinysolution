@section('title','404 Page Not Found')
@extends('layouts.designs.master')
@section('content')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Opps!! Page Not Found</h3>
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
                    404
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-share"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>


<!--Error Section-->
<section class="error-section">
    <div class="auto-container">
        <div class="error-text">
            <h2>404</h2>
        </div>
        <h3>Opps!! Looks like somthing went wrong</h3>
        <div class="text">The page you are looking for was moved, removed, renamed or might never existed.</div>
        <div class="error-options">
            <a href="index-2.html" class="btn-style-one">Go Home</a>
            <span class="or">Or</span>
            <!-- Error Search Form -->
            <div class="error-search-box">
                <form method="post" action="http://wp.hostlin.com/narail/contact.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required>
                        <button type="submit"><span class="icon fa fa-search"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Error Section-->



@endsection
