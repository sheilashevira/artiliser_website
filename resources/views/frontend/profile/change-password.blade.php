@extends('layouts.userfrontend')
@section('content')
  <div class="container mx-auto ">
    <div class="grid mx-10 mt-16 md:mt-1 lg:mt-36">
      <div class="container mx-auto mt-16 mt-96 lg:mt-72">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded-lg shadow-xl -mt-96 sm:-mt-72">
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="flex justify-center w-full px-4 mb-16 lg:w-3/12 lg:mb-28 lg:order-2">
                <div class="relative flex flex-col items-center justify-center h-full text-white bg-black bg-opacity-50">
                <!-- <div class="relative"> -->
                  <img alt="..." src="https://i.pinimg.com/474x/f9/61/30/f961306179ce606db7bedb1d731436b6.jpg" class="absolute flex items-center justify-center w-24 h-24 -m-16 -ml-16 align-middle border-none rounded-full lg:h-36 lg:w-36 lg:-ml-16" style="max-width: 150px;" >
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h3 class="mb-2 text-xl font-semibold leading-normal text-gray-800 lg:text-4xl">
              Sheila Shevira
            </h3>
            <div class="mt-0 text-sm font-bold leading-normal text-gray-500 uppercase lg:text-xl">
              <i class="mr-2 text-gray-500 fas fa-map-marker-alt text-md" ></i>
                  Jimbaran, Bali
            </div>
          </div>
          {{-- <div class="px-3 py-6 mt-0 text-center ">
            <a href="/edit-profile" type="button" class="inline-flex items-center justify-center px-8 py-2 mb-2 text-sm border rounded rounded-md shadow-sm hover-artiliser hover:bg-artiliser hover:text-white text-artiliser lg:text-base leading-2 lg:leading-6 border-artiliser " type="button">
              Edit Profile
            </a>
            <a href="/change-password" type="button"  class="inline-flex items-center justify-center px-3 py-2 text-sm border rounded rounded-md shadow-sm hover-artiliser hover:bg-artiliser hover:text-white text-artiliser lg:text-base leading-2 lg:leading-6 border-artiliser"  type="button">
              Change Password
            </a>
          </div> --}}
          <div class="py-5 mt-5 border-t border-gray-300">
            <div class="relative flex flex-col justify-center mx-8 items-left">
              <h2 class="mt-4 text-xl font-bold text-center lg:mt-6 lg:text-center lg:text-3xl text-artiliser ">
				        Change Password
			        </h2>
			        <p class="mt-4 text-sm text-justify text-gray-400 lg:mt-2 md:text-center">Enter your new password below, and make sure you're remember your password.</p>
            </div>
            <form class="px-8 mt-8 space-y-6 lg:mx-72 " action="#" method="POST">
              <div class="py-0 " x-data="{ show: true }">
                <span class="px-0 font-semibold lg:px-0 text-md text-artiliser">Current Password</span>
                  <div class="relative ">
                    <input placeholder="Enter Current Password" :type="show ? 'password' : 'text'" class="block w-full px-0 py-2 placeholder-gray-400 bg-white border-b text-md lg:px-0 lg:border-b lg:border-artiliser border-border focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'hidden': show, 'block':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                          d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                      </svg>
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'block': show, 'hidden':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                          d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                      </svg>
                    </div>
                  </div>
              </div>
              <div class="py-0" x-data="{ show: true }">
                <span class="px-0 font-semibold lg:px-0 text-md text-artiliser">New Password</span>
                  <div class="relative">
                    <input placeholder="Enter New Password" :type="show ? 'password' : 'text'" class="block w-full px-0 py-2 placeholder-gray-400 bg-white border-b text-md lg:px-0 lg:border-b lg:border-artiliser border-border focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'hidden': show, 'block':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                          d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                      </svg>
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'block': show, 'hidden':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                          d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                      </svg>
                    </div>
                  </div>
              </div>
              <div class="py-0" x-data="{ show: true }">
                <span class="px-0 font-semibold lg:px-0 text-md text-artiliser">Confirm Password</span>
                  <div class="relative">
                    <input placeholder="Enter Confirm Password" :type="show ? 'password' : 'text'" class="block w-full px-0 py-2 placeholder-gray-400 bg-white border-b text-md lg:px-0 lg:border-b lg:border-artiliser border-border focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'hidden': show, 'block':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                          d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                      </svg>
                      <svg class="h-4 text-gray-900" fill="none" @click="show = !show"
                        :class="{'block': show, 'hidden':!show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                          d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                      </svg>
                    </div>
                  </div>
              </div>
              <div class="relative">
                <a href="#" type="submit" class="hover-artiliserdark hover:bg-artiliserdark hover:text-white flex justify-center bg-artiliser text-white p-2.5 rounded-lg hover:text-white mb-10 lg:mb-20">
                  Change Password
                </a>
              </div>
            </form>
            <div class="relative">
              <a href="/profile" type="button" class="flex justify-center block mb-4 lg:hidden text-artiliser">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
              </a>
              <a href="/profile" type="button" class="inline-flex items-center justify-center hidden w-24 px-2 py-2 text-xs text-center border rounded rounded-md shadow-sm hover-artiliser hover:bg-artiliser hover:text-white border-artiliser lg:block lg:ml-8 lg:mb-2 lg:text-base leading-2 lg:leading-6 text-artiliser">
                Back
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection