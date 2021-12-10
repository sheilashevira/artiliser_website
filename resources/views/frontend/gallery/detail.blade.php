@extends('layouts.userfrontend')
@section('content')
<link rel="stylesheet" href="{{ asset('css/selector3.css') }}">

<div id="detail" >
    <div class="w-full lg:block hidden">
        <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row ">
            <div class="container mx-auto ">
                <div class=" grid mx-10 lg:mt-10">
                    <!-- Link -->
                    <div class="flex flex-row">
                        <a href="/gallery" class="text-sm font-semibold text-gray-400 hover:text-artiliser focus:text-artiliser" style="font-family: 'Montserrat', sans-serif;">Gallery</a>
                        <p class="text-sm font-semibold text-gray-400 mx-2" style="font-family: 'Montserrat', sans-serif;">/</p>
                        <a class="text-sm font-semibold text-gray-400  focus:text-artiliser" style="font-family: 'Montserrat', sans-serif;">Abstract</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row">
            <div class="container mx-auto ">
                <div class=" grid mx-10 mb-10">
                    <!-- Detail Image Desktop -->
                    <div class="mt-8 lg:mt-0 hidden md:block">
                        <div class="grid items-start grid-cols-1 md:grid-cols-2">
                            <div class="w-full md:pr-0">
                                <img id="art_image" class="float-left object-cover w-full shadow-sm lg:w-5/6 h-60 md:h-80 xl:h-96 rounded-3xl" src="{{ asset('img') }}/{{ $data->image }}" > 
                                <img class="md:block hidden float-left object-cover shadow-sm xl:w-20 xl:h-4 xl:ml-96 xl:-mt-90 lg:w-20 lg:h-4 lg:ml-72 lg:-mt-76 md:w-20 md:h-4 md:ml-60 md:-mt-76 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                <img class="md:block hidden float-left object-cover shadow-sm xl:w-1/2 xl:h-1/2 xl:-mt-80 xl:ml-24 lg:w-1/2 lg:h-1/2 lg:-mt-64 lg:ml-20 md:w-1/2 md:h-1/2 md:-mt-56 md:ml-24 w-32 h-40 -mt-48 ml-4 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <img class="md:block hidden float-left object-cover shadow-sm xl:w-20 xl:h-4 xl:ml-4 xl:-mt-8 lg:w-20 lg:h-4 lg:ml-4 lg:-mt-8 md:w-20 md:h-4 md:ml-4 md:-mt-8 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                
                            </div>
                            <div class="mt-3 ml-0 lg:-ml-12 md:ml-8 md:mt-0">
                                <p id="image_name" class="-ml-104" style="color:transparent">{{ $data->image }}</p>
                                <p id="id_art" class="hidden float-center text-2xl md:text-2xl lg:text-4xl md:text-left text-center font-semibold tracking-tighter" style="color:#670067; font-family: 'Nunito', sans-serif;">
                                    {{ $data->id }}
                                </p>
                                <p id="name" class=" float-center text-2xl md:text-2xl lg:text-4xl md:text-left text-center font-semibold tracking-tighter" style="color:#670067; font-family: 'Nunito', sans-serif;">
                                    {{ $data->name }}
                                </p>
                                <div class="flex flex-row border-b justify-center items-center md:justify-start md:items-left">
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center leading-2 text-xs lg:text-sm font-bold" style="color:#6C656C; font-family: 'Montserrat', sans-serif;">
                                        Date Post
                                    </p>
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center text-gray-700 text-xs lg:text-sm leading-2 mx-2" style="font-family: 'Montserrat', sans-serif;">
                                        |
                                    </p>
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center text-gray-700 text-xs lg:text-sm leading-2" style="font-family: 'Montserrat', sans-serif;">
                                        {{ $data->created_at->format('l d/m/Y') }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                    Choose Physical Or Digital Print :
                                    </label>
                                    <div class="type relative w-full lg:full mt-4" >
                                        <select placeholder="Choose a type" class="px-3 w-full h-10 rounded-lg" style="color:#6D6969; background-color:#F5F6FA">
                                            <option value="{{ $data->print_types->id }}">{{ $data->print_types->name }}</option>
                                            @foreach ($printtypes as $types)
                                            <option value="{{ $types->id }}">{{ $types->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-row">
                                    <div class="flex flex-col w-1/2 mr-1 ">
                                        <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                        Choose Art Size :
                                        </label>
                                        <div class=" relative w-full lg:full mt-4">
                                            <select placeholder="Choose a type" class="px-3 w-full h-10 rounded-lg" style="color:#6D6969; background-color:#F5F6FA">
                                                <option value="{{ $data->sizes->id }}">{{ $data->sizes->name }}</option>
                                                @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-col w-1/2 ml-1 ">
                                        <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                        Choose Printed Material :
                                        </label>
                                        <div class=" relative w-full lg:full mt-4">
                                            <select placeholder="Choose a type" class="px-3 w-full h-10 rounded-lg" style="color:#6D6969; background-color:#F5F6FA">
                                                <option value="{{ $data->print_materials->id }}">{{ $data->print_materials->name }}</option>
                                                @foreach ($printmaterials as $material)
                                                <option value="{{ $material->id }}">{{ $material->name }}</option>
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-row ">
                                    <div class="flex flex-col w-1/2 lg:w-1/2 lg:mr-1 ">
                                        <p id="price" class="mt-4 text-center md:text-left text-artiliser text-4xl lg:text-5xl " style="font-family: 'Montserrat'; font-weight:600;">
                                         ${{ $data->price }}
                                        </p>
                                    </div>
                                    <div class="flex flex-row w-full justify-center items-center  ">
                                        <div class="add-cart flex flex-col w-full mx-4">
                                            <button style="border-color:#670067; " class="mt-4 hover:bg-artiliser justify-center items-center hover:text-white text-artiliser border-artiliser rounded  text-center py-1 text-xs lg:text-base border-2 rounded-md shadow-sm">
                                                Add to Cart
                                            </button>
                                        </div>
                                        <div class="flex flex-col w-full ">
                                            <button onclick="myFunction3()" style="border-color:#670067; " class="mt-4 hover:bg-artiliserdark justify-center items-center hover:text-white text-white border-artiliser bg-artiliser rounded  text-center py-1 text-xs lg:text-base border-2 rounded-md shadow-sm">
                                                Buy Now
                                            </button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Detail Image Mobile -->
                    <div class="mt-8 lg:mt-0 md:hidden block">
                        <div class="grid items-start grid-cols-1 md:grid-cols-2">
                            <div class="w-full md:pr-0">
                                <img class="float-left object-cover w-full shadow-sm lg:w-5/6 h-60 md:h-80 xl:h-96 rounded-3xl" src="{{ asset('img') }}/{{ $data->image }}" >
                                <img class="float-left object-cover shadow-sm w-16 h-3 xxxs:-mt-58 xxxs:ml-50 xs:ml-64 xs:-mt-58 x4s:-mt-58 x4s:ml-42 xxs:ml-54 xxs:-mt-56 s2:-mt-58 s2:ml-96 x5s:-mt-58 x5s:ml-32 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                <img class="float-left object-cover shadow-sm w-32 h-40 xxxs:-mt-50 xxxs:ml-20 xs:ml-26 xs:-mt-50 x4s:ml-14 x4s:-mt-50 xxs:ml-22 xxs:-mt-50 s2:ml-42 s2:-mt-50 x5s:ml-8 x5s:-mt-50 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <img class="float-left object-cover shadow-sm w-16 h-3 xxxs:-mt-6 xxxs:ml-4 xs:ml-4 xs:-mt-6 x4s:-mt-5 x4s:ml-4 xxs:ml- xxs:-mt- x5s:-mt-5 x5s:ml-3 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                            </div>
                            <div class="mt-3 ml-0 lg:-ml-12 md:ml-8 md:mt-0">
                                <p class="float-center text-2xl md:text-2xl lg:text-4xl md:text-left text-center font-semibold tracking-tighter" style="color:#670067; font-family: 'Nunito', sans-serif;">
                                    {{ $data->name }}
                                </p>
                                <div class="flex flex-row border-b justify-center items-center md:justify-start md:items-left">
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center leading-2 text-xs lg:text-sm font-bold" style="color:#6C656C; font-family: 'Montserrat', sans-serif;">
                                        Date Post
                                    </p>
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center text-gray-700 text-xs lg:text-sm leading-2 mx-2" style="font-family: 'Montserrat', sans-serif;">
                                        |
                                    </p>
                                    <p class=" float-right mt-6 mb-4 md:text-left text-center text-gray-700 text-xs lg:text-sm leading-2" style="font-family: 'Montserrat', sans-serif;">
                                        {{ $data->created_at->format('l d/m/Y') }}
                                    </p>
                                </div>
                                <div class="flex flex-col">
                                    <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                    Choose Physical Or Digital Print :
                                    </label>
                                    <div class=" relative w-full lg:full mt-4">
                                        <select placeholder="Choose a type" class="px-3 w-full h-10 rounded-lg" style="color:#D3CCCC; background-color:#F5F6FA">
                                            <option value="{{ $data->print_types->id }}">{{ $data->print_types->name }}</option>
                                            @foreach ($printtypes as $types)
                                            <option value="{{ $types->id }}">{{ $types->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                    Choose Art Size :
                                    </label>
                                    <div class="type5 relative w-full lg:full mt-4">
                                        <select placeholder="Choose a type" class="px-3 w-full h-10 rounded-lg" style="color:#D3CCCC; background-color:#F5F6FA">
                                            <option value="{{ $data->sizes->id }}">{{ $data->sizes->name }}</option>
                                            @foreach ($sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label  class="float-right mt-4 text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;">
                                    Choose Printed Material :
                                    </label>
                                    <div class="type6 relative w-full lg:full mt-4">
                                        <select placeholder="Choose a type"  class="px-3 w-full h-10 rounded-lg" style="color:#D3CCCC; background-color:#F5F6FA">
                                            <option value="{{ $data->print_materials->id }}">{{ $data->print_materials->name }}</option>
                                            @foreach ($printmaterials as $material)
                                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex flex-col w-full lg:w-1/2 lg:mr-1 justify-center items-center ">
                                        <p  class="mt-8 text-center items-center md:text-left text-artiliser text-4xl lg:text-5xl " style="font-family: 'Montserrat'; font-weight:600; ">
                                            $ {{ $data->price }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-row ">
                                    <div class="flex flex-row w-full justify-center items-center  ">
                                        <div class="add-cart flex flex-col w-full mx-4">
                                            <button style="border-color:#670067; " class="add mt-4 hover:bg-artiliser justify-center items-center hover:text-white text-artiliser border-artiliser rounded md:px-2 lg:px-8 text-center py-1 text-xs lg:text-base border-2 rounded-md shadow-sm">
                                                Add to Cart
                                            </button>
                                        </div>
                                        <div class="flex flex-col w-full ">
                                            <button onclick="myFunction3()" style="border-color:#670067; " class="mt-4 hover:bg-artiliserdark justify-center items-center hover:text-white text-white border-artiliser bg-artiliser rounded md:px-2 lg:px-8 text-center py-1 text-xs lg:text-base border-2 rounded-md shadow-sm">
                                                Buy Now
                                            </button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row">
            <div class="container mx-auto ">
                <div class=" grid mx-10 mb-10">
                    <!-- Description Title -->
                    <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Description</p>
                    <!-- Description -->
                    <h2 class="mt-6 text-left md:text-left text-xs lg:text-sm lg:block xl:block leading-2" style="color:#706770; font-family:'Montserrat', sans-serif;">
                        {!! $data->content !!}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Types Desktop -->
    <div class="w-full md:block hidden">
        <div class="  max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row">
            <div class="container mx-auto ">
                <div class="border rounded-lg grid mx-10 mb-20" style="background-color:#F3E5F3; border-color:#CEA4CE">
                    <!-- Types Desktop -->
                    <div class="flex flex-row px-4 py-8">
                        <div class="flex flex-col mx-3">
                            <!-- Types 1 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Physical Print</p>
                            <!-- Description -->
                            <p class="mt-6 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eaque nam earum aliquam odio debitis non est ut, numquam, natus ipsa. Quibusdam dolore tenetur tempora soluta cum? Illum, nisi repudiandae?
                            </p>
                        </div>
                        <div class="flex flex-col mx-3">
                            <!-- Types 2 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Digital Print</p>
                            <!-- Description -->
                            <p class="mt-6 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat adipisci facere fugit voluptas recusandae dolorem non quos, quis dolor accusantium. Est in iusto neque laudantium officiis exercitationem, illum nam? Necessitatibus.
                            </p>
                        </div>
                        <div class="flex flex-col mx-3 ">
                            <!-- Types 3 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Material Print</p>
                            <!-- Description -->
                            <p class="mt-6 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima mollitia commodi adipisci illum quidem exercitationem rerum, temporibus ut perferendis earum qui ratione dolorum, expedita quis, eos consequuntur nam impedit? Dolores?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Types Mobile -->
    <div class="w-full md:hidden block">
        <div class=" max-w-screen-xl px-0 lg:px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row">
            <div class="container mx-auto ">
                <div class=" rounded-lg grid mx-10 mb-10" style="background-color:#F3E5F3; border-color:#CEA4CE">
                    <!-- Types Mobile -->
                    <div class="flex flex-col px-4 py-8">
                        <div class="flex flex-col mx-1 mr-3">
                            <!-- Types 1 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Physical Print</p>
                            <!-- Description -->
                            <p class="mt-2 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eaque nam earum aliquam odio debitis non est ut, numquam, natus ipsa. Quibusdam dolore tenetur tempora soluta cum? Illum, nisi repudiandae?
                            </p>
                        </div>
                        <div class="flex flex-col mx-1 mr-3 mt-4">
                            <!-- Types 2 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Digital Print</p>
                            <!-- Description -->
                            <p class="mt-2 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat adipisci facere fugit voluptas recusandae dolorem non quos, quis dolor accusantium. Est in iusto neque laudantium officiis exercitationem, illum nam? Necessitatibus.
                            </p>
                        </div>
                        <div class="flex flex-col mx-1 mr-3 mt-4">
                            <!-- Types 3 -->
                            <p class="text-left md:text-left text-artiliser text-xs lg:text-sm font-extrabold lg:block xl:block leading-2" style="font-family: 'Nunito', sans-serif;" style="color:#670067; font-family:Asap; font-weight:1000">Material Print</p>
                            <!-- Description -->
                            <p class="mt-2 text-left md:text-left text-xs lg:text-sm  lg:block xl:block leading-2" style="color:#9B8F9B; font-family:'Montserrat', sans-serif;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima mollitia commodi adipisci illum quidem exercitationem rerum, temporibus ut perferendis earum qui ratione dolorum, expedita quis, eos consequuntur nam impedit? Dolores?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="  w-full bg-artiliserthin">
        <div class=" max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row ">
            <div class=" container mx-auto">
                <div class="grid mx-10 mt-10 mb-20">
                    <h1 class="text-2xl text-center md:text-5xl md:block mb-10" style="color:#670067; font-family:Asap; font-weight:1000">Similar Art</h1>
                    <!-- Photo Grid Card 1-->
                    <div class="container items-center mx-auto my-auto lg:flex">
                        <!-- Card -->
                        @foreach($gallery as $data)
                        <div class="container items-center mx-auto my-auto mr-4 lg:flex-col hover:shadow-lg hover:bg-artiliserlight rounded-xl">
                            <!-- Image -->
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('img') }}/{{ $data->image }}" alt="" class="items-center justify-center w-full overflow-hidden xl:w-full xl:h-80 lg:w-full lg:h-72 md:w-4/5 md:h-96 h-52 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" alt="" class="items-center justify-center hidden w-1/2 md:block h-1/2 lg:-mt-76 md:-mt-96 -mt-52 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" alt="" class="items-center justify-center block w-1/2 md:hidden h-1/2 lg:-mt-76 md:-mt-72 -mt-52 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-start">
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" alt="" class="items-center justify-center hidden w-20 h-4 md:block xl:-mt-120 xl:ml-68 lg:-mt-106 lg:ml-48 md:ml-103 md:-mt-136 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" alt="" class="items-center justify-center block w-20 h-4 md:hidden xl:-mt-120 xl:ml-68 lg:-mt-106 lg:ml-48 md:ml-56 md:-mt-106 xxxs:ml-44 xxxs:-mt-96 xs:ml-56 x4s:ml-34 x4s:-mt-96 xxs:ml-48 s2:ml-88 x5s:w-16 x5s:h-3 x5s:ml-24 x5s:-mt-96 rounded-3xl">
                              </div>
                              <div class="flex items-center justify-start">
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" alt="" class="items-center justify-center hidden w-20 h-4 md:block lg:-mt-10 lg:ml-4 md:-mt-10 md:ml-20 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" alt="" class="items-center justify-center block w-20 h-4 md:hidden lg:-mt-10 lg:ml-4 md:-mt-10 md:ml-4 xxxs:ml-2 xxxs:-mt-8 x4s:ml-2 x4s:-mt-8 x5s:w-16 x5s:h-3 x5s:ml-2 x5s:-mt-8 rounded-3xl">
                            </div>
                            <!-- Content -->
                            <div class="flex items-center justify-center md:items-left md:justify-start">
                                <div class="p-4">
                                    <p class="mx-0 font-bold text-center text-black md:text-left sm:mx-0 md:mx-16 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                        {{ $data->name }} 
                                    </p>
                                    <h2 class="hidden mx-0 mt-2 text-xs font-normal text-justify text-gray-400 lg:block sm:mx-0 md:mx-16 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">
                                        {!! $data->content !!}
                                    </h2>
                                    <div class="flex justify-end mx-0 items-right sm:mx-0 md:mx-16 lg:mx-0 xl:mx-0">
                                        <a href="{{ $data->id }}" class="py-2 text-xs font-semibold hover:text-purple-900 text-artiliser" style="font-family: 'Montserrat', sans-serif;">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
</div>

<div id="checkout" class="hidden">
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
                        <button onclick="myFunction4()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-10 md:w-10 " style="color:#645A5A" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
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
                    <div class=" flex flex-row w-full">
                        <!-- Bagian Kiri -->
                        <div class=" flex flex-col w-full ">
                            <h1 class="text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Your Items</h1>
                            <div class="cartdisplay flex flex-col mb-10">                                
                                {{-- <img class="float-left object-cover w-28 h-24 shadow-sm rounded-xl mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
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
                                </div> --}}
                            </div>
                            {{-- <div class="flex flex-row mb-10">
                                <img class="float-left object-cover w-28 h-24 shadow-sm  rounded-xl mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
                                <img class="float-left object-cover shadow-sm  w-24 h-20 xl:-ml-35 xl:mt-2 lg:-ml-35 lg:mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <div class="flex flex-col w-1/2 mr-4">
                                    <h1 class=" text-md text-center font-medium md:text-normal md:text-left" style="color:#504A50; font-family:'Asap';">
                                        The title of the name of the art and other paintings.
                                    </h1>
                                    <p class="mt-2 text-left text-lg md:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                        $350
                                    </p>
                                </div>
                                <div class="typeprint flex flex-col w-full mr-2 justify-center items-center">
                                    <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%; ">
                                        <option>Digital Print</option>
                                        <option>Type 1</option>
                                    </select>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <a href="#" type="button" class="text-white rounded-lg border border-bg-red-500 bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="border mr-8 mb-10" style="color:#F0EAEA;"></div>
                            <h1 class="mt-10text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Shipping Details</h1>
                            <div id="div1" class=" border rounded-lg grid mr-8 mb-20" style="background-color:#FBF0F0; border-color:#EF9BEF">
                                <div class="flex flex-row w-full">
                                    <!-- Icon -->
                                    <div class="px-4 py-4 text-artiliser">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <!-- Nama dan Alamat -->
                                    <div class="flex flex-col py-4 w-full">
                                        <h1 class=" text-sm md:text-md text-center font-semibold md:text-left" style="color:#656363;  font-family:'Asap';">
                                            Daniel Radcliffe
                                        </h1>
                                        <p class="text-sm md:text-md text-center  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Ingram Road, North Wilkesboro, NC 28659,North
                                        </p>
                                        <p class="text-sm md:text-md text-center  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Wilkesboro,United States, 4211 |
                                        </p>
                                        <p class="text-sm md:text-md text-center  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Daniel@youremail.com
                                        </p>
                                    </div>
                                    <!-- Button Edit -->
                                    <div class="px-4 py-4 text-artiliser" >
                                        <button class="font-bold text-artiliser hover:text-artiliserdark focus:text-artiliserdark" onclick="myFunction()">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div id="div2" class="flex flex-col hidden">
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Full Name</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="Daniel Radcliffe" placeholder="Input Full Name" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="Ingram Road" placeholder="Input Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address II</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="North Wilkesboro, NC 28659" placeholder="Input Address II" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">City</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <select id="city1" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                        <option>North Wilkesboro</option>
                                        <option>City 1</option>
                                    </select>
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Country</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <select id="country1" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                        <option>United States</option>
                                        <option>Country 1</option>
                                    </select>
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Zip Code</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="4211" placeholder="Input Zip Code" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Email Address</span>
                                <div class="relative w-full lg:w-3/5 mb-10">
                                    <input value="Daniel@youremail.com" placeholder="Input Email Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
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
                                            The title of the name of the art and other paintings. 2
                                        </h1>
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $350
                                        </p>
                                    </div>
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
                                                $350
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
                                                $1,200
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row ml-10 mb-20 text-center">
                                <div class="border-2 text-sm rounded-lg w-1/2 mr-2 py-1 border-artiliser text-artiliser hover:text-white hover:bg-artiliser">
                                    <a href="#" type="button" class="">Cancel</a>
                                </div>
                                <button @click={show=true} type="button"class="border-2 text-sm rounded-lg w-1/2 ml-2 py-1 bg-artiliser border-artiliser text-white hover:text-white hover:bg-artiliserdark">Checkout</button>
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
                            <div class="cartdisplay2">
                                {{-- <div class="flex flex-row mb-4 lg:mb-10">
                                    <img class="float-left object-cover w-24 h-20 lg:w-28 lg:h-24 shadow-sm rounded-xl mr-4 lg:mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
                                    <img class="float-left object-cover shadow-sm  w-20 h-16 md:-ml-25 md:mt-2 -ml-25 mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
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
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">United States Minor Outlying Islands</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-row relative w-full mt-4 ">
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">100x200cm</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                            <div class=" ml-2 relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">Canvas</option>
                                                    <option value="1">Type 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- <div class="flex flex-row mb-4 lg:mb-10">
                                <img class="float-left object-cover w-24 h-20 lg:w-28 lg:h-24 shadow-sm rounded-xl mr-4 lg:mr-10" src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" >
                                <img class="float-left object-cover shadow-sm  w-20 h-16 md:-ml-25 md:mt-2 -ml-25 mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <div class="flex flex-col w-full mr-8">
                                    <h1 class=" text-xs md:text-lg lg:text-md text-left font-medium md:text-normal lg:text-left" style="color:#504A50; font-family:'Asap';">
                                        The title of the name of the art and other paintings.
                                    </h1>
                                    <p class="mt-2 text-left text-lg md:text-2xl lg:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                        $350
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
                            <div class="flex flex-row mb-10">
                                <div class="typeprint flex flex-col w-full justify-center items-center">
                                    <div class="flex flex-col relative h-full w-full">
                                        <div class=" relative w-full">
                                            <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                <option value="0">Digital Print</option>
                                                <option value="1">Type 1</option>
                                                <option value="2">Type 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="border mb-10" style="color:#F0EAEA;"></div>
                            <h1 class="text-xl text-left font-extrabold md:text-4xl mb-10" style="color:#670067; font-family:'Asap';">Shipping Details</h1>
                            <div id="div3" class="border rounded-lg grid mb-10" style="background-color:#FBF0F0; border-color:#EF9BEF">
                                <div class="flex flex-row w-full">
                                    <!-- Icon -->
                                    <div class="px-4 py-4 text-artiliser">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <!-- Nama dan Alamat -->
                                    <div class="flex flex-col py-4 w-full">
                                        <h1 class=" text-sm md:text-md text-left font-semibold md:text-left" style="color:#656363;  font-family:'Asap';">
                                            Daniel Radcliffe
                                        </h1>
                                        <p class="text-sm md:text-md text-left  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Ingram Road, North Wilkesboro, NC 28659,North
                                        </p>
                                        <p class="text-sm md:text-md text-left  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Wilkesboro,United States, 4211 |
                                        </p>
                                        <p class="text-sm md:text-md text-left  md:text-left" style="color:#656363;  font-family: 'Nunito';">
                                            Daniel@youremail.com
                                        </p>
                                    </div>
                                    <!-- Button Edit -->
                                    <div class="px-4 py-4 text-artiliser">
                                        <button onclick="myFunction2()" class="font-bold text-artiliser hover:text-artiliserdark focus:text-artiliserdark">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div id="div4" class="flex flex-col hidden">
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Full Name</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="Daniel Radcliffe" placeholder="Input Full Name" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="Ingram Road" placeholder="Input Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Address II</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="North Wilkesboro, NC 28659" placeholder="Input Address II" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">City</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <select id="city2" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                        <option>North Wilkesboro</option>
                                        <option>City 1</option>
                                    </select>
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Country</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <select id="country2" class="select2 req_place w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" data-select-search="true" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                        <option>United States</option>
                                        <option>Country 1</option>
                                    </select>
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Zip Code</span>
                                <div class="relative w-full lg:w-3/5 mb-4">
                                    <input value="4211" placeholder="Input Zip Code" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
                                </div>
                                <span class="text-sm lg:text-md text-artiliser font-bold mb-2 lg:mr-3 " style="font-family:'Nunito'">Email Address</span>
                                <div class="relative w-full lg:w-3/5 mb-10">
                                    <input value="Daniel@youremail.com" placeholder="Input Email Address" style="background-color:#F5F6FA; color:#6D6969; font-family:'Nunito'" class="text-md px-3 py-2 w-full placeholder-gray-400 focus:placeholder-gray-500 focus:bg-artiliserlight"> 
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
                                            The title of the name of the art and other paintings. 2
                                        </h1>
                                        <p class="text-xs md:text-sm  text-center  md:text-left" style="color:#46814C;  font-family: 'Montserrat';">
                                            $350
                                        </p>
                                    </div>
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
                                                $350
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
                                                $1,200
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
                                    <button @click={show=true} type="button" class="">Checkout</button>
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
</div>

<!-- Modal -->
<div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
    <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
            <div class="px-6 py-3 text-xl border-b font-bold">Payment</div>
            <!-- Body -->
            <div class="modal-content py-4 text-left px-6">
                <div id="paypal-button-container"></div>
                <div class="flex justify-center items-center">
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AVL4XnsNLQHS2ZNeIv6AiN7p1WTWHNYbx6CxJBEyaNzyjH4n9Jb6u6Bq_pJbrmVADdL9oIqnXax30Vux"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
                    </script>
                </div>
            </div>
            <!-- Footer -->
            <div class="flex justify-end pt-2 px-6 bg-gray-100">
                    <div class="flex flex-col w-full">
                        <h1 class=" text-xs md:text-base text-left font-extrabold md:text-left w-full mr-2" style="color:#504A50;  font-family:'Montserrat';">
                            Total price
                        </h1>
                    </div>
                    <div class="flex justify-center items-center">
                        <p class="text-md md:text-xl font-bold text-center  md:text-left" style="color:#5F82C5;  font-family: 'Montserrat';">
                            $1,200
                        </p>
                    </div>
                </div>
        </div>
    </div>
    <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
</div>

<!-- Paypal JS -->
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script>

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

<!-- Hide Show Div JS -->
<script>
    function myFunction() {
        var x = document.getElementById("div1");
        var y = document.getElementById("div2");

        if(y.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }

    function myFunction2() {
        var x = document.getElementById("div3");
        var y = document.getElementById("div4");

        if(y.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }

    function myFunction3() {
        var x = document.getElementById("detail");
        var y = document.getElementById("checkout");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }

    function myFunction4() {
        var x = document.getElementById("checkout");
        var y = document.getElementById("detail");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }

    function myFunction5() {
        var x = document.getElementById("detail");
        var y = document.getElementById("checkout");

        if(x.style.display === "none"){
            x.style.display = "none";
            y.style.display = "block";
        }else {
            x.style.display = "none";
            y.style.display = "block";
        }
    }
</script>

<!-- JS dan CSS untuk Modal -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
  .model-open{
	overflow: hidden; 
    height: 100vh;
  }
</style>

<!-- Cart JS -->
<script>
    const btn = document.querySelectorAll('.add-cart');
    const products = [];

    for (var i=0; i < btn.length; i++){
        let cartBtn = btn[i]
        cartBtn.addEventListener('click', () =>{
            let product ={
                image: event.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src,
                name: event.target.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[2].textContent,
                price: event.target.parentElement.parentElement.parentElement.children[0].children[0].textContent,
                totalPrice: parseInt(event.target.parentElement.parentElement.parentElement.children[0].children[0].textContent),
                inCart: 1
              }
              addItemToLocal(product)
        })
    }

    function addItemToLocal(product){
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        if(cartItem === null){
            products.push(product)
            localStorage.setItem('prdInCart', JSON.stringify(products))
            
        }else{
            cartItem.forEach(item => {
                if(product.name == item.name){
                    product.inCart = item.inCart += 1;
                    product.totalPrice = item.totalPrice += product.totalPrice;
                }else{
                    products.push(item)
                }
            });
            products.push(product)
        }
        localStorage.setItem('prdInCart', JSON.stringify(products))
        window.location.reload()
    }

    function cartNumberDisplay(){
        let cartNumbers = 0;
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item => {
            cartNumbers = item.inCart += cartNumbers;
        });
        console.log(cartNumbers);
        document.querySelector('.cart span').textContent = cartNumbers;
    }
    cartNumberDisplay()

    // Display Cart untuk Desktop
    function displayCartItem(){
        let html = '';
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item => {
            html += `
                        <div class="md:block hidden">
                                <div class="flex flex-row mb-10">
                                    <div class="flex flex-row mb-10"> 
                                        <img class="float-left object-cover w-28 h-24 shadow-sm rounded-xl mr-10" src="${item.image}" >
                                        <img class="float-left object-cover shadow-sm  w-24 h-20 xl:-ml-35 xl:mt-2 lg:-ml-35 lg:mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                        <div class="flex flex-col w-80 mr-4">
                                            <h1 class=" text-md text-center font-medium md:text-normal md:text-left" style="color:#504A50; font-family:'Asap';">
                                                ${item.name}
                                            </h1>
                                            <p class="mt-2 text-left text-lg md:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                                ${item.price}
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
                                        <div class="removeItem flex flex-col justify-center items-center">
                                            <button class=" text-white rounded-lg border border-bg-red-500 bg-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="md:hidden block">
                                <div class="flex flex-row mb-4 lg:mb-10">
                                    <img class="float-left object-cover w-24 h-20 lg:w-28 lg:h-24 shadow-sm rounded-xl mr-4 lg:mr-10" src="${item.image}" >
                                    <img class="float-left object-cover shadow-sm  w-20 h-16 md:-ml-25 md:mt-2 -ml-25 mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                    <div class="flex flex-col w-full mr-8">
                                        <h1 class=" text-xs md:text-lg lg:text-md text-left font-medium md:text-normal lg:text-left" style="color:#504A50; font-family:'Asap';">
                                            ${item.name}
                                        </h1>
                                        <p class="mt-2 text-left text-lg md:text-2xl lg:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                            ${item.price}
                                        </p>
                                    </div>
                                    <div class="removeItem flex flex-col ">
                                        <button class="text-white rounded-lg border border-bg-red-500 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="relative flex flex-row mb-10 mr-6 w-full">
                                    <div class="typeprint flex flex-col w-full  justify-center items-center">
                                        <div class="flex flex-col relative h-full w-full">
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">United States Minor Outlying Islands</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-row relative w-full mt-4 ">
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">100x200cm</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                            <div class=" ml-2 relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">Canvas</option>
                                                    <option value="1">Type 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    `

        });
        document.querySelector('.cartdisplay').innerHTML = html;
    }
    displayCartItem()

    // Display Cart untuk Mobile
    function displayCartItems(){
        let html = '';
        let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
        cartItem.forEach(item => {
            html += `
                                <div class="flex flex-row mb-4 lg:mb-10">
                                    <img class="float-left object-cover w-24 h-20 lg:w-28 lg:h-24 shadow-sm rounded-xl mr-4 lg:mr-10" src="${item.image}" >
                                    <img class="float-left object-cover shadow-sm  w-20 h-16 md:-ml-25 md:mt-2 -ml-25 mt-2 mr-10" src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                    <div class="flex flex-col w-full mr-8">
                                        <h1 class=" text-xs md:text-lg lg:text-md text-left font-medium md:text-normal lg:text-left" style="color:#504A50; font-family:'Asap';">
                                            ${item.name}
                                        </h1>
                                        <p class="mt-2 text-left text-lg md:text-2xl lg:text-3xl" style="color:#8B8282; font-family: 'Asap';">
                                            ${item.price}
                                        </p>
                                    </div>
                                    <div class="removeItem flex flex-col ">
                                        <button class=" text-white rounded-lg border border-bg-red-500 bg-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="relative flex flex-row mb-10 mr-6 w-full">
                                    <div class="typeprint flex flex-col w-full  justify-center items-center">
                                        <div class="flex flex-col relative h-full w-full">
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">United States Minor Outlying Islands</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex flex-row relative w-full mt-4 ">
                                            <div class="relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">100x200cm</option>
                                                    <option value="1">Type 1</option>
                                                    <option value="2">Type 2</option>
                                                </select>
                                            </div>
                                            <div class=" ml-2 relative w-full">
                                                <select class="w-full h-10 px-3 text-artiliser rounded border-white text-sm font-extrabold focus:ring-artiliser" style="background-color:#F5ECF5; font-family:'Nunito', sans-serif; width: 100%;">
                                                    <option value="0">Canvas</option>
                                                    <option value="1">Type 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    `

        });
        document.querySelector('.cartdisplay2').innerHTML = html;
    }
    displayCartItems()

    const removeItem = document.getElementsByClassName('removeItem')
    for (var i=0; i < removeItem.length; i++){
        let removeBtn = removeItem[i]
        removeBtn.addEventListener('click', () => {
            let cartItem = JSON.parse(localStorage.getItem('prdInCart'))
            console.log(event.target.parentElement.parentElement.parentElement.parentElement.children[2].children[0].textContent);
            cartItem.forEach(item => {
                if(item.name != event.target.parentElement.parentElement.parentElement.parentElement.children[2].children[0].textContent){
                    products.push(item)
                }
            });
            localStorage.setItem('prdInCart', JSON.stringify(products))
            window.location.reload()
        })
    }
</script>

@endsection