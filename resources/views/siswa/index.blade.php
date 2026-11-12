<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('siswa.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('siswa.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
