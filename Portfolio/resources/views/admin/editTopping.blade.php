@extends('layouts.default')
@section('main')
@if(session('success') or session('error'))
    <div class="alert alert-success">
        {{ session('success') }} {{ session('error') }}
    </div>
@endif
    <div class="addbody">
        <div class="container">
            @foreach ($topping as $key => $data)
                <div style="margin: 5px">
                    <span>{{ $data->id }}</span>&emsp;
                    <span>{{ $data->topping }}</span>&emsp;
                    <span>{{ $data->price }} €</span>&emsp;

                    <!-- Button to trigger the modal -->
                    <button class="btn_add_product" onclick="openDialog('{{ $data->id }}')">Edit</button>

                    <hr>
                </div>

                <!-- Dialog (hidden by default) -->
                <div id="editDialog{{ $data->id }}" class="dialog">
                    <div class="dialog-content">
                        <span class="close" onclick="closeDialog('{{ $data->id }}')">&times;</span>

                        <!-- Form content -->
                        <form id="editTopping{{ $data->id }}" action="{{ url('editTopping', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <!-- Add your form fields here -->
                            <label for="newTopping">New Topping:</label>
                            <input type="text" id="newTopping" name="newTopping" value="{{ $data->topping }}">
                            <label for="newPrice">New Price:</label>
                            <input type="number" step=".01" id="newPrice" name="newPrice" value="{{ $data->price }}">
                        </form>

                        <button type="button" class="btn btn-secondary" onclick="closeDialog('{{ $data->id }}')">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitEditForm('{{ $data->id }}')">Save changes</button>
                    </div>
                </div>
            @endforeach
            <a href="{{ url('editproducts') }}" class="btn btn-default">Back</a>
        </div>
    </div>
    <script>
        function openDialog(id) {
            document.getElementById('editDialog' + id).style.display = 'block';
        }

        function closeDialog(id) {
            document.getElementById('editDialog' + id).style.display = 'none';
        }

        function submitEditForm(id) {
            // You can perform additional validation or AJAX submission here
            document.getElementById('editTopping' + id).submit();
        }
    </script>
@endsection
