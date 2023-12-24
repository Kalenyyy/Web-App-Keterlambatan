@extends('layouts.template')

@section('content')
    @if (Auth::check())
        @if (Auth::user()->role == 'admin')
            <div class="p-10 mt-10 sm:ml-64">
                <div class="container mx-auto p-4">
                    <h1 class="text-2xl mb-1 font-bold">Dashboard</h1>
                    <h3 class="mb-2 text-base font-semibold">Dashboard /</h3>

                    <div class="flex flex-wrap -mx-4">

                        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/3 p-4">
                            <div
                                class="card-1 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 flex items-center">
                                <i class="fa-solid fa-users fa-2xl mr-4"></i>
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Peserta
                                        Didik</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
                                        {{ DB::table('students')->count() }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/3 p-4">
                            <div
                                class="card-1 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 flex items-center">
                                <i class="fa-solid fa-user-gear fa-2xl mr-4"></i>
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Administrator</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
                                        {{ DB::table('users')->where('role', 'admin')->count() }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 lg:w-1/3 xl:w-1/3 p-4">
                            <div
                                class="card-1 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 flex items-center">
                                <i class="fa-solid fa-user-tie fa-2xl mr-4"></i>
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Pembimbing Siswa</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
                                        {{ DB::table('users')->where('role', 'ps')->count() }}</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-wrap -mx-4 mt-8">

                        <div class="w-full sm:w-1/2 p-4">
                            <div
                                class="card-1 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 flex items-center">
                                <i class="fa-solid fa-bookmark fa-2xl mr-4"></i>
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rombel
                                    </h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
                                        {{ DB::table('rombels')->count() }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 p-4">
                            <div
                                class="card-1 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 flex items-center">
                                <i class="fa-solid fa-bookmark fa-2xl mr-4"></i>
                                <div>
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rayon
                                    </h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">
                                        {{ DB::table('rayons')->count() }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        @endif
        @if (Auth::user()->role == 'ps')
            <div class="p-10 mt-10 sm:ml-64">
                <h1 class="text-2xl mb-1 font-bold">Dashboard {{ Auth::user()->name }}</h1>
                <h3 class="mb-2 font-semibold">Dashboard /</h3>

                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full sm:w-1/2 lg:w-1/2 xl:w-1/3 p-4">
                            <div class="card bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 h-full flex items-center">
                                <i class="fa-solid fa-users fa-2xl mr-4"></i>
                                <div class="text-container">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Peserta Didik {{ Auth::user()->name }}
                                    </h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">{{ $murids->count() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 lg:w-1/2 xl:w-1/3 p-4">
                            <div class="card bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 p-6 h-full flex items-center">
                                <i class="fa-solid fa-calendar-days fa-2xl mr-4"></i>
                                <div class="text-container">
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Keterlambatan Hari Ini
                                    </h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400 text-xl">{{ $jmlTelatHarian }}</p>
                                </div>
                            </div>
                        </div>
                    
                </div>
                
            </div>
        @endif
    @endif


@endsection
