@extends('layouts.index')

@section('content')
    <div class="p-8 rounded border border-gray-200">
        <h1 class="font-medium text-3xl">Tambahkan siswa</h1>
        <form method="POST" action="/add-student">
            @csrf
            <div class="mt-8 space-y-6">
                <div> <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">Nama siswa</label> <input
                        type="text" name="name" id="name"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3"
                        placeholder="Masukkan nama" /> </div>
                <div> <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">Jurusan</label> <input
                        type="text" name="major" id="email"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3"
                        placeholder="RPL, TKJ, AKL, BDP" /> </div>
                <div> <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">Jenis kelamin</label>
                    <select id="countries" name="gender"
                        class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-1/3">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

            </div>
            <div class="space-x-4 mt-8"> <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Simpan</button>
                <!-- Secondary -->
            </div>
        </form>
    </div>
@endsection
