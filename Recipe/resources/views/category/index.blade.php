@extends('layouts.master')
@section('main')
<div class="row">
<h1 class="col-8">Category list</h1>
<a href="/category/create" class="button">Create</a>

</div>
 <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>actions</th>
        </tr>
        <tbody>
            <tr>
                <td>1</td>
                <td>rice</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>fastfood</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>pizza</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
        </tbody>
    </thead>

</table>


@endsection