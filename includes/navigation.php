<nav class="navbar navbar-expand-lg navbar-light bg-light text-uppercase">
  <a class="navbar-brand" href="#">Nav<span class="text-primary">bar</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
			<li class="nav-item">
		    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="/">Home</a>
		  </li>
			<li class="nav-item">
		    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
		  </li>
      <li class="nav-item">
		    <a class="nav-link <?php if ($CURRENT_PAGE == "Color Scheme") {?>active<?php }?>" href="custom.php">Color Scheme</a>
		  </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
			<li class="nav-item">
		    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contact.php">Contact</a>
		  </li>
    </ul>
  </div>
</nav>
