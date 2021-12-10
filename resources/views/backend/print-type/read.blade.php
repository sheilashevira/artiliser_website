@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
  <div class="-mx-3 md:flex mb-2">
    <div class="md:w-full px-3 mb-6 md:mb-0">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
       Print Type
      </label>
      <input readonly value="{{ $data->name }}" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4 mb-3" style="border-color:#670067" id="grid-first-name" type="text">
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label style="color:#670067" class="block tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
        Description
      </label>
      <textarea readonly name="description" class="border-2 border-gray-500">{{ $data->description }}</textarea>
      <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'description' );
      </script>
    </div>
  </div>
  <div class="card-footer">
  <a href="/print-type" style="color:#670067; border-color:#670067" class="inline-block px-6 py-1 text-xs font-medium leading-6 text-center transition bg-transparent border rounded ripple focus:outline-none">Back</a>
  </div>
</div>
@endsection