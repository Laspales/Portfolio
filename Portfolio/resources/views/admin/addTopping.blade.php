@extends('layouts.default')
@section('main')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="addbody">
        <div class="container">
            <form id="toppingForm" action="{{ url('addTopping') }}" method="POST">
                @csrf
                <label for="toppingName">Topping Name :</label>
                <input type="text" id="toppingName" name="toppingName" required>

                <label for="toppingPrice">Topping Price :</label>
                <input type="number" step=".01" id="toppingPrice" name="toppingPrice" required>

                <button type="submit" class="btn_add_product">Add Topping</button>
            </form>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default" style="margin-top: 2em">Back</a>
    </div>
@endsection
