@extends('Template.templateUser')
@section('main')
    <style>
        .card {
            border: none !important;
        }
    </style>

    <!-- information blog -->
    <section class="d-flex justify-content-center">
        <div class="card mt-5 pt-5">
            <div class="card-body border border-secondary shadow rounded" style="max-width: 575px;">
                <div class="d-md-block d-sm-none d-none" style="position: relative;">
                    <div style="position: absolute;top:-75px;right:470px">
                        <img src="{{ asset('pemandangan.jpg') }}" class="rounded shadow" width="130px" height="130px"
                            alt="">
                    </div>
                    <h2 class="px-5 mx-5">Seri Laravel 11</h2>

                </div>
                <div class="d-md-none d-sm-block text-center">
                    <img src="{{ asset('pemandangan.jpg') }}" class="rounded" width="130px" height="130px" alt="">
                    <h2>Seri Laravel 11</h2>
                </div>
                <div class="mt-4">
                    <b>About</b>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem sed illum minima sint
                        dolorem aliquam corrupti soluta assumenda? Ut consectetur magnam ab quod animi in?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- list blog -->
    <section class="my-5">
        <div class="text-center my-5">
            <h3>List Blog</h3>
        </div>
        <div class="card mx-auto my-3 mb-2 border shadow rounded" style="max-width:782px;">
            <div class="row p-0 m-0">
                <div class="col-md-6 col-sm-12 col-12 m-0 p-0" style="position:relative;">
                    <img src="{{ asset('pemandangan.jpg') }}" width="100%" height="180px" class="card-img-top card-img-bottom" alt="">
                    <div class="" style="position: absolute;bottom:5px;left:15px;">
                        <button class="btn btn-primary m-1">Article</button>
                        <button class="btn btn-primary m-1">Article</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="mx-2 my-4">
                        <div>Writer Name | 11 juni 2024 </div>
                        <div class="d-flex justify-content-between">
                            <h4>Judul Blog</h4>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
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
    </section>
@endsection
