@extends('layouts.template')

@section('content')
<div class="p-10 mt-10 sm:ml-64">
    <h1 class="text-2xl mb-1 font-bold">Edit Data Keterlambatan</h1>
    <h3 class="mb-2"><a href="{{ route('dashboard') }}">Dashboard</a> / <a href="{{ route('admin.data-telat.index') }}">Data Keterlambatan</a> / <span class="font-semibold">Edit Data Keterlambatan</span></h3>
    <form class="max-w-md mx-auto mt-10 shadow-lg p-5" method="post" action="{{ route('admin.data-telat.update', $lates['id']) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h1 class="text-center text-2xl mb-10 font-semibold">Form Edit Data Keterlambatan</h1>
        <label for="underline_select" class="sr-only">Underline select</label>
        <select id="underline_select" name="name" 
            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            @foreach ($students as $student)
                <option selected hidden value="{{ $student['name'] }}">{{ $lates['student']['name'] }}</option>
                <option value="{{ $student['name'] }}">{{ $student['name'] }}</option>
            @endforeach
        </select>
        <div class="relative z-0 w-full mb-5 group mt-5">
            <input type="datetime-local" name="date_time_late" id="date_time_late" 
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $lates['date_time_late'] }}"/>
            <label for="date_time_late"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="textarea" name="information" id="information" 
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required value="{{ $lates['information'] }}"/>
            <label for="information"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6" >Keterangan Keterlambatan</label>
        </div>   

        <div class="relative z-0 w-full mb-5 group mt-6">
            <input type="file" name="bukti" id="bukti" 
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="bukti"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bukti Keterlambatan</label>
        </div>  
        <div class="mt-4">
            <img src="{{ asset('storage/images/' . $lates['bukti']) }}" alt="" class="" width="150">
        </div> 
         

        <button type="submit"
            class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
@endsection