@extends('layouts.index')

@section('content')
    <div style="width: 50%" class="container mx-auto p-4 mt-10">
        <h1 class="text-2xl font-medium">Profile Settings</h1>
        @if (!empty(session('status')))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 mb-5" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif
        <form class="bg-white p-6 rounded-lg shadow-md" method="POST" action="/update-profile">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="name">Nama</label>
                <input class="border border-gray-400 p-2 rounded-lg w-full" type="text" id="name" name="name" value="{{ auth()->user()->name }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="name">Username</label>
                <input class="border border-gray-400 p-2 rounded-lg w-full" type="text" id="username" name="username" value="{{ auth()->user()->username }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input class="border border-gray-400 p-2 rounded-lg w-full" value="{{ auth()->user()->email }}" name="email" type="email" id="email">
            </div>

            <div class="text-right">
                <a href="/reset-password" class="mr-5 text-blue-500">Reset password</a>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">Save Changes</button>
            </div>
        </form>
    </div>
@endsection
