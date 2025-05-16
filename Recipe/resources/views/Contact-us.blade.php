<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us page </title>
    <link rel="stylesheet" href="css/Recipe.css">
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<section id="contactus" class="py-5" style="background-image: url('./assets/images/bb.avif'); background-size:cover;background-position: center center;background-repeat:no-repeat;height: 100vh;
;">
     <div class="container-contact">
        <div class="">

        </div>
        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}


        </div>
        @endif
        <div class="row">
        <h1 class="text-center mb-5 text-warning fw-bold">Contact US</h1>

            <div class="col-md-3">

            </div>
            <div class="col-md-6 bg-light p-4 rounded shadow">
            
    

             <form action="{{route('contact.submit')}}" method="post">
             @csrf

            <div class="form-group mb-2" >
                <label for="" class="form-label text-warning fw-bold">UserName</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="UserName" value="{{ old('UserName') }}">
                <span style="color:red">@error('UserName'){{$message}}@enderror</span>
            </div>
            <div class="form-group mb-2">
                <label for="" class="form-label text-warning fw-bold">Email</label>
                <input type="Email" class="form-control" placeholder="Enter Your Emial"name="Email" value="{{old('Email')}}">
                <span style="color:red">@error('Email'){{$message}}@enderror</span>

            </div>
            <div class="form-group mb-2">
                <label for="" class="form-label text-warning fw-bold">Message</label>
                <textarea name="Message" class="form-control" placeholder="Type your message here..." rows="5">{{old('Message')}}</textarea>
                <span style="color:red">@error('Message'){{$message}}@enderror</span>

             </div>
             <button type="submit" class="btn btn-primary">Send Message</button>
       
           
            </form> 

            </div>

               
       
 

        </div>
        <div class="col-md-3">

</div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>