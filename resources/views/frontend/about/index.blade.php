@extends('layouts.userfrontend')
@section('content')
<div class="w-full">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid mx-10 mt-10">
              <!-- About -->
              <div class="w-full  flex justify-center items-center">
                <img class="float-left object-cover w-32 md:w-52 lg:w-60 xl:w-72 shadow-sm" src="https://cdn.discordapp.com/attachments/664629434573258763/854211822747779072/logo.png" >
              </div>
              @foreach($data as $data)
              <div class="w-full border-b flex justify-center items-center">
                <div class="w-full mt-20 mb-20 md:mx-8 lg:mx-20 xl:mx-40  flex-col justify-center items-center">
                  <h2 class="text-center font-semibold text-gray-500" style="font-family: 'Montserrat', sans-serif;">{{ $data->content }}</h2>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
<div id="contact" class="w-full" style="background-color: #F8F0F8">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid mx-10 mt-10 mb-40">
            <h1 class="mb-10 text-2xl text-center md:text-5xl md:block" style="color:#670067; font-family:Asap; font-weight:1000">Contact Us</h1>
                <!-- Contact Us-->
                <div class="flex justify-center items-center">
                    <h2 class="text-center"><br><b>Erik van der Schaft</b>
                    <br>erik [at] artiliser dot com
                    </h2>
                    {{-- <form class="px-8 space-y-6 md:mx-32 lg:mx-60 xl:mx-96 " action="#" method="POST">
                    <div class="py-0 ">
                        <div class="relative ">
                            <input placeholder="Put Your Name" type="text" class="w-full h-10 px-3 border-2 rounded-lg border-artiliser placeholder-table focus:placeholder-table focus:border-artiliser text-md" style="font-family: 'Montserrat', sans-serif;">
                        </div>
                    </div>
                    <div class="py-0 ">
                        <div class="relative ">
                            <input placeholder="Put Your Email" type="email" class="w-full h-10 px-3 border-2 rounded-lg border-artiliser placeholder-table focus:placeholder-table focus:border-artiliser text-md" style="font-family: 'Montserrat', sans-serif;">
                        </div>
                    </div>
                    <div class="py-0 ">
                        <div class="relative ">
                            <input placeholder="Put Your Message" type="text" class="w-full h-40 px-3 border-2 rounded-lg border-artiliser placeholder-table focus:placeholder-table focus:border-artiliser pb-28 text-md" style="font-family: 'Montserrat', sans-serif;">
                        </div>
                    </div>
                    <div class="relative flex items-center justify-center">
                        <a href="#" type="submit" class="flex justify-center w-32 h-10 p-2 text-white rounded-lg hover-artiliserdark hover:bg-artiliserdark hover:text-white bg-artiliser" style="font-family: 'Montserrat', sans-serif;">
                        Send
                        </a>
                    </div>
                    </form> --}}
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
@endsection