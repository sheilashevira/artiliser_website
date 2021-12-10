@extends('layouts.adminbackend')
@section('content')
    <div class="flex flex-wrap">
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-red-200 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-gray-600 uppercase">Posts</h5>
                        <h3 class="text-3xl font-bold">{{ $posts }}</h3>
                        <a href="/post" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-yellow-200 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-base lg:text-xs text-gray-600 uppercase">Print Materials</h5>
                        <h3 class="text-3xl font-bold">{{ $printmaterials }}</h3>
                        <a href="/print-material" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-green-200 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-gray-600 uppercase">Print Types</h5>
                        <h3 class="text-3xl font-bold">{{ $printtypes }}</h3>
                        <a href="/print-type" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-purple-200 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-gray-600 uppercase">Categories</h5>
                        <h3 class="text-3xl font-bold">{{ $categories }}</h3>
                        <a href="/category" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-green-300 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-gray-600 uppercase">Sizes</h5>
                        <h3 class="text-3xl font-bold">{{ $sizes }}</h3>
                        <a href="/size" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-purple-300 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg enable-background="new 0 0 512 512" class="w-24 h-24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                            <path d="m452 70h-40v-10c0-33.085938-26.914062-60-60-60h-192c-33.085938 0-60 26.914062-60 60v10h-40c-33.085938 0-60 26.914062-60 60v251c0 33.085938 26.914062 60 60 60h40v11c0 33.085938 26.914062 60 60 60h192c33.085938 0 60-26.914062 60-60v-11h40c33.085938 0 60-26.914062 60-60v-251c0-33.085938-26.914062-60-60-60zm-392 331c-11.027344 0-20-8.972656-20-20v-251c0-11.027344 8.972656-20 20-20h40v291zm312 51c0 11.027344-8.972656 20-20 20h-192c-11.027344 0-20-8.972656-20-20v-392c0-11.027344 8.972656-20 20-20h192c11.027344 0 20 8.972656 20 20zm100-71c0 11.027344-8.972656 20-20 20h-40v-291h40c11.027344 0 20 8.972656 20 20zm0 0"/>
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-base lg:text-xs text-gray-600 uppercase">Carousel Rows</h5>
                        <h3 class="text-3xl font-bold">{{ $carouselrows }}</h3>
                        <a href="/carousel-row" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-yellow-300 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                          </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold text-gray-600 uppercase">User</h5>
                        <h3 class="text-3xl font-bold">{{ $users }}</h3>
                        <a href="/user" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full p-6 md:w-1/2 xl:w-1/4">
            <!--Metric Card-->
            <div class="p-5 bg-pink-300 rounded-lg shadow-xl bg-gradient-to-b">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        {{-- <h5 class="font-bold text-gray-600 uppercase">About</h5> --}}
                        <h4 class="text-3xl font-bold">About</h4>
                        <a href="/about" class="small-box-footer">Show Detail</a>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
    </div>

@endsection