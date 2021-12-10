@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
<form action="/user/insert" method="POST">
  @csrf
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/2 px-3 sm:mb-2 sm:mt-1">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
            Name
        </label>
        <input id="name" name="name" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4" style="border-color:#670067" id="grid-first-name" type="text" placeholder="Input User Name">
    </div>
  </div>
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/3 px-3 sm:mb-2 sm:mt-1">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
            Email
        </label>
        <input id="role" name="email" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4" style="border-color:#670067" id="grid-first-name" type="email" placeholder="Input Email">
        <div class="text-red-600">
          @error('email')
            {{ $message}}
          @enderror
        </div>
    </div>
    <div class="md:w-1/6 px-3 sm:mb-6 mt-6 sm:mt-0">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-carousel-rows">
          Role
        </label>
        <select name="role" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
          <option value="">Pick Roles</option>
          <option value="Customer">Customer</option>
          <option value="Admin">Admin</option>
        </select>
        <div class="text-red-600">
          @error('role')
            {{ $message}}
          @enderror
        </div>
    </div>
  </div>
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/2 px-3 sm:mb-6 mt-6 sm:mt-0">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
            Password
        </label>
        <input type="password" name="password" id="password" autocomplete="off"  class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4" style="border-color:#670067" id="grid-first-name" placeholder="Input Password" required>
        {{-- <div class="absolute inset-y-0 mb-16 ml-60 pr-3 flex items-center text-sm leading-2"> 
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
              d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31 -92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"> 
            </path> 
          </svg> 
        </div> --}}
        <div class="text-red-600">
          @error('password')
            {{ $message}}
          @enderror
        </div>
      </div>
  </div>
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/2 px-3 sm:mb-6 mt-6 sm:mt-0">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
          Password Confirmation
      </label>
      <input type="password" name="password_confirmation"  autocomplete="off"  class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4" style="border-color:#670067" id="grid-first-name" placeholder="Input Password Confirmation" required>
      {{-- <div class="absolute inset-y-0 mb-16 ml-60 pr-3 flex items-center text-sm leading-2"> 
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
            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31 -92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"> 
          </path> 
        </svg> 
      </div> --}}
      <div class="text-red-600">
        @error('password')
          {{ $message}}
        @enderror
      </div>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus:outline-none">Save</button>
    <a href="/user" class="inline-block px-6 py-1 text-xs text-artiliser font-medium leading-6 text-center transition bg-transparent border border-artiliser rounded ripple focus:outline-none">Back</a>
  </div>
</form>
</div>
@endsection

      
      
    