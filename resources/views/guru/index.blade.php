<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('guru.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('guru.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
