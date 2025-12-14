@extends('layouts.main')

@section('content')
    <div class="flex justify-end w-full">
        <a class="text-slate-50 bg-green-500 px-3 py-1.5 cursor-pointer hover:bg-green-600 rounded"
            href="{{ route('todo.create') }}">Add Todo</a>
    </div>
    <div class="py-2 border border-cyan-100 my-2">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Activity</th>
                    <th>Is Active</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr class="hover:bg-sky-50">
                        <td class="text-center px-2 py-1.5">{{ $data->id }}</td>
                        <td class="px-2 py-1.5">{{ $data->date }}</td>
                        <td class="px-2 py-1.5">{{ $data->activity }}</td>
                        <td class="text-center px-2 py-1.5"><input type="checkbox" class="w-4 h-4"
                                {{ $data->checked_flag ? 'checked' : '' }} readonly disabled />
                        </td>
                        <td class="px-2 py-1.5">{{ $data->note }}</td>
                        <td class="flex text-center px-2 py-1.5">
                            <a class="text-sm px-2 py-1 bg-sky-400 text-slate-100 hover:bg-sky-500 cursor-pointer rounded-s"
                                href="{{ route('todo.show', ['id' => $data->id]) }}">Show</a>
                            <form class="rounded-e" method="POST" action="{{ route('todo.delete', ['id' => $data->id]) }}">
                                @method('delete')
                                @csrf
                                <button
                                    class="text-sm px-2 py-1 bg-rose-400 text-slate-100 hover:bg-rose-500 cursor-pointer rounded-e"
                                    type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr class="">
                        <td colspan="6" class="text-center px-2 py-1.5">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
