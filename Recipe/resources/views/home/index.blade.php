@extends('layouts.master')
@section('main')
<h3>Recent Recipes</h3>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Recipe Name</th>
            <th>Category</th>
            <th>Date Added</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Chicken Biryani</td>
            <td>Rice Dishes</td>
            <td>27-Feb-2025</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pizza</td>
            <td>Fast Food</td>
            <td>26-Feb-2025</td>
        </tr>
    </tbody>
</table>
@endsection