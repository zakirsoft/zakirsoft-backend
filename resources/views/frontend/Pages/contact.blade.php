@extends('frontend.master')

@section('contact') active @endsection
@section('contact_footer') footer_active @endsection

@section('content')
    <!-- joinus section start -->
    <section id="joinus-contact_area" class="none">
        <div class="container">
            <div class="row section_title">
                <h2>Contact us</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact_form text-center">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Your name" required>
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Please enter a valid email"
                                        required>
                                </div>
                            </div>
                            <input class="subject" type="text" name="Subjects" placeholder="Subjects">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                            <button class="button" type="submit">SEND MESSAGE <i class="fab fa-telegram-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- joinus section end -->
@endsection

@section('style') @livewireStyles @endsection
@section('script') @livewireScripts @endsection
