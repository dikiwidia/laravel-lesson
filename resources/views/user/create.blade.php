@extends('layouts.main', ['title' => 'User Management'])

@section('content')
    <div class="py-2 border border-cyan-100 my-2">
        <form class="flex flex-wrap" action="{{ route('user.store') }}" method="post" autocomplete="off">
            {{-- Name --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Name</label>
                <input type="text" placeholder="Insert Name" name="name"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Email --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Email</label>
                <input type="email" placeholder="Insert Email" name="email"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Password --}}
            <div class="flex flex-col w-full p-2 gap-1 text-sm">
                <label class="font-medium">Password</label>
                <input type="password" placeholder="Insert Password" name="password"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Checked Flag --}}
            <div class="flex flex-col items-start w-full p-2 gap-1 text-sm">
                <label class="font-medium">Is Admin</label>
                <div class="flex gap-2">
                    <input type="checkbox" name="is_admin_flag" value="1">
                    <span class="text-slate-500">Check for admin flag</span>
                </div>
            </div>
            {{-- Button --}}
            <div class="flex justify-end w-full p-2">
                <a class="text-slate-50 bg-rose-500 px-3 py-1.5 cursor-pointer hover:bg-rose-600 rounded-s"
                    href="{{ route('user.main') }}">Back</a>
                <button type="reset"
                    class="text-slate-50 bg-slate-500 px-3 py-1.5 cursor-pointer hover:bg-slate-600">Clear</button>
                <button type="submit"
                    class="text-slate-50 bg-green-500 px-3 py-1.5 cursor-pointer rounded-e hover:bg-green-600">Add
                    User</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
