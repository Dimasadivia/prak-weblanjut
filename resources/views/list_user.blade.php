@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-6 text-center text-gray-800">
        Daftar Pengguna
    </h1>
    
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="px-4 py-3 text-center text-sm font-medium">ID</th>
                    <th class="px-4 py-3 text-center text-sm font-medium">Nama</th>
                    <th class="px-4 py-3 text-center text-sm font-medium">NPM</th>
                    <th class="px-4 py-3 text-center text-sm font-medium">Kelas</th>
                    <th class="px-4 py-3 text-center text-sm font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-gray-100 transition-colors">
                        <td class="px-4 py-2 border-b border-gray-200 text-center text-sm">{{ $user['id'] }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-center text-sm">{{ $user['nama'] }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-center text-sm">{{ $user['npm'] }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-center text-sm">{{ $user['nama_kelas'] }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-center text-sm">
                            <button class="bg-gray-800 text-white px-3 py-1 rounded-md hover:bg-gray-700 transition-colors">Edit</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-400 transition-colors">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
