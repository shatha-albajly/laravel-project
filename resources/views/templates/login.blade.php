@extends('_header')
<!-- log in -->
<section class="login bg-white p-5" id="log-in">
    <div class="container">
        <div class="col-md-6 mx-auto bg-light p-4 rounded-3 mt-5 shadow">
            <h3 class="text-center text-dark">log in to your account</h3>
            <p class="text-center">
                Don't have an account yet?
                <span class="text-primary"><a ref="{{route('signup')}}">Register here</a>
                </span>
            </p>
            @if(session()->has('message')){
            <p class="alert alert-danger">{{ session()->get('message') }}</p>
            }
            @endif
            @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>

            @endforeach

            @endif
            <form class="p-1" action="{{ route('do_login') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="Email Address or Username" />
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label d-flex justify-content-between" for="exampleCheck1">
                        <p>Stay logged in</p>
                        <p class="text-primary">Forget password?</p>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill w-100">
                    Log in
                </button>
            </form>
        </div>
    </div>
</section>


@extends('_footer')