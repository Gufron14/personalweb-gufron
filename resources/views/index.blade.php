@extends('layout.apps')

@section('content')
   
    {{-- HOME --}}
    <div class="d-flex">
        <div id="home" class="mt-5">
            <div class="container p-5 m-5">
                <h1 class="fw-bold">Hi, I am <br> Gufron👋 </h1>
                <h5 class="fw-semibold text-muted mb-3">Graphic Designer</h5>
                <p class="">Informatics Engineering Student <br>
                    at International Women University <br>
                    in Bandung, West Java.</p>
                <ul class="list-unstyled list-inline mt-3">
                    <li class="list-inline-item"><a href="https://www.facebook.com/atepgufron?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="https://instagram.com/obliviate.gf?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCQD0FasqFqwjImcnQhpPaEw"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/Gufron14"><i class="fab fa-github"></i></a></li>
                    <li class="list-inline-item"><a href="https://wa.me/6287780752099"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
                <a href="#" class="btn btn-warning fw-bold mt-3">
                    Follow Me😉
                </a>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/img/blob2.png') }}" alt="" width="400" class="mt-5 m-5">
        </div>
    </div>

    {{-- ABOUT --}}
    <div class="d-flex">
        <div id="about" class="p-5 m-5">
                <h3 class="fw-semibold mb-3">About Me</h3>
                <p>Informatics Engineering Student. <br>
                    Interested in the world of Programming and Graphic Design. <br>
                    Working part time in a company as a Graphic Designer.</p>
        </div>
        <div id="about" class="p-5 m-5">
            <h4 class="fw-semibold mb-3">Education</h4>
            <ul>
                <li class="fw-bold">2008 - 2014</li>
                <p>SDN 01 Sirnagalih</p>
                <li class="fw-bold">2014 - 2017</li>
                <p>SDN 01 Sirnagalih</p>
            </ul>
        </div>
    </div>
    
    {{-- SKILLS --}}
    <div id="skills" class="mb-5 p-5 m-5">
        <h3 class="fw-semibold mb-3">Skills</h3>
        <ul>
            <li>Adobe Photoshop
                <div class="progress mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 90%"></div>
                  </div>
            </li>
            <li>Adobe Premiere
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
            </li>
            <li>Microsoft Office
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 80%"></div>
                  </div>
            </li>
            <li>HTML
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 85%"></div>
                  </div>
            </li>
            <li>CSS
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
            </li>
            <li>Laravel 9
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 35%"></div>
                  </div>
            </li>
            <li>Bootstrap 5
                <div class="progress mb-3"" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
            </li>
          </ul>         
    </div>
    
    {{-- PORTFOLIO --}}
    <div id="portfolio" class="mb-5 p-5 m-5">
        <h3 class="fw-semibold mb-3">Portfolio</h3>  
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/1.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/2.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    {{-- CONTACT --}}
    <div id="contact" class="mb-5 p-5 m-5">
        <h3 class="fw-semibold mb-3">Contact Me</h3>
        <div>
            <form action="" method="POST">
            @csrf
                <div class="card mx-auto w-50">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="col-md-15">
                            <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Write Message Here" required>{{ old('message') }}</textarea>

                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary mt-3">
                            Send Message
                        </button>
                    </div>
                  </div>
            </form>
        </div>
    </div>

@endsection