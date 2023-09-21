@extends('layouts.app')

@section('content')
<div class="w-full px-10 mx-auto">
    <div class="card">
        <div class="card-header">
            <h2 class="card-header-title">Update Admin User Information</h2>
        </div>
        <div class="px-2">
            <form action="{{route('admin.user.update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="py-2">
                    <label for="name" class="block text-base font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="given-name"
                            class="from-input" placeholder="Enter admin user name" value="{{$user->name}}">
                    </div>
                </div>
                <div class="py-2">
                    <label for="email" class="block text-base font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" autocomplete="given-email"
                            class="from-input" placeholder="Enter admin user name" value="{{$user->email}}">
                    </div>
                </div>
                <div class="py-2">
                    <label for="password" class="block text-base font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" autocomplete="given-password"
                            class="from-input" placeholder="Enter admin password">
                    </div>
                </div>
                <div class="py-2">
                    <label for="password" class="block text-base font-medium text-gray-700">
                        Confirm Password
                    </label>
                    <div class="mt-1">
                        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="given-password"
                            class="from-input" placeholder="Enter admin password">
                    </div>
                </div>

                <div class="flex justify-end py-2">
                    <button type="submit"
                        class="btn-update">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection