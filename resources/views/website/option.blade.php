b:
@extends('layouts.app')
@section('content')

<div id="loading" class="dark-back">
    <div class="loading-bar"></div>
    <span class="loading-text opacity-0">So Excited ?</span>
    </div>

    <div id="particles-js"></div>

    <div class="info-bar bar-intro opacity-0">
    <div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-left">
    <p>Grand Opening in <span id="countdown"></span></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-6 info-bar-right">


    <p class="social-icon">
    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
    </p>
    </div>
    </div>
    </div>


    <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">

    <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
    <div class="sl-slide-inner">
    <div class="content-slide">
    <div class="container">
    <img src="img/logo.png" alt="" class="brand-logo text-intro opacity-0" />
    <h1 class="text-intro opacity-0">Comming Soon</h1>
    <p class="text-intro opacity-0">So Excited !!!<strong> Product Launch</strong> by Codedthemes.
    <br> Top bar Time countdown - Chill your excitement.
    </p>
    <a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Click Me !</a>
    </div>
    </div>
    </div>
    </div>
    $
    </div>

    </div>


    <div id="somedialog" class="dialog">
    <div class="dialog__overlay"></div>

    <div class="dialog__content">
    <div class="header-picture"></div>

    <div class="dialog-inner">
    <h4>Notify Popup Highlight</h4>
    <p>Just write the pefect description for your launch product here.... <strong>Codedthemes Product launch in next XX weeks. Enjoy !!!</strong></p>

    <div id="subscribe">
    <form action="php/notify-me.php" id="notifyMe" method="POST">
    <div class="form-group">
    <div class="controls">

    <input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" class="form-control email srequiredField" />

    <i class="fa fa-spinner opacity-0"></i>

    <button class="btn btn-lg submit">Submit</button>
    <div class="clear"></div>
    </div>
    </div>
    </form>

    <div class="block-message">
    <div class="message">
    <p class="notify-valid"></p>
    </div>
    </div>

    </div>

    </div>


    <button class="close-newsletter" data-dialog-close><i class="icon ion-android-close"></i></button>
    </div>

    </div>
@endsection
