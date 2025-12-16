<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Todo</title>
</head>

<body>
    <div class="flex items-start justify-center bg-sky-100 min-h-screen py-5">
        <div class="w-full md:w-1/2 flex flex-col rounded bg-white p-5">
            <div class="flex items-center justify-between gap-3 w-full py-5 bg-slate-200 px-5 my-2 rounded-2xl">
                <div class="flex flex-col font-medium">
                    <span>{{ auth()->user()->name }}</span>
                    <span>({{ auth()->user()->email }})</span>
                </div>
                @auth
                    <div>
                        <a class="p-2 w-1/5 rounded-2xl text-white text-center bg-red-500" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endauth
            </div>
            <div class="flex items-center justify-center text-xl text-green-600 font-bold pb-4">My Todo List</div>
            @yield('content')
            @include('components.copyright')
        </div>
    </div>
</body>

</html>
