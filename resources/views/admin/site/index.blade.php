@extends('layouts.app')

@section('content')
<div class="w-full px-10 mx-auto">
    <div class="card">
        <div class="card-header">
            <h2 class="card-header-title">Update Admin User Information</h2>
        </div>
        <div class="px-2">
            <form action="{{route('admin.site.update')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="py-2">
                    <label for="name" class="block text-base font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input type="text" name="name" id="name" autocomplete="given-name"
                            class="from-input" placeholder="Enter admin user name" value="#">
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