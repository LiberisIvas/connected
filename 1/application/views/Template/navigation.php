<?php  if ($this->session->userdata('loggedin_user')==""){
    redirect();
} ?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="/logged"><img class="image_hag"  alt="hag" src="Assets/images/hag.png"/></a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Loggedout">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="document.getElementById('Messages_btn').submit();">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="document.getElementById('profile').submit();">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter users by
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="#" onclick="document.getElementById('head').submit();">Head</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('hand').submit();">Hand</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('ear').submit();">Ear</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('eye').submit();">Eye</a>
           <a class="dropdown-item" href="#" onclick="document.getElementById('body').submit();">Body</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('other').submit();">Other</a>
        </div>

      </li>
    </ul>
     <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>


</nav>