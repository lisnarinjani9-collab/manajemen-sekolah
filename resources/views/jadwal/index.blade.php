<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('jadwal.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('jadwal.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
