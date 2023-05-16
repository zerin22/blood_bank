<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Register</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('backend') }}/vendors/base/vendor.bundle.base.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon.png" />

    <style>
        input{
            border-radius: 20px !important;
        }
        .rounded-option {
            padding: 10px !important;
            border-radius: 20px !important;
            background-color: white !important;
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

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Registered As</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" name="role" style="border-radius: 20px">
                                    <option value="user" class="rounded-option">User</option>
                                    <option value="hospital" class="rounded-option">Hospital</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    placeholder="Name"
                                    name="name" :value="old('name')"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input
                                    type="email"
                                    class="form-control form-control border-left-0"
                                    placeholder="Email"
                                    name="email" :value="old('email')"
                                />
                            </div>
                            @error('email')
                                <span class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                                <input
                                    type="number"
                                    class="form-control form-control border-left-0"
                                    placeholder="Your Age"
                                    name="age" :value="old('age')"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
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

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NID</label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control form-control border-left-0"
                                    placeholder="NID"
                                    name="nid" :value="old('nid')"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male">
                                    <label class="form-check-label">Male</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <label class="form-check-label">Female</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="other">
                                    <label class="form-check-label">Other</label>
                                  </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input
                                    type="password"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputPassword"
                                    placeholder="Password"
                                    name="password"
                                    required autocomplete="current-password"
                                />
                            </div>
                            @error('password')
                                <span class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input
                                    type="password"
                                    class="form-control form-control border-left-0"
                                    id="exampleInputPassword"
                                    placeholder="Confirm Password"
                                    name="password_confirmation"
                                    autocomplete="new-password"
                                />
                            </div>
                            @error('password_confirmation')
                                <span class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="my-2 d-flex justify-content-between align-items-center">
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
                        </div> --}}
                        <div class="my-3">
                            <button type="submit"
                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn text-white">
                            Submit
                            </button>
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
