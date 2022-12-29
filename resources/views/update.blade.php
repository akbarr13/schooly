@extends('layouts.index')

@section('content')
    <div class="p-8 rounded border border-gray-200">
        <h1 class="font-medium text-3xl">Update student</h1>
        <form method="POST" action="/students/{{ $id }}">
            @csrf
            @method('PUT')
            <div class="mt-8 space-y-6">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Student name</label> <input
                        type="text" name="name" id="name" value="{{ $student->name }}"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3"
                        placeholder="Masukkan nama" /> </div>
                <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Majority</label> <input
                        type="text" name="major" id="email" value="{{ $student->major }}"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3"
                        placeholder="RPL, TKJ, AKL, BDP" /> </div>
                <div>
                    <label for="countries" class="text-sm text-gray-700 block mb-0 font-medium">Gender</label>
                    <select id="countries" name="gender"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3">
                        <option @if ($student->gender == "laki-laki")
                            @selected(true)
                        @endif value="pria">Pria</option>
                        <option @if ($student->gender == "perempuan")
                            @selected(true)
                        @endif value="wanita">Wanita</option>
                    </select>

                </div>

            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="w-24 py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <!-- Secondary -->
            </div>
        </form>
        <form action="/student-remove/{{ $id }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="space-x-4">
                <button type="submit" onclick="confirmAction()"
                    class="w-24 mt-3 py-2 px-4 bg-red-500 text-white rounded hover:bg-red-600 active:bg-red-700 disabled:opacity-50">
                    Delete
                </button>
            </div>

        </form>
    </div>
    <script>
        function confirmAction() {
            if (confirm("Are you sure want to delete this profile?")) {
                // Submit the form
                document.forms[0].submit();
            }
        }
    </script>
@endsection
