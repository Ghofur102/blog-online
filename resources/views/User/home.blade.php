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
                                <a href="#update" class="btn btn-primary rounded shadow">Read Article</a>
                                <a href="{{ route('signin.layout') }}" class="btn btn-outline-primary rounded shadow">Sign In</a>
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

    <!-- Category Start -->
    <div class="category my-5 mx-5">
        <h3 class="text-decoration-underline">Category</h3>
        <h2>What do you want to Learn?</h2>
        <div class="list-category  overflow-x-scroll">
            <div class="d-flex">
                <div class="card mx-2 mb-2" style="min-width:32rem;">
                    <div class="">
                        <div class="row">
                            <div class="col-6" style="position:relative;">
                                <img src="{{ asset('pemandangan.jpg') }}" class="card-img-top card-img-bottom"
                                    alt="">
                                <div class="" style="position: absolute;bottom:5px;left:15px;">
                                    <button class="btn btn-primary m-1">Article</button>
                                    <button class="btn btn-primary m-1">Article</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mx-2 my-2">
                                    <div>Writer Name | 11 juni 2024 </div>
                                    <div class="d-flex justify-content-between">
                                        <h4>Judul Blog</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                            amet consectetur adipisicing elit. Eaque, tempora?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-2 mb-2" style="min-width:32rem;">
                    <div class="">
                        <div class="row">
                            <div class="col-6" style="position:relative;">
                                <img src="{{ asset('pemandangan.jpg') }}" class="card-img-top card-img-bottom"
                                    alt="">
                                <div class="" style="position: absolute;bottom:5px;left:15px;">
                                    <button class="btn btn-primary m-1">Article</button>
                                    <button class="btn btn-primary m-1">Article</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mx-2 my-2">
                                    <div>Writer Name | 11 juni 2024 </div>
                                    <div class="d-flex justify-content-between">
                                        <h4>Judul Blog</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                            amet consectetur adipisicing elit. Eaque, tempora?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-2 mb-2" style="min-width:32rem;">
                    <div class="">
                        <div class="row">
                            <div class="col-6" style="position:relative;">
                                <img src="{{ asset('pemandangan.jpg') }}" class="card-img-top card-img-bottom"
                                    alt="">
                                <div class="" style="position: absolute;bottom:5px;left:15px;">
                                    <button class="btn btn-primary m-1">Article</button>
                                    <button class="btn btn-primary m-1">Article</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mx-2 my-2">
                                    <div>Writer Name | 11 juni 2024 </div>
                                    <div class="d-flex justify-content-between">
                                        <h4>Judul Blog</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                            amet consectetur adipisicing elit. Eaque, tempora?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mx-2 mb-2" style="min-width:32rem;">
                    <div class="">
                        <div class="row">
                            <div class="col-6" style="position:relative;">
                                <img src="{{ asset('pemandangan.jpg') }}" class="card-img-top card-img-bottom"
                                    alt="">
                                <div class="" style="position: absolute;bottom:5px;left:15px;">
                                    <button class="btn btn-primary m-1">Article</button>
                                    <button class="btn btn-primary m-1">Article</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mx-2 my-2">
                                    <div>Writer Name | 11 juni 2024 </div>
                                    <div class="d-flex justify-content-between">
                                        <h4>Judul Blog</h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                            fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                        </svg>
                                    </div>
                                    <div class="">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                            amet consectetur adipisicing elit. Eaque, tempora?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End -->

    <!-- Update Start -->
    <div class="update my-5 mx-5" id="update">
        <h3 class="text-decoration-underline">Update</h3>
        <h2>What's New?</h2>
        <div class="list-blog">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                    <div class="card" style="max-width: 22rem;">
                        <div class="" style="position: relative;">
                            <img src="{{ asset('pemandangan.jpg') }}" style="height: 12rem;" class="card-img-top"
                                alt="...">
                            <div class="" style="position: absolute;bottom:5px;left:5px;">
                                <button class="btn btn-primary m-1">Article</button>
                                <button class="btn btn-primary m-1">Article</button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="mx-2 my-2">
                                <div>Writer Name | 11 juni 2024 </div>
                                <div class="d-flex justify-content-between">
                                    <h4>Judul Blog</h4>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        fill="currentColor" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707z" />
                                    </svg>
                                </div>
                                <div class="">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum, dolor sit
                                        amet consectetur adipisicing elit. Eaque, tempora?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Update End -->
@endsection
