@extends('layouts.master')
@section('main')
<form action="/logout" method="POST">
    <button type="submit" class="btn btn-primary">logout</button>

</form>
@endsection