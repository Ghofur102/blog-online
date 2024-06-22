<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignIn Page | Online Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .shadow-right {
            box-shadow: 0 3px 6px  rgba(0, 0, 0, 0.2);
        }
    </style>
    </head>

<body>

    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Signin image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 shadow border rounded px-5 py-5">
                    <h3 class="mb-5">Sign In</h3>
                    @include('Template.alert')

                    <form action="{{ route('signin.process') }}" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-floating mb-4">
                            <input type="email" name="email" id="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="name@example.com" value="{{ old('email') }}" />
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-4">
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg  @error('password') is-invalid @enderror"
                                placeholder="Password" />
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberme" />
                                <label class="form-check-label" for="rememberme"> Remember me </label>
                            </div>
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </div>

                        <!-- button -->
                        <button type="submit" class="btn btn-primary fw-bold me-3">Sign In</button>
                        <a class="btn btn-outline-primary fw-bold" href="{{ route('signup.layout') }}">Sign
                            Up</a>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
