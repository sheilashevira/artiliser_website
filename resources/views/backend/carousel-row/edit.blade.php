@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
<form action="/carousel-row/update/{{$data->id}}" method="POST">
    @csrf
  <div class="-mx-3 md:flex mb-2">
    <div class="md:w-full px-3 mb-6 md:mb-0">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-name">
       Carousel Row
      </label>
      <input name="name" value="{{ $data->name }}" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-red rounded py-3 px-4 mb-3" style="border-color:#670067" id="grid-first-name" type="text" placeholder="Input Carousel Row">
        <div class="text-red-600"> 
          @error('name')
                {{ $message}}
            @enderror
        </div>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-price">
        Description
      </label>
      <textarea name="description" class="border-2 border-gray-500">{{ $data->description }}</textarea>
        <div class="text-red-600" > 
          @error('description')
              {{ $message}}
          @enderror
        </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" style="background-color:#670067; border-color:#670067" class="inline-block px-6 py-1 text-xs font-medium leading-6 text-center text-white transition rounded shadow ripple border hover:shadow-lg focus:outline-none">Save</button>
    <a href="/carousel-row" style="color:#670067; border-color:#670067" class="inline-block px-6 py-1 text-xs font-medium leading-6 text-center transition bg-transparent border rounded ripple focus:outline-none">Back</a>
  </div>
</form>
</div>
@endsection

      
      
    