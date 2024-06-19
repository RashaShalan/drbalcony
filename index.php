<!DOCTYPE html>
<html>
<head>
<title>Dr balcony - code test</title>
<link rel="stylesheet" href="style/styles.css">
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/scripts.js"></script>
</head>
<body>


<nav class="sticky navbar">
	

	<input type="checkbox" id="nav" class="hidden" />
	<label for="nav" class="nav__open"><i></i><i></i><i></i></label>
	<div class="nav">
		<ul class="nav__items">
			<li class="nav__item"><a href="index.php" class="nav__link">Register</a></li>
			<li class="nav__item"><a href="Order.php" class="nav__link">Order form</a></li>
			<li class="nav__item"><a href="report.php" class="nav__link">Report</a></li>
		</ul>
	</div>
</nav>

<main>
	<section class="home" id="mainDiv">
	<!-- Registration 3 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 bsb-tpl-bg-platinum">
        <div class="d-flex flex-column justify-content-between h-100 p-3 p-md-4 p-xl-5">
         <!--  <h3 class="m-0">Welcome!</h3> -->
          <img class=  " loading="lazy" src="./images/images.jpeg" height="400" alt="Register image">
         <!--  <p class="mb-0">Not a member yet? <a href="#!" class="link-secondary text-decoration-none">Register now</a></p> -->
        </div>
      </div>
      <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
        <div class="p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Registration</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                <span id="errorLog" class="error"></span>
              </div>
            </div>
          </div>
          <form action="register.php" method="post" id="registerForm">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
              </div>
              <div class="col-12">
                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                  <label class="form-check-label text-secondary" for="iAgree">
                    I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="button" onclick="register()">Sign up</button>
                </div>
              </div>
            </div>
          </form>
         
       
        </div>
      </div>
    </div>
  </div>
</section>        
	</section>
	<!-- <section class="about">
		<div id="about">
			<h1>About</h1>
		</div>
	</section>
	<section class="portfolio">
		<div id="portfolio">
			<h1>Portfolio</h1>
		</div>
	</section>
	<section class="contact">
		<div id="contact">
			<h1>Contact</h1>
		</div>
	</section> -->
</main>




</body>
</html>