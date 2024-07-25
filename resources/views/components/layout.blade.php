<!DOCTYPE html>
<html lang="en">

<x-header></x-header>

<body>
    <div id="app">

        <x-sidebar></x-sidebar>

        <div id="main">

            {{ $slot }}

            <x-footer></x-footer>
        </div>
    </div>

    <x-script></x-script>
</body>

</html>
