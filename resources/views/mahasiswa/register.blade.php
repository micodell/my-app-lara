@extends('layouts.layout')
@section('form_register')
    <div class="bg-gradient-to-b from-[#00337C] to-blue-400 min-h-screen flex items-center justify-center">
        <form action="{{ route('mahasiswa.store')}}" method="POST">
            <div class="bg-white bg-opacity-5 p-8 rounded-lg shadow-lg max-w-md w-full my-10">
                <h1 class="text-2xl font-bold text-slate-200 mb-6">Fill This Form Below</h1>
                @csrf
                <!-- for all POST req to prevent unauthorized actions  -->
                <div class="mb-4">
                    <label for="name" class="block text-sm  text-slate-300 font-semibold mb-1">Full Name</label>
                    <input type="text" id="name" name="name" class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="John Doe" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm  text-slate-300 font-semibold mb-1">Email</label>
                    <input type="email" id="email" name="email" class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="johndoe@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="birthdate" class="block text-sm  text-slate-300 font-semibold mb-1">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" required>
                </div>
                <div class="mb-4">
                    <label for="no_ktp" class="block text-sm  text-slate-300 font-semibold mb-1">No KTP</label>
                    <input type="text" id="no_ktp" name="no_ktp" class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" placeholder="35150123456789" required>
                </div>
                <div class="flex flex-wrap -mx-2 mb-4">
                    <div class="w-full md:w-2/3 px-2 mb-6 md:mb-0">
                        <label for="school_name" class="block text-sm  text-slate-300 font-semibold mb-1">School Name</label>
                        <input type="text" id="school_name" name="school_name" placeholder="Yass High School"
                            class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                    </div>
                    <div class="w-full md:w-1/3 px-2">
                        <label for="gpa" class="block text-sm  text-slate-300 font-semibold mb-1">GPA</label>
                        <input id="gpa" name="gpa" type="number" min="0" max="5" step="0.01" placeholder="3.65"
                            class="border-2 border-gray-300 p-2 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                    </div>
                </div>
                <button type="submit" class="bg-[#00337C] text-white p-2 rounded-lg font-semibold w-full hover:bg-[#293685] focus:outline-none ring-2 focus:ring-0 ring-[#293685] focus:ring-offset-0 mt-4">Submit</button>
            </div>
        </form>
    </div>
@endsection