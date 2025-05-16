<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Details</title>
    <link rel="stylesheet" href="{{asset('assets/recipe.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-warning sticky-top">
        <div class="container">
            <a href="" class="navbar-brand">Recipe Finder</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#NavbarId">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="NavbarId">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('Recipe')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('details') }}">Detail Page</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="recipe-details" class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/chickenb.jpeg" class="img-fluid" alt="Chicken Biryani">
            </div>
            <div class="col-md-6">
                <h2>Chicken Biryani</h2>
                <p><strong>Ingredients:</strong> Rice, Chicken, Spices, etc.</p>
                <p><strong>Instructions:</strong> Cook rice and chicken, then mix with spices.</p>
                <p><strong>Description:</strong> A delicious and spicy biryani that's a favorite for many!</p>
            </div>
        </div>
        <a href="{{ route('Recipe') }}" class="btn btn-secondary mt-4">Back to Home</a>
    </section>

    <footer class="bg-secondary text-white py-5">
        <div class="container text-center">
            <p>&copy; 2025 Recipe Finder. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
