@extends('layouts.layout')
@section('form_register')
    <div class="flex flex-col w-full h-full items-center px-4 py-4 mx-4">
        <!-- aktifkan when needed: e.g. mau multi page isi form nya -->
        <!-- <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-slate-300 mb-10">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
        </div> -->

        <div class="flex w-full justify-start items-start border-b-2 border-white pb-4 mt-4 mb-6">
            <h1 class="font-bold text-3xl text-slate-200">Form Pendaftaran Mahasiswa</h1>
        </div>
        <div class="flex justify-center align-center">
            <form action="{{ route('mahasiswa.store')}}" method="POST">
                <div class="bg-white bg-opacity-5 p-8 rounded-lg shadow-lg max-w-2xl w-screen mt-8 mb-4 text-slate-800">
                    <h1 class="text-2xl font-semibold text-slate-200 mb-6">Fill This Form Below</h1>
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
                    <button type="submit" id="registButton" class="bg-[#00337C] text-white p-2 rounded-lg font-semibold w-full hover:bg-blue-600 focus:outline-none ring-2 focus:ring-0 ring-[#293685] hover:ring-blue-600 focus:ring-offset-0 mt-4">Submit</button>
                    <!-- buat sweetalert kemudian direct ke /mahasiswa untuk lihat table. lebih bagus jika langsung update tanpa perlu refresh -->
                </div>
            </form>
        </div>
        <div class="flex flex-row w-full h-full justify-between px-4 py-4 mx-4">
            <a href="{{ route('mahasiswa.index') }}"
            class="bg-blue-500 hover:bg-blue-300 transition duration-300 ease-in-out text-white font-semibold rounded-lg text-md px-4 py-2.5 text-center">
                <i class="fa-solid fa-arrow-left"></i>
            Back</a>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const birthdate = document.getElementById('birthdate').value;
            if (!birthdate) {
                alert('Birthdate is required!');
                event.preventDefault();
            }
        });

        document.getElementById('registButton').addEventListener('click', function(event) {
            event.preventDefault();

            document.querySelector('form').submit();

            Swal.fire({
                icon: "success",
                title: "Added Successfully",
                showConfirmButton: false,
                timer: 1000
            });
        });
    </script>
    
@endsection