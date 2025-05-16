@extends('layouts.master')
@section('main')
<div class="row">
<h2 class="col-8">Recipes Table</h2>
<a href="/Recipe/create" class="button">Create</a>

</div>
<div>
<table class="table table-primary">
  <thead>
    <tr>
        <th>ID</th>
        <th>Recipe Name</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td>biryani</td>
        <td>Desi</td>
        <td>
            <button>view</button>

            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>pizza</td>
        <td>fast food</td>
        <td>
            <button>view</button>

            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>karahi</td>
        <td>desi</td>
        <td>
            <button>view</button>

            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>shwarma</td>
        <td>fastfood</td>
        <td>
            <button>view</button>

            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Zinger Burger</td>
        <td>Desi</td>
        <td>
            <button>view</button>

            <button>Edit</button>
            <button>Delete</button>
        </td>
    </tr>
  </tbody>
</table>
</div>
@endsection
 