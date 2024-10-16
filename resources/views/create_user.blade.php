<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">
            Input Data Mahasiswa
        </h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="nama" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200">
                @foreach ($errors->get('nama') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>
    
            <div class="mb-5">
                <label for="npm" class="block text-gray-700 text-sm font-medium mb-2">NPM:</label>
                <input type="text" id="npm" name="npm" 
                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200">
                @foreach ($errors->get('npm') as $msg)
                    <p class="text-red-500 text-sm mt-1">{{ $msg }}</p>
                @endforeach
            </div>
    
            <div class="mb-5">
                <label for="kelas_id" class="block text-gray-700 text-sm font-medium mb-2">Kelas:</label>
                <select name="kelas_id" id="kelas_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200">
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
    
            <button type="submit"
                    class="w-full bg-gray-800 text-white font-semibold py-2 rounded-md hover:bg-gray-700 transition duration-200">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
</html>
