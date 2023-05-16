<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>APIX Login</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.png" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">
                    <h4>Welcome back!</h4>
                    <h6 class="font-weight-light">Happy to see you again!</h6>
                    <form class="pt-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span
                                    class="input-group-text bg-transparent border-right-0"
                                    >
                                    <i class="fa fa-user text-primary"></i>
                                    </span>
                                </div>
                                <input
                                    type="email"
                                    class="form-control form-control-lg border-left-0"
                                    id="exampleInputEmail"
                                    placeholder="Email"
                                    name="email" :value="old('email')"
                                />

                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span
                                    class="input-group-text bg-transparent border-right-0"
                                    >
                                    <i class="fa fa-lock text-primary"></i>
                                    </span>
                                </div>
                                <input
                                    type="password"
                                    class="form-control form-control-lg border-left-0"
                                    id="exampleInputPassword"
                                    placeholder="Password"
                                    name="password"
                                    required autocomplete="current-password"
                                />
                            </div>
                        </div>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center justify-content-center gap-2 form-check">
                                <input
                                    class="form-check-input m-0"
                                    type="checkbox"
                                    value=""
                                    id="flexCheckChecked"
                                    checked
                                />
                                <label
                                    class="form-check-label m-0 mb-0"
                                    for="flexCheckChecked"
                                >
                                    Keep me signed in
                                </label>
                            </div>
                            <a href="#" class="auth-link text-black"
                            >Forgot password?</a
                            >
                        </div>
                        <div class="my-3">
                            <button type="submit"
                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn text-white"

                            >LOGIN</button
                            >
                        </div>
                        <div class="mt-5 mb-2 d-flex">
                            <a
                              type="button"
                              class="btn btn-facebook auth-form-btn flex-grow me-1 d-flex align-items-center justify-content-center"
                            >
                              {{-- <i class="fab fa-signup me-2"></i> --}}
                              Not Registered? SignUp Here.
                        </a>

                          </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <p
                class="text-white font-weight-medium text-center flex-grow align-self-end"
              >
                Copyright &copy; 2020 All rights reserved.
              </p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('backend') }}/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('backend') }}/js/off-canvas.js"></script>
    <script src="{{ asset('backend') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('backend') }}/js/template.js"></script>
    <!-- endinject -->
  </body>
</html>
