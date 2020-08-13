
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="#">ShopPlus+</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user-alt"></i> Collins@gmail.com
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Order</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item py-1 mx-1"><a class="nav-link btn btn-primary text-white" href="{{ route('user.login')}}">Login</a>
            </li>
            <li class="nav-item py-1 mx-1"><a class="nav-link btn btn-outline-primary" href="{{ route('user.signup')}}"> SignUp </a>
            </li>
        </ul>
    <span class="navbar-text "><a href="#"><i class="fa fa-shopping-cart"></i>
        <sup class="badge badge-danger">1</sup> </a>
    </span>
  </div>
</nav>

