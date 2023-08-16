<!doctype html>
<html lang="en">

@include('admin.template.header')

<body>

    @include('admin.template.nav')
    <div class="row">
        <div class="col-2">
            @include('admin.template.sidebar')
        </div>
        <div class="col">
            <div class="my-2 mx-4">
                @yield('content')
            </div>
        </div>
    </div>


    @include('admin.template.script')

    @include('sweetalert::alert')
</body>

</html>
