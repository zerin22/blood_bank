@extends('layouts.backend.app_backend')
@section('title', 'Dashboard')

@section('content')

<div class="row g-4">
    <div class="col-lg-3">
      <aside>
        <div class="card">
          <div class="card-body">
            <div class="text-center">
                <img id="img_id" src="{{ asset(Auth::user()->image ?? 'backend/images/faces/face10.jpg') }}" class="profile_rounded" alt="...">
                <input type="file" onchange="document.getElementById('img_id').src=window.URL.createObjectURL(this.files[0])" name="image" >
            </div>
            <hr>
          </div>
        </div>
      </aside>
    </div>

    <div class="col-lg-9">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-5">
              <h5 class="bg-light p-3 font-bold text-dark mb-4">
                Create Staff
              </h5>

              <div class="d-flex flex-column gap-4">
                <div>
                  <label>Name</label>
                  <input type="text" class="form-control w-100" />
                </div>
                <div>
                  <label>Mail Id</label>
                  <input type="email" class="form-control w-100" />
                </div>
                <div>
                  <label>Phone number</label>
                  <input type="number" class="form-control w-100" />
                </div>
                <div>
                  <label>Password</label>
                  <input type="number" class="form-control w-100" />
                </div>
                <div>
                  <label>Role</label>
                  <select class="form-select">
                    <option value="" disabled>--select role--</option>
                  </select>
                </div>
                <div>
                  <label>Image</label>
                  <button
                    for="image"
                    class="add__new__image__btn bg-white w-100 px-4 py-3 text-center"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                    + Add new image
                  </button>
                </div>
                <div
                  class="d-flex align-items-center justify-content-center gap-4"
                >
                  <button
                    class="btn btn-success text-white py-2 rounded-3"
                  >
                    Save
                  </button>
                  <button
                    class="btn btn-danger text-white py-2 rounded-3"
                  >
                    Cancel
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div
                class="table-responsive table__border__radius mt-3"
              >
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th>S.No</th>
                      <th>Staff Name</th>
                      <th>Role</th>
                      <th>Mobile Number</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Staff name</td>
                      <td>Admin</td>
                      <td>+91-9876543210</td>
                      <td>
                        <button
                          class="btn btn-sm bg-white shadow-sm text-secondary p-1"
                        >
                          <i
                            class="fa fa-edit"
                            style="font-size: 10px"
                          ></i>
                        </button>
                        <button
                          class="btn btn-sm bg-white shadow-sm text-danger p-1"
                        >
                          <i
                            class="fa fa-times"
                            style="font-size: 10px"
                          ></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
