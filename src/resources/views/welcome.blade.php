<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="module">
        window.Echo.channel('test_channel').listen("TestEvent", (event) => {
            console.log(event);
        });
    </script>
</head>

</html>
