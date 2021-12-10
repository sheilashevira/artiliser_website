@extends('layouts.adminbackend')
@section('content')

@if(isset($data->profiles))
<div class="max-w-md-justify-item-center bg-white py-4 px-8 shadow-lg rounded-lg overflow-hidden  my-8">
  <div class="md:flex sm:mb-2 sm:ml-12 sm:mr-12">
    <div class="md:flex-shrink-0 ">
      <div class="flex justify-center md:justify-end">
        <img class="w-36 h-36 object-cover rounded-full border-2 mt-3" src="/img/backend/joy.jpg">
       </div>
    </div>
    <div class="md:w-full px-3 sm:mb-2 md:ml-14">
      <h2 class="text-gray-800 text-1xl font-semibold text-start sm:mt-6">Name</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->name}}</p>
          <div class="py-2"></div>
        </div>
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Email</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->email}}</p>
          <div class="py-2"></div>
        </div> 
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Role</h2>
        <div class="divide-y divide-artiliser md:divide-y-1 ">
          <p> {{$data->role}}</p>
          <div class="py-2"></div>
        </div>  
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Address</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->profiles->address}}</p>
          <div class="py-2"></div>
        </div>             
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Country</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->profiles->countries->name}}</p>
          <div class="py-2"></div>
        </div>
      <h2 class="text-gray-800 text-1xl font-semibold text-start">State</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->profiles->states->name}}</p>
          <div class="py-2"></div>
        </div>
      <h2 class="text-gray-800 text-1xl font-semibold text-start">City</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->profiles->cities->name}}</p>
          <div class="py-2"></div>
        </div>
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Zip Code</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->profiles->zip_code}}</p>
          <div class="py-2"></div>
        </div>
    <div class="flex justify-end mt-4">
      <a href="/user" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus-outline-none">Back</a>
    </div>
  </div>
</div>

@else
<div class="max-w-md-justify-item-center bg-white py-4 px-8 shadow-lg rounded-lg overflow-hidden my-8 sm:mb-2 sm:ml-12 sm:mr-12">
  <div class="sm:ml-12   sm:mr-12">
  <h2 class="text-gray-800 text-1xl font-semibold text-start sm:mt-4">Name</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->name}}</p>
          <div class="py-2"></div>
        </div>
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Email</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <p> {{$data->email}}</p>
          <div class="py-2"></div>
        </div> 
      <h2 class="text-gray-800 text-1xl font-semibold text-start">Role</h2>
        <div class="divide-y divide-artiliser md:divide-y-1 ">
          <p> {{$data->role}}</p>
          <div class="py-2"></div>
        </div>  
  </div>
      <div class="flex justify-end mt-4">
       <a href="/user" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus:outline-none ">Back</a>
      </div>
  </div>
</div>
@endif
  
@endsection

      
      
    