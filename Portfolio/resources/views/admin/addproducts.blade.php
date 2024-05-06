@extends('layouts.default')
@section('main')
<div class="addbody">
            <div class="all">
                <a href="/addTaste" class="category"><div>Add Taste</div></a>
                <a href="/addTopping" class="category"><div>Add Topping</div></a>
                <a href="{{ url('admin') }}" class="btn btn-default">Back</a>
            </div>
    </div>
@endsection