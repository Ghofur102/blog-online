<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templateAdmin.css') }}">
</head>

<body>
    <div id="viewport">
        <!-- Sidebar -->
        <!--Main Navigation-->
        <header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar bg-white">
                <div class="position-sticky">
                    <div class="d-flex mx-3">
                        <img src="{{ asset('img/logo.png') }}" style="width: 70px;height:70px;"
                            class="rounded-circle shadow" alt="">
                        <div class="mx-3">
                            Username <br>
                            Admin
                        </div>
                    </div>
                    <hr>
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <div class="py-3 ripple text-center" aria-current="true">
                            <button class="btn btn-white  p-2 button-primary w-100">Dashboard</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white p-2 button-secc w-100">Report</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white  p-2 button-secc w-100">Seri Blog Admin</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white  p-2 button-secc w-100">Blog Admin</button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Sidebar -->
            <!-- OffCanvas -->
            <button class="btn btn-primary m-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg> </button>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <div class="d-flex mx-3">
                        <img src="{{ asset('img/logo.png') }}" class="rounded-circle shadow" width="70px"
                            height="70px" alt="">
                        <div class="mx-3">
                            Username <br>
                            Admin
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="list-group list-group-flush mx-3 mt-4">
                        <div class="py-3 ripple text-center" aria-current="true">
                            <button class="btn btn-white  p-2 button-primary w-100">Dashboard</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white  p-2 button-secc w-100">Report</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white  p-2 button-secc w-100">Seri Blog Admin</button>
                        </div>
                        <div class="py-3 ripple text-center">
                            <button class="btn btn-white  p-2 button-secc w-100">Blog Admin</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Main Navigation-->

        <!--Main layout-->
        <main class="pt-2">
            <div class="container">
                @yield('main')
            </div>
        </main>
        <!--Main layout-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/inputblog.js') }}"></script>
    <script src="{{ asset('js/previewimage.js') }}"></script>
</body>

</html>
