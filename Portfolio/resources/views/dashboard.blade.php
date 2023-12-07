@extends('layouts.default')
@section('main')
    <div class="addbody">
        <h1 class="profil-title">My Profile</h1>
        <div class="all">
            <a href="/editUser" class="btn">Edit Profile</a>
            <a href="/order/show" class="btn">Order History</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" class="btn"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.getElementById('popup').click();
        }
    </script>
@endsection
