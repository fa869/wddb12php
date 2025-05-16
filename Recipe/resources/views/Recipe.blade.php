
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecipeFinder</title>
    <!--  external css link -->
 
    <link rel="stylesheet" href="css/Recipe.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
 
</head>

<body>


     <nav class="navbar navbar-expand-sm bg-info sticky-top">
            <div class="container">
                 <a href="" class="navbar-brand"><img class="img-brand" src="assets/brands.png" alt="Logo"></a>

                 <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavbarId" >
                 <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="NavbarId">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">categories</a>
                            <div class="dropdown-menu">
                                 <a class="dropdown-item" href="/breakfast">Breakfast</a>
                                <a class="dropdown-item" href="/lunch">Lunch</a>
                                <a class="dropdown-item" href="/dinner">Dinner</a>
                                <a class="dropdown-item" href="/snacks">Snacks</a>
                                <a class="dropdown-item" href="/desserts">Desserts</a>
                           </div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/upload') }}">Upload Recipe</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{url('details') }}">View Recipe</a></li> 
                         <li class="nav-item"><a class="nav-link" href="{{url('contact-us')}}">Contact Us</a></li>
                         <li class="nav-item"><a class="nav-link" href="">Recipe List</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{url('listing')}}">All Recipes</a></li>
                     

                        <li class="nav-item dropdown">
   
                   </ul>
                     <div class="d-flex align-items-center">
                     <form class="d-flex">
                     <input class="form-control me-2" type="search" placeholder="Enter Ingredients" aria-label="Search">
                     <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                     

                    </div>
                    <a href="/login" class="btn btn-outline-primary ms-3" id="login-btn">LOG IN</a>
                     </div>

                    

                 </div>

            </div>

        </nav>
        <section id="home"> 
 
            <div class="carousel slide" id="someID" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button data-bs-target="#someID" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#someID" data-bs-slide-to="1" ></button>
                <button data-bs-target="#someID" data-bs-slide-to="2" ></button>
              </div>
            <div class="carousel-inner ">
             
                <div class="carousel-item active">
                    <img src="assets/images/background.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption">
                

                    </div>
 
                </div>
                <div class="carousel-item ">
                    <img src="assets/images/slider.jpg" class="d-block w-100" alt="">

                </div>
                <div class="carousel-item">
                    <img src="assets/images/slid.jpg" class="d-block w-100" alt="">

                </div>
                <button class="carousel-control-prev" data-bs-target="#someID" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" data-bs-target="#someID" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>


            </div>

        </div> 

    </section> 
   
   
  <!-- Recipe features  -->
 <section id="featured-recipes" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Featured Recipes</h2>
        <div class="row ">
            <div class="col-md-3 ">
                <div class="card shadow h-100">
                    <img src="assets/images/chickenb.jpeg" class="card-img-top" alt="Biryani">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Biryani</h5>
                        <p class="card-text">Delicious and spicy biryani..</p>
                        <a href="{{url('/details') }}" class="btn btn-warning">View Recipe</a> 
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow h-100">
                    <img src="assets/images/custered.jpeg" class="card-img-top" alt="choclate">
                    <div class="card-body">
                        <h5 class="card-title">Custured Recipe</h5>
                        <p class="card-text">Rich and creamy custered.</p>
                        <a href="#" class="btn btn-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow h-100">
                    <img src="assets/images/sandwitch.jpeg" class="card-img-top" alt="Sandwich">
                    <div class="card-body">
                        <h5 class="card-title">Cheesy Sandwich</h5>
                        <p class="card-text">A quick and delicious sandwich for a perfect snack.</p>
                        <a href="#" class="btn btn-warning">View Recipe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow h-100">
                    <img src="assets/images/kheer.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">kheer recipe</h5>
                        <p class="card-text">Crispy and delicious</p>
                        <a href="#" class="btn btn-warning">View Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
<section id="about">
        <div class="container my-5">
             <div class="row align-item-center">
                <div class="col-md-6">
                    <h1 id="aboutus">About Us</h1>
                    <p>Welcome to <strong>Recipe Finder</strong>, your ultimate destination for discovering delicious and easy-to-make recipes.</p>
                    <p>We provide a variety of recipes with step-by-step instructions, helping you create amazing dishes effortlessly.</p>
                     <a href="/about.us" class="btn btn-primary">Read More</a>
                     <div class="mt-3">
                        <a href="#"class="me-3 text-dark"><i class="fa-brands fa-square-facebook me-3 fs-3"></i></a>
                        <a href="#"class="me-3 text-dark"><i class="fa-brands fa-square-instagram me-3 fs-3"></i></a>
                        <a href="#"class="me-3 text-dark"><i class="fa-brands fa-square-twitter me-3 fs-3"></i></a>


                     </div>

                </div>
                <div class="col-md-6 text-center">
                    <img class="img-fluid rounded " src="assets/images/bac.webp" alt="">
                </div>

             </div>

        </div>
    </section>
    

 
<footer class="bg-secondary text-white py-5"> 
      <div class="container"> 
        <div class="row text-center text-md-start ">
          <div class=" col-12 col-md-4">
          <h1>Recipe Finder</h1>
            <h2>
                Find Recipes......
            </h2>
            <p>&copy; 2025 Recipe Finder. all rights reserved</p>
           

          </div>
 
          <div class=" col-12 col-md-6">

          </div>
          <div class=" col-12 col-md-2 justify-content-center">
          <i class="fa-brands fa-square-facebook me-3 fs-3"></i>
            <i class="fa-brands fa-square-youtube me-3 fs-3"></i>
            <i class="fa-brands fa-square-twitter me-3 fs-3"></i>
            <i class="fa-brands fa-square-instagram  fs-3"></i>


          </div>

        </div>

      </div>
</footer>
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    

</body>
</html>


