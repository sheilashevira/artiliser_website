@extends('layouts.userfrontend')
@section('content')
<div class="w-full">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto ">
            <div class="grid mx-10 mb-20 lg:mt-10">
                <!-- Carousel 1 Start -->
                <div class="mt-8 carousel lg:mt-0" data-flickity='{ "freeScroll": true, "autoPlay": true, "imagesLoaded":true, "prevNextButtons": false }'>
                    <!-- Slide -->
                    @foreach ($crOne as $data)
                    <div class="carousel-cell">
                        <a href="{{ route('gallery.detail', $data->id) }}">
                            <div class="grid items-center grid-cols-1 md:grid-cols-2">
                                <div class="w-full md:pr-0 ">
                                    <img class="float-left object-cover w-full shadow-sm lg:w-5/6 h-60 md:h-80 xl:h-96 rounded-3xl" src="{{ asset('img') }}/{{ $data->image}}">
                                    <img class="hidden float-left object-cover w-16 h-3 shadow-sm md:block xl:w-20 xl:h-4 xl:ml-96 xl:-mt-90 lg:w-20 lg:h-4 lg:ml-68 lg:-mt-76 md:w-20 md:h-4 md:ml-58 md:-mt-76 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                    <img class="hidden float-left object-cover w-32 w-full h-40 shadow-sm md:block xl:w-1/2 xl:h-1/2 xl:-mt-80 xl:ml-24 lg:w-1/2 lg:h-1/2 lg:-mt-64 lg:ml-16 md:w-1/2 md:h-1/2 md:-mt-56 md:ml-20 -mt-52 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                    <img class="hidden float-left object-cover w-16 h-3 ml-2 -mt-6 shadow-sm md:block xl:w-20 xl:h-4 xl:ml-2 xl:-mt-8 lg:w-20 lg:h-4 lg:ml-4 lg:-mt-8 md:w-20 md:h-4 md:ml-4 md:-mt-8 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                    <!-- Screen Medium Ke Bawah -->
                                    <img class="block float-left object-cover w-16 h-3 shadow-sm md:hidden xl:w-20 xl:h-4 xl:ml-96 xl:-mt-90 lg:w-20 lg:h-4 lg:ml-68 lg:-mt-76 md:w-20 md:h-4 md:ml-58 md:-mt-76 xxxs:ml-44 xxxs:-mt-58 xs:ml-56 x4s:ml-34 x4s:-mt-58 xxs:ml-48 s2:ml-88 x5s:ml-24 x5s:-mt-58 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                    <img class="block float-left object-cover w-32 w-full h-40 shadow-sm md:hidden xl:w-1/2 xl:h-1/2 xl:-mt-80 xl:ml-24 lg:w-1/2 lg:h-1/2 lg:-mt-64 lg:ml-16 md:w-1/2 md:h-1/2 md:-mt-56 md:ml-20 -mt-52 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                    <img class="block float-left object-cover w-16 h-3 ml-2 -mt-6 shadow-sm md:hidden xl:w-20 xl:h-4 xl:ml-2 xl:-mt-8 lg:w-20 lg:h-4 lg:ml-4 lg:-mt-8 md:w-20 md:h-4 md:ml-4 md:-mt-8 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                </div>
                                <div class="pl-0 mt-3 md:pl-10 md:mt-0">
                                    <h1 class="text-xl text-center float-center md:text-4xl md:text-left" style="color:#670067; font-family:Asap; font-weight:1000">
                                        {{ $data->name}}
                                    </h1>
                                    <h6 class="hidden float-right mt-8 text-left text-gray-700 lg:block xl:block" style="font-family: 'Montserrat', sans-serif;">
                                        {!! $data->content !!}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
        <div class="grid mx-10 mt-10 mb-20">
            <!-- Carousel 2 Start -->
            <div class="carousel" data-flickity='{ "freeScroll": true, "autoPlay": true, "imagesLoaded":true, "prevNextButtons": false }'>
                <!-- Slide 1 -->
                @foreach ($crTwo as $data)
                <div class="carousel-cell">
                    <a href="{{ route('gallery.detail', $data->id) }}">
                        <div class="grid items-center grid-cols-1 md:grid-cols-2">
                            <div class=" md:pr-10">
                                <h1 class="hidden text-xl text-center md:text-4xl md:text-left md:block" style="color:#670067; font-family:Asap; font-weight:1000">
                                    {{ $data->name}}
                                </h1>
                                <h6 class="hidden mt-8 text-left text-gray-700 lg:block xl:block" style="font-family: 'Montserrat', sans-serif;">
                                    {!! $data->content!!}
                                </h6>
                            </div>
                            <div class="">
                                <img class="float-right object-cover w-full shadow-sm lg:w-5/6 h-60 md:h-80 xl:h-96 rounded-3xl" src="{{ asset('img') }}/{{ $data->image}}">
                                <img class="hidden float-left object-cover shadow-sm md:block xl:w-20 xl:h-4 xl:ml-100 xl:-mt-90 lg:w-20 lg:h-4 lg:ml-86 lg:-mt-76 md:w-20 md:h-4 md:ml-58 md:-mt-76 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                <img class="hidden float-left object-cover w-32 w-full h-40 -mt-48 shadow-sm md:block xl:w-1/2 xl:h-1/2 xl:-mt-80 xl:ml-48 lg:w-1/2 lg:h-1/2 lg:-mt-64 lg:ml-36 md:w-1/2 md:h-1/2 md:-mt-56 md:ml-20 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <img class="hidden float-left object-cover shadow-sm md:block xl:w-20 xl:h-4 xl:ml-28 xl:-mt-8 lg:w-20 lg:h-4 lg:ml-22 lg:-mt-8 md:w-20 md:h-4 md:ml-4 md:-mt-8 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                <!-- Screen Medium Ke Bawah -->
                                <img class="block float-left object-cover w-16 h-3 shadow-sm md:hidden xl:w-20 xl:h-4 xl:ml-96 xl:-mt-90 lg:w-20 lg:h-4 lg:ml-68 lg:-mt-76 md:w-20 md:h-4 md:ml-58 md:-mt-76 xxxs:ml-44 xxxs:-mt-58 xs:ml-56 x4s:ml-34 x4s:-mt-58 xxs:ml-48 s2:ml-88 x5s:ml-24 x5s:-mt-58 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                                <img class="block float-left object-cover w-32 w-full h-40 shadow-sm md:hidden xl:w-1/2 xl:h-1/2 xl:-mt-80 xl:ml-24 lg:w-1/2 lg:h-1/2 lg:-mt-64 lg:ml-16 md:w-1/2 md:h-1/2 md:-mt-56 md:ml-20 -mt-52 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png" >
                                <img class="block float-left object-cover w-16 h-3 ml-2 -mt-6 shadow-sm md:hidden xl:w-20 xl:h-4 xl:ml-2 xl:-mt-8 lg:w-20 lg:h-4 lg:ml-4 lg:-mt-8 md:w-20 md:h-4 md:ml-4 md:-mt-8 rounded-3xl " src="https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png" >
                            </div>
                            <div class=" md:pr-10">
                                <h1 class="block text-xl text-center md:text-4xl md:text-left md:hidden" style="color:#670067; font-family:Asap; font-weight:1000">
                                    {{ $data->name}}
                                </h1>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>
<div class="w-full bg-artiliserthin">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid mx-10 mt-10 mb-10">
                <h1 class="mb-10 text-2xl text-center md:text-5xl md:block" style="color:#670067; font-family:Asap; font-weight:1000">Gallery</h1>
                <!-- Photo Grid Card 1-->
                <div class="container md:mx-auto " x-data="loadGallery()">
                    <div class="flex flex-row items-center justify-center hidden ml-4 box-wrapper">
                        <div class="flex items-center w-32 p-3 bg-white border border-gray-200 rounded-lg shadow-lg md:w-80 lg:w-96" style="font-family: 'Montserrat', sans-serif;">
                        <button @click="getImages()" class="outline-none focus:outline-none">
                            <svg class="w-4 h-4 text-gray-600 cursor-pointer md:w-5 md:h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                        <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)" x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()" placeholder="Search..." type="search" class="w-full pl-4 text-sm bg-transparent outline-none focus:outline-none">
                        </div>
                        <div class="flex items-center p-3 mx-4 bg-white border border-gray-200 rounded-lg shadow-lg w-28 md:w-28 lg:w-32" style="font-family: 'Montserrat', sans-serif;">
                        <div class="select">
                            <select name="" id="" class="text-xs bg-transparent outline-none md:text-sm focus:outline-none">
                                <option value="filterby" selected>Filter By</option>
                                <option value="category 1">Category 1</option>
                                <option value="category 2">Category 2</option>
                                <option value="category 3">Category 3</option>
                            </select>
                        </div>  
                    </div>
                </div>
                <div class="grid grid-cols-1 grid-rows-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                    <template x-for="item in filteredGallery" :key="item" class="container items-center mx-auto my-auto">
                        <div class="container items-center mx-auto my-auto lg:flex-col hover:shadow-lg hover:bg-artiliserlight rounded-xl">
                            <div class="flex items-center justify-center">
                                <img :src="`{{ asset('img') }}/${item.image1}`" alt="" class="items-center justify-center w-full overflow-hidden xl:w-full xl:h-80 lg:w-full lg:h-72 md:w-full md:h-72 h-52 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-center">
                                <img :src="`${item.image2}`" alt="" class="items-center justify-center hidden w-1/2 md:block h-1/2 lg:-mt-76 md:-mt-72 -mt-52 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img :src="`${item.image2}`" alt="" class="items-center justify-center block w-1/2 md:hidden h-1/2 lg:-mt-76 md:-mt-72 -mt-52 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-start">
                                <img :src="`${item.image3}`" alt="" class="items-center justify-center hidden w-20 h-4 md:block xl:-mt-120 xl:ml-68 lg:-mt-106 lg:ml-48 md:ml-56 md:-mt-106 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img :src="`${item.image3}`" alt="" class="items-center justify-center block w-20 h-4 md:hidden xl:-mt-120 xl:ml-68 lg:-mt-106 lg:ml-48 md:ml-56 md:-mt-106 xxxs:ml-44 xxxs:-mt-96 xs:ml-56 x4s:ml-34 x4s:-mt-96 xxs:ml-48 s2:ml-88 x5s:w-16 x5s:h-3 x5s:ml-24 x5s:-mt-96 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-start">
                                <img :src="`${item.image3}`" alt="" class="items-center justify-center hidden w-20 h-4 md:block lg:-mt-10 lg:ml-4 md:-mt-10 md:ml-4 rounded-3xl">
                                <!-- Screen Medium Ke Bawah -->
                                <img :src="`${item.image3}`" alt="" class="items-center justify-center block w-20 h-4 md:hidden lg:-mt-10 lg:ml-4 md:-mt-10 md:ml-4 xxxs:ml-2 xxxs:-mt-8 x4s:ml-2 x4s:-mt-8 x5s:w-16 x5s:h-3 x5s:ml-2 x5s:-mt-8 rounded-3xl">
                            </div>
                            <div class="flex items-center justify-center md:items-left md:justify-start">
                                <div class="p-4">
                                    <p x-text="item.title" class="mx-0 font-bold text-center text-black md:text-left sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;"></p>
                                    <p x-text="item.content" class="hidden mx-0 mt-2 text-xs font-normal text-justify text-gray-400 lg:block sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"></p>
                                    <div class="flex justify-end mx-0 items-right sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0">
                                        <a :href="`/gallery/detail/${item.id}`" class="py-2 text-xs font-semibold hover:text-purple-900 text-artiliser" style="font-family: 'Montserrat', sans-serif;">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="flex items-center justify-center">
                    <a href="/gallery" class="mt-6 text-sm font-semibold text-center lg:mt-10 hover:text-purple-900 text-artiliser" style="font-family: 'Montserrat', sans-serif;">Click See More..</a>
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
<div class="w-full bg-artiliser">
    <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid mx-10 mt-1 mb-1 md:mt-3 md:mb-3">
                <!-- Footer -->
                <div class="bottom-0 text-center">
                    <h4 class="text-xs font-medium text-white " style="font-family: 'Montserrat';"> &COPY; 2021 Artiliser. All rights reserved.</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Photo Grid JS -->
<script>
    var sourceData = [];
    @foreach($gallery as $data )
        sourceData.push(
            { 
                id: '{{ $data->id }}', 
                title: '{{ $data->name }}' ,
                content: '{{ strip_tags ($data->content) }}',
                image1: "{{ $data->image }}",
                image2: "https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png",
                image3: "https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png",
            });
    @endforeach
    function loadGallery() {
        return {
          search: "",
          pageNumber: 0,
          size: 6,
          total: "",
          myForData: sourceData,

          get filteredGallery() {
            const start = this.pageNumber * this.size,
              end = start + this.size;

            if (this.search === "") {
              this.total = this.myForData.length;
              return this.myForData.slice(start, end);
            }

            //Return the total results of the filters
            this.total = this.myForData.filter((item) => {
              return item.title
                .toLowerCase()
                .includes(this.search.toLowerCase());
            }).length;

            //Return the filtered data
            return this.myForData
              .filter((item) => {
                return item.title
                  .toLowerCase()
                  .includes(this.search.toLowerCase());
              })
              .slice(start, end);
          },
        };
      }
</script>   

@endsection