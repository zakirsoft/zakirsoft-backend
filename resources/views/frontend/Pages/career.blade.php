@extends('frontend.master')

@section('career') active @endsection
@section('career_footer') active @endsection

@section('content')

    <!-- joinus section start -->
    <section id="joinus-area" class="none ">
        <div class="container">
            <div class="row section_title">
                <h2>Join us</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    @foreach ($career as $item)
                    <div class="row join_team">
                        <div class="col-lg-6 col-12">
                            <div class="join-designer">
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->content }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="join-designer-button text-lg-right">
                                <a class="button" href="{{ route('contact_website') }}">I want this position</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- joinus section end -->

@endsection

