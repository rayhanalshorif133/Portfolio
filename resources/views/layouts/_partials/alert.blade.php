@if ($errors->any())
    <div class="mx-auto my-5 w-fit alert alert-danger">
        <ul class="mx-auto text-center list-outside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="mx-auto my-5 w-fit alert alert-success">
        <ul class="mx-auto text-center list-outside">
            <li>{{ session('success') }}</li>
        </ul>
    </div>
@endif
@if (session('error'))
    <div class="mx-auto my-5 w-fit alert alert-danger">
        <ul class="mx-auto text-center list-outside">
            <li>{{ session('error') }}</li>
        </ul>
    </div>
@endif
