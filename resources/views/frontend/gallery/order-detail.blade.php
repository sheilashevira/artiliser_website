@extends('layouts.userfrontend')
@section('content')
<link rel="stylesheet" href="{{ asset('css/selector3.css') }}">


<div class="w-full bg-white">
  <div class="max-w-screen-xl px-4 py-4 mx-auto font-medium lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
    <div class=" container mx-auto">
      <div class="grid mx-4  lg:mt-10">
        <!-- Cart -->
        <div class=" flex flex-row justify-center">
            <div class=" flex flex-col w-full">
                <h1 class="text-2xl text-center md:text-5xl mb-8" style="color:#670067; font-family:'Asap';">Your Cart</h1>
                <p class="text-sm text-center md-text-base mb-10" style="color:#6C656C; font-family:'Montserrat', sans-serrif;">Make sure the data you entered is correct.</p>
            </div>
            <div class=" flex flex-col items-right">
                <a href="/gallery">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-10 md:w-10 " style="color:#645A5A" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="w-full bg-white lg:block hidden">
    <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row ">
        <div class="container mx-auto ">
            <div class=" grid mx-10">
                <!-- Link -->
                <div class="flex flex-row">
                    <a href="/gallery/detail" class="text-sm font-semibold text-gray-400 hover:text-artiliser focus:text-artiliser" style="font-family: 'Montserrat', sans-serif;">Home</a>
                    <p class="text-sm font-semibold text-gray-400 mx-2" style="font-family: 'Montserrat', sans-serif;">/</p>
                    <a href="/gallery/abstract" class="text-sm font-semibold text-gray-400 hover:text-artiliser focus:text-artiliser" style="font-family: 'Montserrat', sans-serif;">Cart Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Desktop -->
<div class="w-full bg-white lg:block hidden">
    <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row ">
        <div class="container mx-auto ">
            <div class=" grid mx-10">
                <!-- Link -->
                <div class="flex flex-row w-full">
                    <!-- Bagian Kiri -->
                    <div class="flex flex-col w-full ">
                        <h1 class="text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Your Items</h1>
                        <div class="flex flex-row  mb-10">
                            <img class="float-left object-cover w-28 h-24 shadow-sm rounded-xl mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
                            <img class="float-left object-cover shadow-sm  w-24 h-20 xl:-ml-35 xl:mt-2 lg:-ml-35 lg:mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                            <div class="flex flex-col w-1/2 mr-4">
                                <h1 class=" text-md text-center font-medium md:text-normal md:text-left" style="color:#504A50; font-family:'Asap';">
                                    The title of the name of the art and other paintings.
                                </h1>
                                <p class="mt-2 text-left text-lg md:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                    $500
                                </p>
                            </div>
                            <div class=" flex flex-col w-full mr-2 justify-center items-center">
                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%; ">
                                    <option>Physical Print</option>
                                    <option>Type 1</option>
                                </select>
                                <div class="flex flex-row w-full mt-4 ">
                                    <div class="mr-2 w-full">
                                        <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                            <option>100x200cm</option>
                                            <option>Type 1</option>
                                        </select>
                                    </div>
                                    <div class="ml-2 w-full">
                                        <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                            <option>Canvas</option>
                                            <option>Type 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <a href="#" type="button" class="text-white rounded-lg border border-bg-red-500 bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="border mr-8 mb-10" style="color:#F0EAEA;"></div>
                        <h1 class="mt-10text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Shipping Details</h1>
                        <div class="flex flex-col">
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Full Name</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Enter Full Name" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito';" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Complete Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address II</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Additional Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">City</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <select id="city1" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                    <option>Select City</option>
                                    <option>North Wilkesboro</option>
                                    <option>City 1</option>
                                </select>
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Country</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <select id="country1" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                    <option>Select Country</option>
                                    <option>United States</option>
                                    <option>Country 1</option>
                                </select>
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Zip Code</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Insert Zip Code" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Email Address</span>
                            <div class="relative w-full lg:w-3/5 mb-10">
                                <input value="" placeholder="Email address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                        </div>
                    </div>
                    <!-- Bagian Kanan -->
                    <div class="flex flex-col w-1/2">
                        <div class="border rounded-lg grid ml-10 mb-6" style="background-color:#FCFCFC; border-color:#E9CFE9">
                            <div class="flex flex-col w-full">
                                <!-- Title -->
                                <div class="px-4 py-4 text-artiliser">
                                    <h1 class=" text-sm md:text-md text-center font-bold md:text-left" style="color:#670067;  font-family:'Montserrat';">
                                        Cost Information
                                    </h1>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-row px-4 mb-4">
                                    <h1 class=" text-xs md:text-sm text-center md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                        The title of the name of the art and other paintings.
                                    </h1>
                                    <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                        $500
                                    </p>
                                </div>
                                <div class="border-b mx-4 mb-4" style="border-color:#F0EAEA"></div>
                                <!-- Title -->
                                <div class="px-4 pb-4 text-artiliser">
                                    <h1 class=" text-sm md:text-md text-center font-bold md:text-left" style="color:#670067;  font-family:'Montserrat';">
                                        Cost Information
                                    </h1>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-center font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Courier
                                        </h1>
                                        <p class="text-xs text-center md:text-left" style="color:#7C7171;  font-family: 'Montserrat';">
                                            JNT Express
                                        </p>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $150
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-center font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Tax
                                        </h1>
                                        <p class="text-xs text-center md:text-left" style="color:#7C7171;  font-family: 'Montserrat';">
                                            Country 20%
                                        </p>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $200
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-center font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Total price
                                        </h1>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-md md:text-xl font-bold text-center  md:text-left" style="color:#5F82C5;  font-family: 'Montserrat';">
                                            $850
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row ml-10 mb-20 text-center">
                            <div class="border-2 text-sm rounded-lg w-1/2 mr-2 py-1 border-artiliser text-artiliser hover:text-white hover:bg-artiliser">
                                <a href="#" type="button" class="">Cancel</a>
                            </div>
                            <div class="border-2 text-sm rounded-lg w-1/2 ml-2 py-1 bg-artiliser border-artiliser text-white hover:text-white hover:bg-artiliserdark">
                                <a href="/gallery/success" type="button" class="">Checkout</a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- Mobile -->
<div class="w-full bg-white block lg:hidden">
    <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row ">
        <div class="container mx-auto ">
            <div class=" grid mx-5 sm:mx-10">
                <!-- Link -->
                <div class="flex flex-col lg:flex-row w-full">
                    <!-- Bagian Kiri -->
                    <div class="flex flex-col w-full ">
                        <h1 class="text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Your Items</h1>
                        <div class="flex flex-row mb-4 lg:mb-10">
                            <img class="float-left object-cover w-24 h-20 lg:w-28 lg:h-24 shadow-sm rounded-xl mr-4 lg:mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
                            <div class="flex flex-col w-full mr-8">
                                <h1 class=" text-xs md:text-lg lg:text-md text-left font-medium md:text-normal lg:text-left" style="color:#504A50; font-family:'Asap';">
                                    The title of the name of the art and other paintings.
                                </h1>
                                <p class="mt-2 text-left text-lg md:text-2xl lg:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                    $500
                                </p>
                            </div>
                            <div class="flex flex-col ">
                                <a href="#" type="button" class="text-white rounded-lg border border-bg-red-500 bg-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="relative flex flex-row mb-10 mr-6 w-full">
                            <div class="typeprint flex flex-col w-full  justify-center items-center">
                                <div class="flex flex-col relative h-full w-full">
                                    <div class="typeprint2 relative w-full">
                                        <select id="typeprint2" class="select2 req_place" data-select-search="true" placeholder="-- Select Country --" style="width: 100%;">
                                            <option value="0">Physical Print</option>
                                            <option value="1">Type 1</option>
                                            <option value="2">Type 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-row relative w-full mt-4 ">
                                    <div class="size2 mr-2 relative w-full">
                                        <select id="size2" class="select2 req_place" data-select-search="true" placeholder="-- Select Country --" style="width: 100%;">
                                            <option value="0">100x200cm</option>
                                            <option value="1">Type 1</option>
                                            <option value="2">Type 2</option>
                                        </select>
                                    </div>
                                    <div class="type 2 ml-2 relative w-full">
                                        <select id="type2" class="select2 req_place" data-select-search="true" class="ml-2 w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                            <option value="0">Canvas</option>
                                            <option value="1">Type 1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border mb-10" style="color:#F0EAEA;"></div>
                        <h1 class="text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Shipping Details</h1>
                        <div class="flex flex-col">
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Full Name</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Enter Full Name" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito';" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Complete Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address II</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Additional Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">City</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <select id="city2" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                    <option>Select City</option>
                                    <option>North Wilkesboro</option>
                                    <option>City 1</option>
                                </select>
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Country</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <select id="country2" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                    <option>Select Country</option>
                                    <option>United States</option>
                                    <option>Country 1</option>
                                </select>
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Zip Code</span>
                            <div class="relative w-full lg:w-3/5 mb-4">
                                <input value="" placeholder="Insert Zip Code" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                            <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Email Address</span>
                            <div class="relative w-full lg:w-3/5 mb-10">
                                <input value="" placeholder="Email address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-300 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                            </div>
                        </div>
                    </div>
                    <!-- Bagian Kanan -->
                    <div class="flex flex-col w-full">
                        <div class="border rounded-lg grid mb-6" style="background-color:#FCFCFC; border-color:#E9CFE9">
                            <div class="flex flex-col w-full">
                                <!-- Title -->
                                <div class="px-4 py-4 text-artiliser">
                                    <h1 class=" text-sm md:text-md text-left font-bold md:text-left" style="color:#670067;  font-family:'Montserrat';">
                                        Cost Information
                                    </h1>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-row px-4 mb-4">
                                    <h1 class=" text-xs md:text-sm text-left md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                        The title of the name of the art and other paintings.
                                    </h1>
                                    <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                        $500
                                    </p>
                                </div>
                                <div class="border-b mx-4 mb-4" style="border-color:#F0EAEA"></div>
                                <!-- Title -->
                                <div class="px-4 pb-4 text-artiliser">
                                    <h1 class=" text-sm md:text-md text-left font-bold md:text-left" style="color:#670067;  font-family:'Montserrat';">
                                        Cost Information
                                    </h1>
                                </div>
                                <!-- Content -->
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-cleftenter font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Courier
                                        </h1>
                                        <p class="text-xs text-left md:text-left" style="color:#7C7171;  font-family: 'Montserrat';">
                                            JNT Express
                                        </p>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $150
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-left font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Tax
                                        </h1>
                                        <p class="text-xs text-left md:text-left" style="color:#7C7171;  font-family: 'Montserrat';">
                                            Country 20%
                                        </p>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $200
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-row px-4 mb-4 ">
                                    <div class="flex flex-col w-full">
                                        <h1 class=" text-xs md:text-sm text-left font-bold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                                            Total price
                                        </h1>
                                    </div>
                                    <div class="flex justify-center items-center">
                                        <p class="text-md md:text-xl font-bold text-center  md:text-left" style="color:#5F82C5;  font-family: 'Montserrat';">
                                            $850
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row mb-20 text-center">
                            <div class="border-2 text-sm rounded-lg w-1/2 mr-2 py-1 border-artiliser text-artiliser hover:text-white hover:bg-artiliser">
                                <a href="#" type="button" class="">Cancel</a>
                            </div>
                            <div class="border-2 text-sm rounded-lg w-1/2 ml-2 py-1 bg-artiliser border-artiliser text-white hover:text-white hover:bg-artiliserdark">
                                <a href="/gallery/success" type="button" class="">Checkout</a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-artiliser w-full">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid mx-10 mt-1 md:mt-3 mb-1 md:mb-3">
                <!-- Footer -->
                <div class="bottom-0 text-center">
                    <h4 class="text-xs font-medium text-white " style="font-family: 'Montserrat';"> &COPY; 2021 Artiliser. All rights reserved.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown Search JS -->
<script>
  $(document).ready(function(){
  
    // Initialize select2
    $("#city1").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#city1 option:selected').text();
      var userid = $('#city1').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });

  $(document).ready(function(){
  
    // Initialize select2
    $("#country1").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#country1 option:selected').text();
      var userid = $('#country1').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });

  $(document).ready(function(){
  
    // Initialize select2
    $("#city2").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#city2 option:selected').text();
      var userid = $('#city2').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });

  $(document).ready(function(){
  
    // Initialize select2
    $("#country2").select2();

    // Read selected option
    $('#but_read').click(function(){
        var username = $('#country2 option:selected').text();
        var userid = $('#country2').val();

        $('#result').html("id : " + userid + ", name : " + username);

    });
  });
</script>
@endsection