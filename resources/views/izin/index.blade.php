<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('izin.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('izin.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
