@extends('layouts.layout')
@section('form_table')
    <div class="flex flex-col  h-full items-center px-4 py-4 mx-4">
        <div class="flex w-full justify-between items-start border-b-2 border-white pb-4 mt-4 mb-6">
            <h1 class="font-bold text-3xl text-slate-200">Mahasiswa Terdaftar</h1>
            <a href="{{ route('mahasiswa.register') }}"
            class="bg-blue-400 hover:bg-blue-300 transition duration-300 ease-in-out text-white font-semibold rounded-lg text-md px-4 py-2.5 text-center">
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
                        <!-- <th scope="col" class="px-6 py-3">Created at</th>
                        <th scope="col" class="px-6 py-3">Updated at</th> -->
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr class="bg-white bg-opacity-20 text-slate-300 font-semibold border-b hover:bg-white hover:bg-opacity-50 hover:text-slate-600">
                        <td class="px-6 py-4">{{ $mhs->id }}</td>
                        <td class="px-6 py-4">{{ $mhs->name }}</td>
                        <td class="px-6 py-4">{{ $mhs->email }}</td>
                        <td class="px-6 py-4">{{ $mhs->birthdate }}</td>
                        <td class="px-6 py-4">{{ $mhs->no_ktp }}</td>
                        <td class="px-6 py-4">{{ $mhs->school_name }}</td>
                        <td class="px-6 py-4">{{ $mhs->gpa }}</td>
                        <!-- <td class="px-6 py-4">{{ $mhs->created_at }}</td>
                        <td class="px-6 py-4">{{ $mhs->updated_at }}</td> -->
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ url('mahasiswa/edit/' . $mhs->id) }}" 
                                class="bg-yellow-400 hover:bg-yellow-300 transition duration-300 ease-in-out text-white font-semibold rounded-lg text-md px-4 py-2 text-center"
                                data-id="{{ $mhs->id }}">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ url('mahasiswa/delete/' . $mhs->id) }}" 
                                class="bg-red-500 hover:bg-red-400 transition duration-300 ease-in-out text-white font-semibold rounded-lg text-md px-4 py-2 text-center deleteButton"
                                data-id="{{ $mhs->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        window.swal = Swal;
        
        document.querySelectorAll('.deleteButton').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                console.log("hi");
                const deleteHref = this.getAttribute('href');
                const mhsId = this.getAttribute('data-id');
                
                Swal.fire({
                    title: "Delete mahasiswa " + mhsId + " ?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = deleteHref;
                        Swal.fire({
                            title: "Mahasiswa " + mhsId + " deleted successfully",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    }
                });
            });
        });
    </script>
        
@endsection