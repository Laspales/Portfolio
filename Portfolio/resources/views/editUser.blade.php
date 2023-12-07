@extends('layouts.default')
@section('main')
@if (session()->has('popup'))
<div class="alert alert-success">
    {{ session()->get('popup') }}
</div> <br>
@endif
    <div class="addbody">
        <div class="container">
            <form id="editUser{{ $user->id }}" action="{{ url('editUser', ['id' => $user->id]) }}" method="POST">
                @csrf
                <label for="First Name">First Name:</label>
                <input name="newFirstName" value="{{ $user->firstname }}" required><br>
                <label for="Last Name">Last Name:</label>
                <input name="newLastName" value="{{ $user->lastname }}" required><br>
                <label for="Email">Email:</label>
                <input name="newEmail" value="{{ $user->email }}"><br>
                <button type="button" class="btn_add_product" onclick="submitEditForm('{{ $user->id }}')">Save changes</button>
            </form>
        </div>
    </div>

    <script>
        function submitEditForm(id) {
            document.getElementById('editUser' + id).submit();
        }
    </script>
@endsection
