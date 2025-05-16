<!doctype html>
<html lang="en">

<head>
	<title>RecipeFinder</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
     <meta name="robots" content="noindex, follow">
</head>

<body>

	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar">
			<div class="custom-menu">
				<button type="button" id="sidebarCollapse" class="btn btn-primary">
					<i class="fa fa-bars"></i>
					<span class="sr-only">Toggle Menu</span>
				</button>
			</div>
			<div class="p-4 pt-5">
				<h1><a href="index.html" class="logo">RecipeFinder</a></h1>
				<ul class="list-unstyled components mb-5">
					<li><a href="/home">Home</a></li>
					<li><a href="/Recipe"> manage Recipes</a></li>
					<li><a href="/category"> manage Categories</a></li>
					<li><a href="/slider"> manage Slider</a></li>

					<li><a href="/logout">Logout</a></li>


				

				<div class="footer">
					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script>
					</p>
				</div>

			</div>
		</nav>
		 

		<!-- Page Content -->
		<div id="content" class="p-4 p-md-5 pt-5">
		   @yield('main')


		
		</div>
	</div>  

	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

	<script src="js/main.js"></script>



	
</body>

</html>