@extends('layouts.app')

@section('body-class','profile-page'  )


@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('/img/city-profile.jpg') }} );"></div>
  <div class="main main-raised">
    <div class="profile-content">

      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src=" {{ asset ('/img/faces/christian.jpg') }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Christian Louboutin</h3>
                <h6>Designer</h6>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Studio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                    <i class="material-icons">palette</i> Work
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Favorite
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="{{ asset ('/img/examples/studio-1.jpg') }}" class="rounded">
                <img src="{{ asset ('/img/examples/studio-2.jpg') }}" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="{{ asset ('/img/examples/studio-5.jpg') }}" class="rounded">
                <img src="{{ asset ('/img/examples/studio-4.jpg') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src=" {{ asset ('/img/examples/olu-eletu.jpg') }}" class="rounded">
                <img src=" {{ asset ('/img/examples/clem-onojeghuo.jpg') }}" class="rounded">
                <img src=" {{ asset ('/img/examples/cynthia-del-rio.jpg') }}" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src=" {{asset ('/img/examples/mariya-georgieva.jpg')}}" class="rounded">
                <img src="{{ asset ('/img/examples/clem-onojegaw.jpg') }}" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src=" {{ asset ('/img/examples/mariya-georgieva.jpg')}}" class="rounded">
                <img src=" {{ asset ('/img/examples/studio-3.jpg') }}" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src=" {{ asset ('/img/examples/clem-onojeghuo.jpg') }}" class="rounded">
                <img src=" {{ asset ('/img/examples/olu-eletu.jpg') }}" class="rounded">
                <img src=" {{ asset ('/img/examples/studio-1.jpg') }}" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>

@endsection
