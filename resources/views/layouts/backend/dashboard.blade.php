@extends('layouts.backend.app_backend')
@section('title', 'Dashboard')

@section('content')
<div class="row g-3">
    <div class="col-lg-4">
        <div class="card border-warning stats__card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                <h5 class="mb-0 title">Total Orders</h5>

                </div>
                <div class="mt-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center">
                    <h6 class="fs-4 value">136.000 KD</h6>
                    <span
                        class="percentage__badge bg-success-light text-success mx-2"
                        >+16 <sup>%</sup>
                    </span>
                    <svg
                        width="12"
                        height="11"
                        viewBox="0 0 12 11"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                        fill="#66D184"
                        />
                    </svg>
                    </div>
                    <span class="text-secondary fs-12"
                    >Today's Order</span
                    >
                </div>

                <div class="stats__card__icon bg-warning ms-auto">
                    <svg
                    width="28"
                    height="28"
                    viewBox="0 0 38 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                        fill="white"
                    />
                    <path
                        d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                        fill="white"
                    />
                    </svg>
                </div>
                </div>
                    <!-- </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-warning stats__card">
                    <div class="card-body"> -->
                <div class="d-flex align-items-center second-merge-box">
                <h5 class="mb-0 title">Total Sales</h5>

                </div>
                <div class="mt-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center">
                    <h6 class="fs-4 value">2150.000KD</h6>
                    <span
                        class="percentage__badge bg-success-light text-success mx-2"
                        >+16 <sup>%</sup>
                    </span>
                    <svg
                        width="12"
                        height="11"
                        viewBox="0 0 12 11"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                        fill="#66D184"
                        />
                    </svg>
                    </div>
                    <span class="text-secondary fs-12"
                    >Today's Sales</span
                    >
                </div>

                <div class="stats__card__icon bg-success ms-auto">
                    <svg
                    width="28"
                    height="28"
                    viewBox="0 0 38 30"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                        fill="white"
                    />
                    <path
                        d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                        fill="white"
                    />
                    </svg>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Influencer outstanding</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-3 value">215</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
                <!-- </div>
                </div>
            </div>



            <div class="col-lg-3">
                <div class="card border-success stats__card">
                <div class="card-body"> -->
            <div class="d-flex align-items-center second-merge-box">
            <h5 class="mb-0 title">Paid Amount to Influencer</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Vendor Outstanding</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-3 value">215</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
                <!-- </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card border-success stats__card">
                <div class="card-body"> -->
            <div class="d-flex align-items-center second-merge-box">
            <h5 class="mb-0 title">Paid amount to Vendor</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Delivery for today</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Sales return requests</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Approved Requests</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-primary stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Total Customers</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <h6 class="fs-4 value">032</h6>
                <span class="text-secondary fs-12"
                >Today's Sales</span
                >
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-success stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Stock Count</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <div class="d-flex align-items-center">
                <h6 class="fs-4 value">2150.000 KD</h6>
                <span
                    class="percentage__badge bg-danger-light text-danger mx-2"
                    >-16 <sup>%</sup>
                </span>
                <svg
                    width="12"
                    height="11"
                    viewBox="0 0 12 11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    style="transform: rotate(180deg)"
                >
                    <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.634523 10.4344L1.20012 11L6.00012 6.2L10.8001 11L11.3657 10.4344L6.28332 5.3512H5.71692L0.634523 10.4344ZM0.634523 5.6344L1.20012 6.2L6.00012 1.4L10.8001 6.2L11.3657 5.6344L6.28332 0.5512H5.71692L0.634523 5.6344Z"
                    fill="#FC3C3C"
                    />
                </svg>
                </div>
                <span class="text-secondary fs-12">Today's</span>
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-purple stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Total Influencers</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <div>
                <h6 class="fs-4 value">136</h6>
                <span class="text-secondary fs-12"
                >Today's Sales</span
                >
            </div>

            <div class="stats__card__icon bg-success ms-auto">
                <svg
                width="28"
                height="28"
                viewBox="0 0 38 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M37.9556 26.7056L32.6512 21.4012L30 18.75L22.0331 26.7169L24.6862 29.3681L30 24.0544L35.3025 29.3569L37.9556 26.7056ZM9.375 16.875H16.875V20.625H9.375V16.875Z"
                    fill="white"
                />
                <path
                    d="M37.5 0H0V3.75H3.75V24.375C3.75149 25.3691 4.14705 26.3221 4.84999 27.025C5.55293 27.7279 6.50589 28.1235 7.5 28.125H16.875L30 15L33.75 18.75V3.75H37.5V0ZM7.5 3.75H30V9.375L15 24.375H7.5V3.75Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row mt-2 g-3">
    <div class="col-lg-9 stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="d-lg-flex align-items-center mb-3">
            <h4 class="card-title mb-lg-0">Sales Analytics</h4>

            <div
                class="d-flex align-items-center ms-auto mb-2 mb-lg-0"
            >
                <button class="btn btn-sm bg-light">This week</button>
                <button class="btn btn-sm bg-light opacity-25">
                Last week
                </button>
                <button class="btn btn-sm bg-light opacity-25">
                Last month
                </button>
            </div>
            </div>
            <div class="chart-container" style="height: 200px">
            <canvas id="areachart-multi"></canvas>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-3 d-flex flex-column justify-content-between">
        <div class="card border-purple stats__card mb-1">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Total Vendors</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <h6 class="fs-1 value">136</h6>

            <div class="stats__card__icon bg-lime ms-auto">
                <svg
                width="31"
                height="30"
                viewBox="0 0 31 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M12.8237 0.673388C14.3235 0.096501 15.984 0.096501 17.4838 0.673388L28.2189 4.80127C28.8309 5.03693 29.3572 5.45248 29.7283 5.99317C30.0994 6.53386 30.2981 7.17431 30.298 7.83012V22.1652C30.2981 22.821 30.0994 23.4615 29.7283 24.0022C29.3572 24.5429 28.8309 24.9584 28.2189 25.1941L17.4838 29.3241C15.984 29.901 14.3235 29.901 12.8237 29.3241L2.09077 25.1941C1.47836 24.9588 0.951643 24.5433 0.580093 24.0026C0.208544 23.4619 0.00960833 22.8213 0.00952148 22.1652V7.83012C0.00960833 7.17405 0.208544 6.53342 0.580093 5.9927C0.951643 5.45199 1.47836 5.03658 2.09077 4.80127L12.8237 0.673388V0.673388ZM16.7071 2.6919C15.7072 2.30731 14.6003 2.30731 13.6004 2.6919L10.6062 3.84502L22.6999 8.42291L26.9143 6.61858L16.7071 2.68973V2.6919ZM28.1345 8.44671L16.2355 13.5503V27.457C16.3956 27.4159 16.5514 27.3662 16.7071 27.3056L27.4422 23.1777C27.6462 23.099 27.8215 22.9603 27.9451 22.78C28.0687 22.5996 28.1348 22.386 28.1345 22.1674V8.45103V8.44671ZM14.072 27.4549V13.5503L2.17298 8.44887V22.1652C2.17275 22.3839 2.23879 22.5974 2.36237 22.7778C2.48596 22.9582 2.66131 23.0968 2.86529 23.1756L13.6004 27.3034C13.7562 27.364 13.9119 27.4138 14.072 27.4549V27.4549ZM3.39318 6.61858L15.1538 11.6594L19.8355 9.65175L7.57515 5.00896L3.39318 6.61858Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>

        <div class="card border-purple stats__card">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h5 class="mb-0 title">Total Inventory Count</h5>

            </div>
            <div class="mt-3 d-flex align-items-center">
            <h6 class="fs-1 value">136</h6>

            <div class="stats__card__icon bg-secondary ms-auto">
                <svg
                width="31"
                height="30"
                viewBox="0 0 31 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                    d="M12.8237 0.673388C14.3235 0.096501 15.984 0.096501 17.4838 0.673388L28.2189 4.80127C28.8309 5.03693 29.3572 5.45248 29.7283 5.99317C30.0994 6.53386 30.2981 7.17431 30.298 7.83012V22.1652C30.2981 22.821 30.0994 23.4615 29.7283 24.0022C29.3572 24.5429 28.8309 24.9584 28.2189 25.1941L17.4838 29.3241C15.984 29.901 14.3235 29.901 12.8237 29.3241L2.09077 25.1941C1.47836 24.9588 0.951643 24.5433 0.580093 24.0026C0.208544 23.4619 0.00960833 22.8213 0.00952148 22.1652V7.83012C0.00960833 7.17405 0.208544 6.53342 0.580093 5.9927C0.951643 5.45199 1.47836 5.03658 2.09077 4.80127L12.8237 0.673388ZM16.7071 2.6919C15.7072 2.30731 14.6003 2.30731 13.6004 2.6919L10.6062 3.84502L22.6999 8.42291L26.9143 6.61858L16.7071 2.68973V2.6919ZM28.1345 8.44671L16.2355 13.5503V27.457C16.3956 27.4159 16.5513 27.3662 16.7071 27.3056L27.4422 23.1777C27.6462 23.099 27.8215 22.9603 27.9451 22.78C28.0687 22.5996 28.1348 22.386 28.1345 22.1674V8.45103V8.44671ZM14.072 27.4549V13.5503L2.17298 8.44887V22.1652C2.17275 22.3839 2.23879 22.5974 2.36238 22.7778C2.48596 22.9582 2.66131 23.0968 2.86529 23.1756L13.6004 27.3034C13.7562 27.364 13.9119 27.4138 14.072 27.4549ZM3.39318 6.61858L15.1538 11.6594L19.8355 9.65175L7.57515 5.00897L3.39318 6.61858Z"
                    fill="white"
                />
                </svg>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row mt-2 g-3">
    <div class="col-lg-6">
        <div class="card border-0">
        <div class="card-body p-3 p-lg-4">
            <div class="d-lg-flex align-items-center">
            <h4 class="card-title mb-3 mb-lg-0">
                Best Selling Products
            </h4>

            <div class="d-flex align-items-stretch ms-lg-auto">
                <input
                type="text"
                name="daterange"
                value="01/01/2021 - 01/15/2022"
                class="ms-auto bg-light border-0 p-2 w-100"
                />
                <button
                class="btn btn-sm bg-light ms-lg-2 text-secondary"
                >
                <i class="fa fa-filter"></i>
                </button>
            </div>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Product Name</th>
                    <th>Sales (pcs)</th>
                    <th>Price</th>
                    <th class="text-end">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <div class="d-flex align-items-center gx-2">
                        <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                        />
                        <div class="ms-3">
                        <h6 class="mb-1">Sports shoe</h6>
                        <p class="mb-0">SKU12457</p>
                        </div>
                    </div>
                    </td>
                    <td>1289</td>
                    <td>3.25 KWD</td>

                    <td class="text-end">
                    <label
                        class="badge text-success rounded-2 bg-success-light"
                    >
                        <i class="fa fa-circle"></i>
                        In stock
                    </label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex align-items-center gx-2">
                        <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                        />
                        <div class="ms-3">
                        <h6 class="mb-1">Sports shoe</h6>
                        <p class="mb-0">SKU12457</p>
                        </div>
                    </div>
                    </td>
                    <td>1289</td>
                    <td>3.25 KWD</td>

                    <td class="text-end">
                    <label
                        class="badge text-warning rounded-2 bg-warning-light"
                    >
                        <i class="fa fa-circle"></i>
                        Out of stock
                    </label>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0">
        <div class="card-body p-3 p-lg-4">
            <div class="d-lg-flex align-items-center">
            <h4 class="card-title mb-3 mb-lg-0">Recent Orders</h4>

            <div class="d-flex align-items-stretch ms-lg-auto">
                <input
                type="text"
                name="daterange"
                value="01/01/2018 - 01/15/2018"
                class="ms-auto bg-light border-0 p-2 w-100"
                />
                <button
                class="btn btn-sm bg-light ms-lg-2 text-secondary"
                >
                <i class="fa fa-filter"></i>
                </button>
            </div>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Order ID</th>
                    <th>Store Name</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>#ID12457</td>
                    <td>Shop Name</td>
                    <td>02-07-2022</td>
                    <td>3.25 KWD</td>

                    <td class="text-end">
                    <label
                        class="badge text-warning rounded-2 bg-warning-light"
                    >
                        Cancelled
                    </label>
                    </td>
                </tr>
                <tr>
                    <td>#ID12457</td>
                    <td>Shop Name</td>
                    <td>02-07-2022</td>
                    <td>3.25 KWD</td>

                    <td class="text-end">
                    <label
                        class="badge text-success rounded-2 bg-success-light"
                    >
                        Delivered
                    </label>
                    </td>
                </tr>
                <tr>
                    <td>#ID12457</td>
                    <td>Shop Name</td>
                    <td>02-07-2022</td>
                    <td>3.25 KWD</td>

                    <td class="text-end">
                    <label
                        class="badge text-purple rounded-2 bg-purple-light"
                    >
                        Pending
                    </label>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row mt-2 g-3">
    <div class="col-lg-6">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">Delivery for today</h4>

            <button
                class="btn btn-sm bg-light ms-auto text-secondary"
            >
                <i class="fa fa-filter"></i>
            </button>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Invoice Number</th>
                    <th>Customer Name</th>
                    <th>Area Of Delivery</th>
                    <th>Delivery Date</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>
                    <p class="text-truncate" style="width: 200px">
                        Akshya Nagar, 1st Block 1st Cross, Rammurthy
                        nagar, Ba...
                    </p>
                    </td>
                    <td>03-07-2022</td>

                    <td class="text-center">
                    <label
                        class="badge text-success rounded-2 bg-success-light"
                    >
                        Active
                    </label>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">
                Number of Ordered items that need to be received
            </h4>

            <button
                class="btn btn-sm bg-light ms-auto text-secondary"
            >
                <i class="fa fa-filter"></i>
            </button>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Item Name</th>
                    <th>Vendor Name</th>
                    <th>Invoice Number</th>
                    <th>Delivery Date</th>
                    <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>INV001</td>
                    <td>03-07-2022</td>
                    <td class="text-center">
                    <label
                        class="badge text-success rounded-2 bg-success-light"
                    >
                        Active
                    </label>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row mt-2 g-3">
    <div class="col-lg-9">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">New Customers</h4>

            <button
                class="btn btn-sm bg-light ms-auto text-secondary"
            >
                <i class="fa fa-filter"></i>
            </button>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Mobile.No</th>
                    <th>Address</th>
                    <th>Enrolled On</th>
                    <th class="text-center">Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>
                    <p class="text-truncate" style="width: 200px">
                        Akshya Nagar, 1st Block 1st Cross, Rammurthy
                        nagar, Ba...
                    </p>
                    </td>
                    <td>03-07-2022</td>

                    <td class="text-center">
                    <label
                        class="badge text-success rounded-2 bg-success-light"
                    >
                        Active
                    </label>
                    </td>

                    <td>
                    <button
                        class="btn btn-sm btn-primary text-white d-flex align-items-center"
                    >
                        <span>Edit</span>
                        <i
                        class="fas fa-pencil-alt ms-1"
                        style="font-size: 10px"
                        ></i>
                    </button>
                    </td>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>
                    <p class="text-truncate" style="width: 200px">
                        Akshya Nagar, 1st Block 1st Cross, Rammurthy
                        nagar, Ba...
                    </p>
                    </td>
                    <td>03-07-2022</td>

                    <td class="text-center">
                    <label
                        class="badge text-danger rounded-2 bg-danger-light"
                    >
                        Inactive
                    </label>
                    </td>

                    <td>
                    <button
                        class="btn btn-sm btn-primary text-white d-flex align-items-center"
                    >
                        <span>Edit</span>
                        <i
                        class="fas fa-pencil-alt ms-1"
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

    <div class="col-lg-3 stretch-card">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">Top Search Term</h4>

            <button
                class="btn btn-sm bg-light ms-auto text-secondary"
            >
                <i class="fas fa-sliders-h"></i>
            </button>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Product Name</th>
                    <th>Search Iteration</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Black shoe</td>
                    <td>123</td>
                </tr>
                <tr>
                    <td>Black shoe</td>
                    <td>123</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row mt-4 gx-5 gy-4">
    <div class="col-lg-4">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">New Added Vendors</h4>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Mobile.No</th>
                    <th>Vendor Id</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>VID00045</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>VID00045</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">New Added Influencers</h4>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>S.No</th>
                    <th>Customer Name</th>
                    <th>Mobile.No</th>
                    <th>Vendor Id</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>VID00045</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Shamseer</td>
                    <td>(+91) 9876543210</td>
                    <td>VID00045</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-flex align-items-center">
            <h4 class="card-title mb-0">Last search Term</h4>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <tbody>
                <tr>
                    <td>
                    <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                    />
                    </td>
                    <td>Black shoe</td>
                    <td>
                    <button
                        class="btn btn-success btn-sm text-white"
                    >
                        View
                        <i
                        class="fa fa-eye"
                        style="font-size: 10px"
                        ></i>
                    </button>
                    </td>
                </tr>

                <tr>
                    <td>
                    <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                    />
                    </td>
                    <td>Black shoe</td>
                    <td>
                    <button
                        class="btn btn-success btn-sm text-white"
                    >
                        View
                        <i
                        class="fa fa-eye"
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

<div class="row mt-4 gx-5 gy-4">
    <div class="col-lg-6">
        <div class="card border-0">
        <div class="card-body p-3 p-lg-4">
            <div class="d-lg-flex align-items-center">
            <h4 class="card-title mb-3 mb-lg-0">
                Least Selling Products
            </h4>

            <div class="d-flex align-items-stretch ms-lg-auto">
                <input
                type="text"
                name="daterange"
                value="01/01/2021 - 01/15/2022"
                class="ms-auto bg-light border-0 p-2 w-100"
                />
                <button
                class="btn btn-sm bg-light ms-lg-2 text-secondary"
                >
                <i class="fa fa-filter"></i>
                </button>
            </div>
            </div>

            <div class="table-responsive table__border__radius mt-3">
            <table class="table">
                <thead class="bg-light">
                <tr>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Product Code</th>
                    <th>Sales (pcs)</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <h6 class="mb-1">Sports shoe</h6>
                    </td>
                    <td>
                    <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                    />
                    </td>
                    <td>SKU12457</td>
                    <td>1289</td>
                    <td>3.25 KWD</td>
                </tr>
                <tr>
                    <td>
                    <h6 class="mb-1">Sports shoe</h6>
                    </td>
                    <td>
                    <img
                        src="images/product-image.png"
                        alt="product image"
                        class="table__product__image mt-0"
                    />
                    </td>
                    <td>SKU12457</td>
                    <td>1289</td>
                    <td>3.25 KWD</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-6 stretch-card">
        <div class="card border-0">
        <div class="card-body">
            <div class="d-lg-flex align-items-center mb-3">
            <h4 class="card-title mb-lg-0">Conversion Rate</h4>

            <div
                class="d-flex align-items-center ms-auto mb-2 mb-lg-0"
            >
                <button
                class="btn btn-sm bg-light ms-lg-2 text-secondary"
                >
                <i class="fa fa-filter"></i>
                </button>
            </div>
            </div>

            <div class="chart-container" style="height: 220px">
            <canvas id="areaChart"></canvas>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
