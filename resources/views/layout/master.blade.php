@extends('_header')

<!-- Profile -->
<section class="profile my-5 mx-auto" id="profile">
    <div class="container row mx-auto justify-content-between" style="margin-top: 5rem">
        <div
            class="d-flex flex-column col-12 col-md-3 flex-shrink-0 py-3 bg-light rounded mx-auto shadow w-sm-100 mb-5 mb-md-0   ">
            <div class="p-1 w-100 d-flex justify-content-center ">
                <img src="../images/profile.jpg" alt="" width="120" height="120" class="rounded-circle  mx-auto " />
            </div>

            <div class=" mx-auto">

                <p class="fs-6 fw-bold mx-auto text-primary ">Shatha Al-Bajly</p>
            </div>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link link-dark" aria-current="page">

                        <svg class="bi me-2" width="16" height="16">

                            <use xlink:href="#home"></use>
                        </svg>
                        Personal Data
                    </a>
                </li>
                <li>
                    <a href="{{route('experience')}}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Experience
                    </a>
                </li>
                <li>
                    <a href="{{route('skills')}}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Skills
                    </a>
                </li>
                <li>
                    <a href="{{route('qualification')}}" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Educational and Courses
                    </a>
                </li>

            </ul>
        </div>
        @yield('content')
    </div>
    </div>
</section>

@extends('_footer')