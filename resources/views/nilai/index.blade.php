<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('nilai.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('nilai.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
