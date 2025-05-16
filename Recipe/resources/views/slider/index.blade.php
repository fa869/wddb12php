@extends('layouts.master')
@section('main')

 
<div class="row">

<h1 class="col-8">Manage Slider</h1>
<a href="/slider/create" class="button">Create</a>

</div>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="assets/images/slider.jpeg" width="100px" alt="slider image"></td>
            <td>
                <button class="btn btn-primary">Delete</button>
            </td>
        </tr>
    </thead>

</table>

@endsection