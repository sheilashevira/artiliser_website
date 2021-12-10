@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
<form action="/about/insert" method="POST">
    @csrf
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-price">
            Content
          </label>
          <textarea name="content" class="border-2 border-gray-500"></textarea>
            <div class="text-red-600"> 
                @error('content')
                    {{ $message}}
                @enderror
            </div>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'content' );
        </script>
        </div>
    </div>
    <div class="card-footer">
      <button type="submit" style="background-color:#670067; border-color:#670067" class="inline-block px-6 py-1 text-xs font-medium leading-6 text-center text-white border transition rounded shadow ripple hover:shadow-lg focus:outline-none">Save</button>
      <a href="/about" style="color:#670067; border-color:#670067" class="inline-block px-6 py-1 text-xs font-medium leading-6 text-center transition bg-transparent border rounded ripple focus:outline-none">Back</a>
    </div>
</form>
</div>
@endsection

      
      
    