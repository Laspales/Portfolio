@extends('layouts.default')
@section('main')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="addbody">
    <div class="container">
        <form id="tasteForm" action="{{ url('addTaste') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="tasteName">Taste Name :</label>
            <input type="text" id="tasteName" name="tasteName" required>

            <label for="tastePrice">Taste Price :</label>
            <input type="number" step=".01" id="tastePrice" name="tastePrice" required>

            <label for="tasteImage">Taste Image :</label>
            <input type="file" id="tasteImage" name="tasteImage" accept="image/*" required>

            <button type="submit" class="btn_add_product">Add taste</button>
        </form>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default" style="margin-top: 2em">Back</a>
</div>
@endsection
