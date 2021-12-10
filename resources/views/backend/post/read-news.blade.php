@extends('layouts.adminbackend')
@section('content')
<div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-full px-3">
      <label  class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-category" >
        Name
      </label>
      <input readonly value="{{ $data->name}}" class="w-full bg-grey-lighter border text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent" style="border-color:#670067" id="grid-name" type="text" placeholder="Input Post Name">
    </div>
  </div>
  <div class="-mx-3 md:flex sm:mb-2">
    <div class="md:w-1/2 px-3">
      <label  class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-category" >
        Category
      </label>
      <input readonly value="{{ $data->categories->name}}" style="border-color:#670067" class="w-full bg-grey-lighter border border-grey-lighter text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
    </div>
    <div class="md:w-1/2 px-3 sm:mb-6 mt-6 sm:mt-0">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-carousel-rows">
        Carousel Rows
      </label>
      <input readonly value="{{ $data->carousel_rows->name}}" style="border-color:#670067" class="w-full bg-grey-lighter border border-grey-lighter text-sm text-grey-darker py-3 px-4 rounded mt-1 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent">
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6 mt-4 sm:mt-0">
    <div class="md:w-full px-3">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-image">
        Image
      </label>
      <input value="{{ $data->image}}" style="border-color:#670067" class="appearance-none block w-full bg-grey-lighter text-sm text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-price" type="text">
      <img src="/img/{{ $data->image }}" width="300px">  
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block tracking-wide text-grey-darker text-xs font-bold mb-2" style="color:#670067" for="grid-price">
        Content
      </label>
      <textarea readonly name="content" class="border-2 border-gray-500">{{ $data->content}}</textarea>
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