@extends('layouts.master')
@section('main')
<h1>+Add New Category</h1>
 <div>
 <form action="/category">
   <div class="mb-3">
   <label for="" class="form-label">Category Name</label>
   <input type="text" class="form-control">
   </div>
   <button type="submit" class="btn btn-primary">Add Category</button>
    
    </form>
 </div>


@endsection