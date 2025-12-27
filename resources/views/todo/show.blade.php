@extends('layouts.main', ['title' => 'Todo Management'])

@section('content')
    <div class="py-2 border border-cyan-100 my-2">
        <form class="flex flex-wrap" action="{{ route('todo.update', $data->id) }}" method="post" autocomplete="off">
            @method('PUT')
            @csrf
            {{-- Date --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Date</label>
                <input type="text" placeholder="Insert Date" name="date" value="{{ $data->date }}"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Activity --}}
            <div class="flex flex-col w-1/2 p-2 gap-1 text-sm">
                <label class="font-medium">Activity</label>
                <input type="text" placeholder="Insert Activity" name="activity" value="{{ $data->activity }}"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded" />
            </div>
            {{-- Note --}}
            <div class="flex flex-col w-full p-2 gap-1 text-sm">
                <label class="font-medium">Note</label>
                <textarea placeholder="Insert Note" name="note"
                    class="outline-none border border-cyan-100 py-1 px-2 rounded resize-none" row="2">{{ $data->note }}</textarea>
            </div>
            {{-- Checked Flag --}}
            <div class="flex flex-col items-start w-full p-2 gap-1 text-sm">
                <label class="font-medium">Is Active</label>
                <div class="flex gap-2">
                    <input type="checkbox" name="checked_flag" value="1" {{ $data->checked_flag ? 'checked' : '' }}>
                    <span class="text-slate-500">Check for activated</span>
                </div>
            </div>
            {{-- Button --}}
            <div class="flex justify-end w-full p-2">
                <a class="text-slate-50 bg-rose-500 px-3 py-1.5 cursor-pointer hover:bg-rose-600 rounded-s"
                    href="{{ route('todo.main') }}">Back</a>
                <button type="submit"
                    class="text-slate-50 bg-yellow-500 px-3 py-1.5 cursor-pointer rounded-e hover:bg-yellow-600">Update
                    Todo</button>
            </div>
        </form>
    </div>
@endsection
