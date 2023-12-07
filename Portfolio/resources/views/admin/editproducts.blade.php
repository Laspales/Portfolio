@extends('layouts.default')
@section('main')
<div class="addbody">
            <div class="all">
                <a href="/editTaste" class="category"><div>Edit Taste</div></a>
                <a href="/editTopping" class="category"><div>Edit Topping</div></a>
                <a href="{{ url('admin') }}" class="btn btn-default">Back</a>
            </div>
    </div>
@endsection