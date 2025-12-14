@extends('layouts.main')

@section('content')
    <div class="py-2 border border-cyan-100 my-2">
        <form class="flex flex-wrap" action="{{ route('todo.store') }}" method="post" autocomplete="off">
            {{-- Date --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Date</label>
                <input type="text" placeholder="Insert Date" name="date"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Activity --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Activity</label>
                <input type="text" placeholder="Insert Activity" name="activity"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Note --}}
            <div class="flex flex-col w-full p-2 gap-1 text-sm">
                <label class="font-medium">Note</label>
                <textarea placeholder="Insert Note" name="note"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded resize-none" row="2"></textarea>
            </div>
            {{-- Checked Flag --}}
            <div class="flex flex-col items-start w-full p-2 gap-1 text-sm">
                <label class="font-medium">Is Active</label>
                <div class="flex gap-2">
                    <input type="checkbox" name="checked_flag" value="1">
                    <span class="text-slate-500">Check for activated</span>
                </div>
            </div>
            {{-- Button --}}
            <div class="flex justify-end w-full p-2">
                <a class="text-slate-50 bg-rose-500 px-3 py-1.5 cursor-pointer hover:bg-rose-600 rounded-s"
                    href="{{ route('todo.main') }}">Back</a>
                <button type="reset"
                    class="text-slate-50 bg-slate-500 px-3 py-1.5 cursor-pointer hover:bg-slate-600">Clear</button>
                <button type="submit"
                    class="text-slate-50 bg-green-500 px-3 py-1.5 cursor-pointer rounded-e hover:bg-green-600">Add
                    Todo</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
