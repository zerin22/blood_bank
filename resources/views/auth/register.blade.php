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

    <style>
        input{
            border-radius: 20px !important;
        }
    </style>

  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">
                    <h4>Register Here</h4>
                    <h6 class="font-weight-light">Happy to see you here!</h6>
                    <form class="pt-3"method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail">Name</label>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputEmail"
                                    placeholder="Name"
                                    name="name" :value="old('name')"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <div class="input-group">
                                <input
                                    type="email"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputEmail"
                                    placeholder="Email"
                                    name="email" :value="old('email')"
                                />
                            </div>
                            @error('email')
                                <span class="alert-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">NID</label>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputEmail"
                                    placeholder="NID"
                                    name="nid" :value="old('nid')"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <div class="input-group">
                                <input
                                    type="number"
                                    class="form-control form-control border-left-0" id="exampleInputEmail"
                                    placeholder="Your Age"
                                    name="age" :value="old('age')"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label >Phone</label>
                            <div class="input-group">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    placeholder="Phone"
                                    name="phone" :value="old('phone')"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    placeholder="Your Addess"
                                    name="address" :value="old('address')"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="male">
                                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="female">
                                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="other" >
                                    <label class="form-check-label" for="inlineCheckbox3">Other</label>
                                  </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputPassword"
                                    placeholder="Password"
                                    name="password"
                                    required autocomplete="current-password"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Confirm Password</label>
                            <div class="input-group">
                                <input
                                    type="password"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputPassword"
                                    placeholder="Confirm Password"
                                    name="password_confirmation" required
                                    autocomplete="new-password"
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

                            >Submit</button
                            >
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
