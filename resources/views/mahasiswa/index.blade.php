@extends('layouts.layout')
@section('form_table')
    <div class="flex w-full justify-between items-start border-b-2 border-white pb-4 mt-4 mb-6">
        <h1 class="font-bold text-4xl text-slate-200">Mahasiswa Terdaftar</h1>
        <a href="{{ route('mahasiswa.register') }}"
        class="bg-blue-400 hover:bg-blue-300 transition duration-300 ease-in-out text-white font-semibold rounded-lg text-lg px-4 py-2 text-center">
            <i class="fa-solid fa-plus"></i>
        Regist</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">
        <table class="w-full text-sm text-left rtl:text-right text-slate-300">
            <thead class="ext-xs uppercase bg-white bg-opacity-25 text-slate-300">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Birthdate</th>
                    <th scope="col" class="px-6 py-3">No KTP</th>
                    <th scope="col" class="px-6 py-3">School Name</th>
                    <th scope="col" class="px-6 py-3">GPA</th>
                    <th scope="col" class="px-6 py-3">Created at</th>
                    <th scope="col" class="px-6 py-3">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr class="bg-white bg-opacity-20 text-slate-300 font-semibold border-b dark:border-gray-700 hover:bg-white hover:bg-opacity-50">
                    <td class="px-6 py-4">{{ $mhs->id }}</td>
                    <td class="px-6 py-4">{{ $mhs->name }}</td>
                    <td class="px-6 py-4">{{ $mhs->email }}</td>
                    <td class="px-6 py-4">{{ $mhs->birthdate }}</td>
                    <td class="px-6 py-4">{{ $mhs->no_ktp }}</td>
                    <td class="px-6 py-4">{{ $mhs->school_name }}</td>
                    <td class="px-6 py-4">{{ $mhs->gpa }}</td>
                    <td class="px-6 py-4">{{ $mhs->created_at }}</td>
                    <td class="px-6 py-4">{{ $mhs->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection