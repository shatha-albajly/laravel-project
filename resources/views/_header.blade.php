<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <title>Job Finder Website</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light py-2 hover fixed-top border-bottom fixed-top bg-white">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand fw-bold text-primary">E-Job</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a href="{{route('index')}}" style="color: #2d2d2d" class="nav-link text-primary">Home</a>

                    </li>


                    <li class="nav-item">
                        <a href="{{route('allJobs')}}" style="color: #2d2d2d" class="nav-link">All Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('partners')}}" class="nav-link" style="color: #2d2d2d">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('aboutUs')}}" style="color: #2d2d2d" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contactUs')}}" style="color: #2d2d2d" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('services')}}" style="color: #2d2d2d" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}" style="color: #2d2d2d" class="nav-link">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('signup')}}" class="nav-link" style="color: #2d2d2d">Sign up</a>
                    </li>
                    <li class="dropdown nav-item mx-3">
                        <a href="{{route('profile')}}"
                            class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/images/profile.jpg" alt="" width="32" height="32" class="rounded-circle me-2" />
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li>
                                <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('dashboard')}}">Personal Infomation</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('experience')}}">Experience</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('skills')}}">Skills</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="{{route('qualification')}}">Qualification</a>
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                        </ul>
                    </li>

                    <li class="nav-item language">
                        <select class="form-select language-select" aria-label="Default select example">
                            <option value="en">English</option>
                            <option value="ar">Arabic</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </nav>