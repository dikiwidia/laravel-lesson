<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Todo</title>
</head>

<body>
    <div class="flex items-start justify-center bg-sky-100 min-h-screen pt-5">
        <div class="w-full md:w-1/2 flex flex-col rounded bg-white p-5">
            <div class="flex items-center justify-center text-xl text-green-600 font-bold pb-4">My Todo List</div>
            @yield('content')
            @include('components.copyright')
        </div>
    </div>
</body>

</html>
