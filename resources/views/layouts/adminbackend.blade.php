<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title}}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicons.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.0-canary.14/tailwind.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet"/>
    <link href="/public/js/app.js" rel="stylesheet"/>

    <link href='https://fonts.googleapis.com/css?family=Asap' rel='stylesheet'>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
    /**
    * tailwind.config.js
    * module.exports = {
    *   variants: {
    *     extend: {
    *       backgroundColor: ['active'],
    *     }
    *   },
    * }
    */
    .active\:bg-gray-50:active {
        --tw-bg-opacity:1;
        background-color: rgba(249,250,251,var(--tw-bg-opacity));
    }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <script>
      function changeCategory(){
        var category = document.getElementById("category_id");
        if(category.value == "x"){
          document.getElementById("c2_div").style.display="none";
        }else if(category.value == "1"){
          document.getElementById("c2_div").style.display="none";
        }else{
          document.getElementById("c2_div").style.display="block";
        }
      }
    </script>
    <style>
      #c2_div { display: none; }
    </style>
    <!--Regular Datatables CSS-->
	 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

   <style>
		
		/*Overrides for Tailwind CSS */
		
		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568; 			/*text-gray-700 (Show 10 Entries)*/
			padding-left: 1rem; 		/*pl-4*/
			padding-right: 1rem; 		/*pl-4*/
			padding-top: .5rem; 		/*pl-2*/
			padding-bottom: .5rem; 		/*pl-2*/
			line-height: 1.25; 			/*leading-tight*/
			border-width: 2px; 			/*border-2*/
			border-radius: .25rem; 		
			border-color: #ffe0ff; 		/*border-gray-200* Border search dan show entries/
			background-color: #edf2f7; 	/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
			background-color: #ffe0ff;	/*bg-indigo-100*/
		}
		
		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button		{
			font-weight: 700;				/*font-bold*/
			border-radius: .25rem;			/*rounded*/
			border: 1px solid transparent;	/*border border-transparent*/
		}
		
		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current	{
			color: #fff !important;				/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06); 	/*shadow*/
			font-weight: 700;					/*font-bold*/
			border-radius: .25rem;				/*rounded*/
			background: #670067 !important;		/*bg-indigo-500*/
			border: 1px solid transparent;		/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover		{
			color: #fff !important;				/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);	 /*shadow*/
			font-weight: 700;					/*font-bold*/
			border-radius: .25rem;				/*rounded*/
			background: #670067 !important;		/*bg-indigo-500*/
			border: 1px solid transparent;		/*border border-transparent*/
		}
		
		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;	/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}
		
		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important; /*bg-indigo-500*/
		}
		
    </style>

    <!-- jQuery -->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
      $(document).ready(function() {
        
        var table = $('#example').DataTable( {
            responsive: true
          } )
          .columns.adjust()
          .responsive.recalc();
      } );
    
    </script>
    <script>
      window.setTimeout(function (){
        $(".alert").fadeTo(500,0).slideUp(500, function(){
          $(this).remove();
        });
      }, 3000)
    </script>
</head>
<body class="bg-gray-50">
<div>
    <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">
      <!-- Loading screen -->
      <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        Loading.....
      </div>
      <!-- Sidebar backdrop -->
      <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
      </div>
      <!-- Sidebar -->
      <aside
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full opacity-30  ease-in"
        x-transition:enter-end="translate-x-0 opacity-100 ease-out"
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start="translate-x-0 opacity-100 ease-out"
        x-transition:leave-end="-translate-x-full opacity-0 ease-in"
        class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
        :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">
        <!-- sidebar header -->
        <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
            <span class="flex justify-between p-2 font-semibold leading-8 tracking-wider text-white uppercase item-center text-md whitespace-nowrap">
                <a href="{{ route('dashboard') }}">
                  <img src="{{ asset('favicons.png') }}" class="w-10 h-10"><img></a>
                <span :class="{'lg:hidden': !isSidebarOpen}">
                <img src="{{ asset('logo') }}/logo3.png" class="w-full h-full"><img>
                </span>
              
                <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                    <svg
                    class="w-6 h-6 text-artiliser"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </span>
        </div>
        <!-- Sidebar links -->
        <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
          <ul class="p-2 overflow-hidden">
            <li>
                <a href="{{ route('dashboard') }}" class="relative flex flex-row items-center pr-6 text-gray-900 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                </a>
            </li>
            <span class="text-sm font-light tracking-wide text-gray-500">
                <span :class="{'lg:hidden': !isSidebarOpen}">Menu</span>
            </span>
            <li>
                <a href="/post" class="relative flex flex-row items-center pr-6 text-gray-900 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Posts</span>
                </a>
            </li>
            <li>
                <a href="/print-material" class="relative flex flex-row items-center pr-6 text-gray-900 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Print Materials</span>
                </a>
            </li>
            <li>
                <a href="/print-type" class="relative flex flex-row items-center pr-6 text-gray-900 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Print Types</span>
                </a>
            </li>
            <li>
                <a href="/category" class="relative flex flex-row items-center pr-6 text-gray-800 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Categories</span>
                </a>
            </li>
            <li>
                <a href="/size" class="relative flex flex-row items-center pr-6 text-gray-800 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Sizes</span>
                </a>
            </li>
            <li>
                <a href="/carousel-row" class="relative flex flex-row items-center pr-6 text-gray-600 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg enable-background="new 0 0 512 512" height="19" viewBox="0 0 512 512" width="19" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                        <path d="m452 70h-40v-10c0-33.085938-26.914062-60-60-60h-192c-33.085938 0-60 26.914062-60 60v10h-40c-33.085938 0-60 26.914062-60 60v251c0 33.085938 26.914062 60 60 60h40v11c0 33.085938 26.914062 60 60 60h192c33.085938 0 60-26.914062 60-60v-11h40c33.085938 0 60-26.914062 60-60v-251c0-33.085938-26.914062-60-60-60zm-392 331c-11.027344 0-20-8.972656-20-20v-251c0-11.027344 8.972656-20 20-20h40v291zm312 51c0 11.027344-8.972656 20-20 20h-192c-11.027344 0-20-8.972656-20-20v-392c0-11.027344 8.972656-20 20-20h192c11.027344 0 20 8.972656 20 20zm100-71c0 11.027344-8.972656 20-20 20h-40v-291h40c11.027344 0 20 8.972656 20 20zm0 0"/>
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Carousel Rows</span>
                </a>
            </li>
            <li>
                <a href="/about/admin" class="relative flex flex-row items-center pr-6 text-gray-800 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">About</span>
                </a>
            </li>
            <span class="text-sm font-light tracking-wide text-gray-500">
                <span :class="{'lg:hidden': !isSidebarOpen}">User</span>
            </span>
            <li>
                <a href="/user" class="relative flex flex-row items-center pr-6 text-gray-900 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-50 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    </span>
                    <span class="ml-2 text-sm tracking-wide truncate">User</span>
                </a>
            </li>
            <!-- Sidebar Links... -->
          </ul>
        </nav>
      </aside>

      <div class="flex flex-col flex-1 h-full overflow-hidden">
        <!-- Navbar -->
        <header class="flex-shrink-0 border-b bg-artiliser">
          <div class="flex items-center justify-between p-2">
            <!-- Navbar left -->
            <div class="flex items-center space-x-3">
              <!-- Toggle sidebar button -->
              <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none ">
                <svg class="w-4 h-4 text-white" :class="{'transform transition-transform -rotate-180': isSidebarOpen}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>

            <!-- Mobile search box -->
            <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20" style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
              <div @click.away="isSearchBoxOpen = false" class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                <div class="flex items-center flex-1 px-2 space-x-2">
                  <!-- search icon -->
                  <span>
                    <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                  </span>
                  <input type="text" placeholder="Search" class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                </div>
                <!-- close button -->
                <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                  <svg class="w-4 h-4 text-artiliser" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Desktop search box -->
            <div class="items-center hidden px-2 space-x-2 md:flex-1 md:flex md:mr-auto md:ml-5">
              <!-- search icon -->
              <span>
                <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </span>
              <input type="text" placeholder="Search" class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:shadow md:focus:border" />
            </div>

            <!-- Navbar right -->
            <div class="relative flex items-center space-x-3">
              <!-- Search button -->
              <button @click="isSearchBoxOpen = true" class="p-2 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200" >
                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </button>
              <div class="items-center hidden space-x-3 md:flex"></div>
              <!-- avatar button -->
              <div class="relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="{{ asset('favicons.png') }}"
                  />
                </button>
                <!-- green dot -->
                <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>

                <!-- Dropdown card -->
                <div
                  @click.away="isOpen = false"
                  x-show.transition.opacity="isOpen"
                  class="absolute h-10 max-w-md mt-3 transform bg-gray-200 rounded-md shadow-lg w-38 -translate-x-3/4 min-w-max">
                  <div class="flex items-center w-auto px-2 py-2 space-x-4 text-base text-gray-400">
                        <a class="text-sm text-artiliser" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i  class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Main content -->
        <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll">
            <!-- Main content header -->
            <div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
                <h1 class="text-2xl font-semibold whitespace-nowrap">{{ $title}}</h1>
            </div>

            <!-- Start Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                            
                    @yield('content')
                            
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>