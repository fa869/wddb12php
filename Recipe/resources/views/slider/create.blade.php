@extends('layouts.master')
@section('main')
<h3>Add Slider Image</h3>
<form action="/slider">
    <div class="mb-3">
        <label for="" class="form-label">upload image</label>
        <input type="file" class="form-control">

    </div>
    <button type="submit" class="btn btn-primary">upload</button>
</form>
@endsection