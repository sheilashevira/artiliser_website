@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
<form action="/post/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="-mx-3 md:flex sm:mb-2">
      <div class="md:w-full px-3 mb-6 md:mb-0">
        <label  class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-category" >
          Name
        </label>
        <input id="name" name="name" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067" id="grid-name" type="text" placeholder="Input Post Name">
          <div class="text-red-600">
              @error('name')
                  {{ $message}}
              @enderror
          </div>
      </div>
    </div>  
    <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/2 px-3">
      <label  class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-category" >
        Category
      </label>
      <select id="category_id" name="categories_id" onchange="changeCategory()" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
        <option value="">Choose Category</option>
        @foreach ($categories as $cate)
        <option value ="{{ $cate->id }}" >{{ $cate->name }}</option>
        @endforeach 
      </select>
        <div class="text-red-600">
            @error('id')
                {{ $message}}
            @enderror
        </div>
    </div>
    <div class="md:w-1/2 px-3 sm:mb-6 mt-6 sm:mt-0">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-carousel-rows">
        Carousel Rows
      </label>
      <select id="carousel_rows_id" name="carousel_rows_id"  class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
        <option value="">Choose a Carousel Row</option>
        @foreach ($carouselrows as $carousel)
        <option value="{{ $carousel->id }}">{{ $carousel->name }}</option>
        @endforeach 
      </select>
    </div>
  </div>
  <div class="c2 div" id="c2_div">
    <div class="-mx-3 md:flex mb-6 mt-6 sm:mt-0">
      <div id="printmaterials" class="md:w-1/2 px-3" hide>
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-print-materials">
          Print Materials
        </label>
        <select name="print_materials_id" id="print_materials_id" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
          <option value="">Choose a Print Material</option>
          @foreach ($printmaterials as $material)
          <option value="{{ $material->id }}">{{ $material->name }}</option>
          @endforeach 
        </select>
      </div>
      <div class="md:w-1/2 px-3 mt-6 sm:mt-0">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-print-types">
          Print Types
        </label>
        <select id="print_types_id" name="print_types_id" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
          <option value="">Choose a Print Type</option>
          @foreach ($printtypes as $types)
          <option value="{{ $types->id }}">{{ $types->name }}</option>
          @endforeach 
        </select>
      </div>
      <div class="md:w-1/2 px-3 mt-6 sm:mt-0">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-price">
          Size
        </label>
          <select id="sizes_id" name="sizes_id"  class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067">
            <option value="">Choose Size</option>
              @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->name }}</option>
              @endforeach 
          </select>
            <div class="text-red-600">
              @error('id')
                  {{ $message}}
              @enderror
            </div>
      </div>
      <div class="md:w-1/2 px-3 mt-6 sm:mt-1">
        <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-price">
          Price
        </label>
        <input id="price" name="price" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border rounded py-3 px-4 mb-3" style="border-color:#670067" id="grid-price" type="text" placeholder="Input Price">
          <div class="text-red-600"> 
            @error('price')
                {{ $message}}
            @enderror
          </div>
      </div>
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6 mt-4 sm:mt-0">
    <div class="md:w-full px-3">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-image">
        Image
      </label>
      <input name="image" class="py-2 mb-3" id="image-input" type="file" accept="image/*">
      <label for="image-input" >
        <img id="preview-image" width="300px" src="https://bit.ly/3ubuq5o" alt="">
          <div class="text-red-600"> 
            @error('image')
                {{ $message}}
            @enderror
          </div>
      </label>
    </div>
  </div>
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
    <button type="submit" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus:outline-none">Save</button>
    <a href="/post" class="inline-block px-6 py-1 text-xs text-artiliser font-medium leading-6 text-center transition bg-transparent border border-artiliser rounded ripple focus:outline-none">Back</a>
  </div>
</form>
</div>

<script>
  function previewBeforeUpload(id){
    document.querySelector("#"+id).addEventListener("change", function(e){
      if(e.target.files.length == 0){
        return;
      }
      let file = e.target.files[0];
      let url = URL.creatObjectURL(file);
      document.querySelector("#"+id+"-preview div").innerText = file.name;
      document.querySelector("#"+id+"-preview img").src = url;
    })
  }
  var imageInput = document.getElementById("image-input");
  var previewImage = document.getElementById("preview-image");
  imageInput.addEventListener("change", function(event){
    if(event.target.files.length == 0){
      return;
    }
    var tempUrl = URL.createObjectURL(event.target.files[0]);
    previewImage.setAttribute("src", tempUrl);
  });
</script>
@endsection

      
      
    