@extends('layouts.userfrontend')
@section('content')
<div class="flex flex-col items-center justify-center">
  <img src="https://p4.wallpaperbetter.com/wallpaper/18/910/449/art-artist-brush-color-wallpaper-preview.jpg" alt=""class="flex items-center justify-center overflow-hidden xl:w-full xl:h-96 lg:w-full lg:h-80 md:w-full md:h-80 sm:w-full ">
  <h2 class="text-2xl text-center text-white lg:text-5xl md:text-4xl -mt-36 mb-28 md:-mt-48 md:mb-40 lg:-mt-52 lg:mb-40" style="font-family='Asap';">Search Gallery</h2>
</div>
<div class="w-full bg-artiliserthin">
  <div class="max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
    <div class="container mx-auto">
      <div class="mx-10 mb-10 -mt-12 md:-mt-12">
        <!-- Photo Grid Card 1-->
        <div class="container md:mx-auto " x-data="loadGallery()">
          <div class="flex flex-row items-center justify-center ml-4 box-wrapper">
            <div class="flex items-center w-32 p-3 bg-white border border-gray-200 rounded-lg shadow-lg md:w-80 lg:w-96" style="font-family: 'Montserrat', sans-serif;">
              <form class="input-group w-full" action="{{ route('gallery.get-search')}}" method="GET" role="search">
                <div class="flex flex row">
                <button type="submit" @click="getImages()" class="outline-none focus:outline-none">
                    <svg class="w-4 h-4 text-gray-600 cursor-pointer md:w-5 md:h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
                <input required x-ref="searchField" x-model="search" x-on:click="viewPage(0)" x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()" placeholder="Search..." type="search" name="search" class="form control w-full pl-4 text-sm bg-transparent outline-none focus:outline-none">
                </div>
              </form>
            </div>
            <div class="dropdown_cat" style="font-family: 'Montserrat', sans-serif;">
                <button id="myBtn" onclick="myFunction()" class="dropbtncat bg-white text-xs rounded-lg flex justify-center items-center w-28 md:w-28 lg:w-full h-12  shadow-lg border border-gray-200 mx-4"  >
                  Filter By
                <svg xmlns="http://www.w3.org/2000/svg" class="dropbtncat h-6 w-6 text-artiliser ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>      
              <div id="myDropdownCat" class="dropdown-cat">
                <a href="/gallery" value ="cat-all">All Category</a>
                @foreach ($categories as $cate)
                <a href="{{ route('gallery.get-category', $cate->id) }}" value ="{{ $cate->id }}">{{ $cate->name }}</a>
                @endforeach
            </div>
            </div>
          </div>
          
          <div class="grid grid-cols-1 gap-4 mt-12 md:mt-16 lg:mt-20 md:grid-cols-2 lg:grid-cols-3 ">
            <template x-for="item in filteredGallery" :key="item" class="container items-center mx-auto my-auto">
              <div class="group-1 container items-center mx-auto my-auto lg:flex-col hover:shadow-lg hover:bg-artiliserlight rounded-xl">
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
                    <p x-text="item.content" class="hidden mx-0 mt-2 text-xs font-normal text-justify text-gray-400 lg:block sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0" style=" font-family: 'Montserrat', sans-serif; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;">&nbsp;</p>
                    <div class="flex justify-end mx-0 items-right sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0">
                      <a :href="`detail/${item.id}`" class="py-2 text-xs font-semibold hover:text-purple-900 text-artiliser" style="font-family: 'Montserrat', sans-serif;">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </div>
          <div class="flex items-center justify-center w-full py-6 mx-auto md:w-1/2" x-show="pageCount() > 1" >
            <!--Previous Button-->
            <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }" >
              <p class="p-2 mx-0 font-bold text-center text-gray-300 border md:text-left hover:text-artiliser sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif;">Previous</p>
            </button>
            <!-- Display page numbers -->
            <template x-for="(page,index) in pages()" :key="index" >
              <button class="px-3 py-2 border " :class="{ 'bg-artiliser text-white font-thin' : index === pageNumber }" type="button" x-on:click="viewPage(index)" style="font-family: 'Montserrat', sans-serif;">
                <span x-text="index+1"></span>
              </button>
            </template>
            <!--Next Button-->
            <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 } " >
              <p class="p-2 mx-0 font-bold text-center text-gray-300 border md:text-left hover:text-artiliser sm:mx-0 md:mx-0 lg:mx-0 xl:mx-0" style="font-family: 'Montserrat', sans-serif;">Next</p>
            </button>
          </div>
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
  @if($gallery->isNotEmpty())
    var sourceData = [];
    @foreach($gallery as $data )
        sourceData.push(
            { 
                id: '{{ $data->id }}', 
                title: '{{ $data->name }}' ,
                content: '{{ strip_tags ($data->content) }}',
                image1: "{{ $data->image}} ",
                image2: "https://cdn.discordapp.com/attachments/664629434573258763/859329547564875797/wm_baru2.png",
                image3: "https://cdn.discordapp.com/attachments/664629434573258763/859329550759362590/wm_baru1.png",
            });
    @endforeach
    function loadGallery() {
        return {
          search: "",
          pageNumber: 0,
          size: 9,
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

  @else
  <div>
          <h2>No posts found</h2>
      </div>
  @endif
</script>

<script>
 $('p').each(function(){
    $(this).html($(this).html().replace(/&nbsp;/gi,''));
}); 
</script>

<style>
  .dropdown_cat {
      position: relative;
      display: inline-block;
  }

  .dropdown-cat {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 100%;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      margin-left:1rem;
      margin-right:1rem;
      font-size: 0.75rem;
      line-height: 1rem;
  }

  .dropdown-cat a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      
  }

  .dropdown-cat a:hover {
    background-color: #ddd
  }

  .show {display:block;}
</style>

<script>
  function myFunction() {
    document.getElementById("myDropdownCat").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtncat')) {
      var dropdowns = document.getElementsByClassName("dropdown-cat");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>
@endsection