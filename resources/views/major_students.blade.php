@extends('layouts.index')

@section('content')
    <br>

    <div
        class="ml-auto mr-auto relative flex flex-col w-5/6 min-w-0 mb-0 break-words bg-white border-0 border-black border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6  bg-white rounded-t-2xl">
            <h6 class="text-2xl"><b>Student list</b></h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-black 200 text-black-500">
                    <thead class="align-bottom">
                        <tr>
                            <th
                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-black 200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-black-400 opacity-70">
                                Name</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-black 200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-black-400 opacity-70">
                                Major</th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-black 200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-black-400 opacity-70">
                                Gender</th>
                            <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-black 200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-black-400 opacity-70">
                                Created At</th>
                            <th
                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-black 200 border-solid shadow-none tracking-none whitespace-nowrap text-black-400 opacity-70">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <div class="flex px-2 py-1">
                                        <div>
                                            <img src="@if ($student->image == null) {{ asset('/student-images/default.jpg') }} @else {{ $student->image }} @endif"
                                                class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                alt="user1" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-sm">{{ $student->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <p class="mb-0 font-semibold leading-tight text-xs">{{ $student->major->name }}</p>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                    <span
                                        class=" text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-black">{{ $student->gender }}</span>
                                </td>
                                <td
                                    class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <span
                                        class="font-semibold leading-tight text-xs text-slate-400">{{ $student->created_at }}</span>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                    <a href="/students/{{ $student->id }}"
                                        class="font-semibold leading-tight text-xs text-slate-400"> Edit </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
