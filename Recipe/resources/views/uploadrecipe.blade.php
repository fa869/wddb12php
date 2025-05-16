 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
    
    <!--  external css link -->
     <link rel="stylesheet" href="css/Recipe.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<style>
  body{
    height:100%;
    background-color:rgb(236, 243, 236);
  }
  .upload-image{
    background-color:rgb(4, 179, 4);
    padding: 30px;
    border-radius: 10px;
    max-width: 800px;
    margin: auto;
  }
  
.text-white{
  color:rgb(53, 30, 71);
} 
.form-control {
    background-color: #ffffff;
}
.card{
  background-color: aqua;
}
.background-image{
    background-image: url('./assets/images/bac.jpg');
    background-size: cover;
    background-position:center;
    background-repeat:no-repeat;
    height: 100vh;
    position: fixed;
    z-index: -1;
    top:0;
    left:0;
    right:0;
    bottom:0;
    display:flex;
    justify-content:center;
    align-items:center;

}
      </style>
 </head>
 <body>
 <div class="background-image">

</div>
    
 <div class="upload-image">
    <div class="container mt-5">
      <h2 class="mb-4 text-center text-white">Upload Your Recipe</h2>
      <div class="card shadow-lg rounded-4 p-4">
         
        <form action="#" method="post" enctype="multipart/form-data">
          @csrf

          <!-- Recipe Title -->
          <div class="mb-3">
            <label for="title" class="form-label text-dark">Recipe Title</label>
            <input
              type="text"
              class="form-control"
              id="title"
              name="title"
              placeholder="Enter recipe title"
              required
            />
          </div>

          <!-- Category -->
          <div class="mb-3">
            <label for="category" class="form-label text-dark">Category</label>
            <select class="form-select" id="category" name="category" required>
              <option value="" disabled selected>Select a category</option>
              <option value="Breakfast">Breakfast</option>
              <option value="Lunch">Lunch</option>
              <option value="Dinner">Dinner</option>
              <option value="Desserts">Desserts</option>
              <option value="Drinks">Drinks</option>
            </select>
          </div>

          <!-- Ingredients -->
          <div class="mb-3">
            <label for="ingredients" class="form-label text-dark">Ingredients</label>
            <textarea
              class="form-control"
              id="ingredients"
              name="ingredients"
              rows="3"
              placeholder="List ingredients separated by commas"
              required
            ></textarea>
          </div>

          <!-- Instructions -->
          <div class="mb-3">
            <label for="instructions" class="form-label text-dark">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="4" placeholder="Write step-by-step instructions">
        
            </textarea>
          </div>

          <!-- Image Upload text -->
          <div class="mb-3">
            <label for="image" class="form-label text-dark">Upload Recipe Image</label>
            <input type="file" class="form-control" id="image" name="image" required />
          </div>

          <!-- Submit Button for uploaded image -->
          <div class="text-center">
            <button type="submit" class="btn btn-outline-primary">
              Submit Recipe
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

 </body>
 </html>