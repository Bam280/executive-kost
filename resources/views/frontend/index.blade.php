@extends('frontend.partials.master')
@section('content')
    <!-- Welcome Area Start -->
    <section class="aubna-welcome-area">
        <!--Content before waves-->
        {{-- <div class="container text-center">
            <div class="align-items-center justify-content-between ">
                <div class="inner-header">
                    <div class="row">
                        <div class="col">
                            <div class="welcome-left">
                                <h1>Veteran Kos</h1>
                                <p>Kosan siap huni di sekitar kampus UPNVJ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- Welcome Area End -->



    <!-- Blog Area Start -->
    <section class="aubna-blog-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="align-items-center text-center pb-3">
                        <a href="/blog" class="btn btn-lg" style="background-color: #C3D9F1">Mulai Mencari kost</a>
                    </div>
                    <div class="site-heading">
                        <div class="card">
                            <div class="card-body">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d37731.642246426156!2d106.80951210392742!3d-6.257099451996193!3m2!1i1024!2i768!4f13.1!2m1!1skost%20dekat%20jakarta%20selatan!5e0!3m2!1sid!2sid!4v1701520351175!5m2!1sid!2sid"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Blog Area End -->

    {{-- Modal user --}}
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> --}}
@endsection
