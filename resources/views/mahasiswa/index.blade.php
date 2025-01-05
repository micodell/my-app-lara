@extends('layouts.layout')
@section('form_table')
    <h1>Daftar Mahasiswa</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="ext-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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