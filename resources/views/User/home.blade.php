@extends('Template.templateUser')
@section('main')
    <!-- Jumbotron Start -->
    <div class="jumbotron container">
        <div class="row mt-5">
            <div class="col-sm-12 col col-12 col-xl-6">
                <div class="d-flex justify-content-center">
                    <div class="">
                        <div class="">
                            <h1 style="font-size:58px;">Go Blogger</h1>
                            <p style="font-size:18px;">
                                Improve your coding skills <br>
                                with the latest tips on our blog.
                            </p>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary rounded shadow">Read Article</button>
                            <button class="btn btn-outline-primary rounded shadow">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col col-12 col-xl-6 text-start">
                <img src="{{ asset('pemandangan.jpg') }}" height="100%" width="60%"
                    class="mt-3 d-none d-xl-inline rounded shadow" alt="">
            </div>
        </div>
    </div>
    <!-- Jumbotron End -->
@endsection
