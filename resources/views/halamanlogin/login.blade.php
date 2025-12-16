<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-slate-100">
        <div class="flex flex-col w-1/3 bg-white p-4 rounded-sm shadow">
            <div class="flex items-center justify-center text-xl text-green-600 font-bold pb-4">Login Page</div>
            <form class="flex flex-wrap" action="{{ route('login') }}" method="post" autocomplete="off">
                {{-- Email --}}
                <div class="flex flex-col w-full p-2 gap-1 text-sm">
                    <label class="font-medium">Email</label>
                    <input type="email" placeholder="Masukkan Email Anda" name="email"
                        class="outline-none border border-cyan-100 p-2 rounded" />
                </div>
                {{-- Password --}}
                <div class="flex flex-col w-full p-2 gap-1 text-sm">
                    <label class="font-medium">Password</label>
                    <input type="password" placeholder="Masukkan Sandi Anda" name="password"
                        class="outline-none border border-cyan-100 p-2 rounded" />
                </div>
                {{-- Button --}}
                <div class="flex justify-end w-full p-2">
                    <button type="submit"
                        class="text-slate-50 bg-green-500 px-3 py-1.5 cursor-pointer rounded hover:bg-green-600">Login</button>
                </div>
                @csrf
            </form>
        </div>
    </div>
</body>

</html>
