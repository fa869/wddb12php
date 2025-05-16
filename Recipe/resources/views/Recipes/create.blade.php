@extends('layouts.master')
@section('main')
<div>
<form action="/Recipe">
    <div class="mb-3">
        <label class="form-label">Recipe Name</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select class="form-control">
            <option>Rice Dishes</option>
            <option>Fast Food</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Recipe Image</label>
        <input type="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add Recipe</button>
</form>
</div>
@endsection