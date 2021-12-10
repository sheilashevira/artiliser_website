@extends('layouts.userfrontend')
@section('content')
<link rel="stylesheet" href="{{ asset('css/selector.css') }}">
 
  <div class="container mx-auto ">
    <div class="grid mx-10 mt-8 md:mt-1 lg:mt-20">
      <h2 class="lg:mt-6 text-center lg:text-left mt-4 text-xl lg:text-3xl font-bold text-artiliser ">
	        Edit Profile
			</h2>
      <div class="container mx-auto mt-16 mt-96 md:mt-72">
      <div class="relative flex flex-col min-w-0 break-words bg-white mb-6 shadow-xl rounded-lg -mt-96 sm:-mt-72">
          <div class="py-0 ">
            <form class="mt-8 ml-2 lg:ml-8 mr-2 lg:mr-8 space-y-6 mb-10" action="#">
                <div class="image-upload flex flex-col lg:flex-col relative h-full justify-center items-center">
                  <div class="profile-picture-upload">
                    <img src="https://i.pinimg.com/474x/f9/61/30/f961306179ce606db7bedb1d731436b6.jpg" alt="Profile picture preview" class="imagePreview justify-center items-center rounded-full h-24 lg:h-36 w-24 lg:w-36 border-4 border-gray-300 " style="max-width: 150px;">
                    <button class="action-button mode-upload hover-artiliser hover:bg-artiliser hover:text-white mt-2 mb-8 text-xs lg:text-base border border-gray-400 flex justify-center items-center bg-gray-50 rounded-md lg:rounded-lg shadow-xs cursor-pointer py-1 px-6">Choose a file</button>
                    <input type="file" class="hidden" name="fileInput" accept="image/*" />
                  </div>
                </div>
                <div class="flex flex-row lg:flex-row relative h-full ">
                    <h4 class=" text-center lg:text-left text-md lg:text-xl font-bold text-artiliser ">
                        Account Information
                    </h4>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full ">
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2 lg:mr-10 mb-1 lg:mb-0">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-2 lg:mr-3 ">Name</span>
                        <div class="relative w-full lg:w-full">
                            <input placeholder="Input Address 1" class="text-md  py-2 w-full
                            bg-white lg:border-b lg:border-artiliser placeholder-gray-400 border-b border-border
                            focus:placeholder-gray-500
                            focus:bg-white 
                            focus:border-gray-600  
                            focus:outline-none">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full ">
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2 lg:mr-10 mb-1 lg:mb-0">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-2 lg:mr-3 ">Email</span>
                        <div class="relative w-full lg:w-full">
                            <input placeholder="Input Address 1" class="text-md  py-2 w-full
                            bg-white lg:border-b lg:border-artiliser placeholder-gray-400 border-b border-border
                            focus:placeholder-gray-500
                            focus:bg-white 
                            focus:border-gray-600  
                            focus:outline-none">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full justify-center items-center lg:justify-start lg:items-left ">
                    <a href="/change-password" class="hover-artiliser hover:bg-artiliser hover:text-white  lg:h-10 h-8 w-full lg:w-auto px-3 mb-8 text-sm lg:text-base border border-gray-400 flex justify-center items-center bg-gray-50 rounded-md lg:rounded-lg shadow-xs cursor-pointer ">
                      Change Password 
                    </a>    
                </div>
                <div class="flex flex-row lg:flex-row relative h-full ">
                    <h4 class=" text-center lg:text-left text-md lg:text-xl font-bold text-artiliser ">
                        Address Information
                    </h4>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full w-full">
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2 lg:mr-10 mb-6 lg:mb-0">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-2 lg:mr-3 ">Address 1</span>
                        <div class="relative w-full lg:w-full">
                            <input placeholder="Input Address 1" class="text-md  py-2 w-full
                            bg-white lg:border-b lg:border-artiliser placeholder-gray-400 border-b border-border
                            focus:placeholder-gray-500
                            focus:bg-white 
                            focus:border-gray-600  
                            focus:outline-none">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-2 lg:mr-3 ">Address 2</span>
                        <div class="relative w-full lg:w-full">
                            <input placeholder="Input Address 2" class="text-md  py-2 w-full
                            bg-white lg:border-b lg:border-artiliser placeholder-gray-400 border-b border-border
                            focus:placeholder-gray-500
                            focus:bg-white 
                            focus:border-gray-600  
                            focus:outline-none">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full w-full">
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2 lg:mr-10 mb-6 lg:mb-0">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-4 lg:mr-3 ">Country</span>
                        <div class="country relative w-full lg:full">
                          <select id="country" class="select2 req_place" data-select-search="true" placeholder="-- Select Country --" style="width: 100%;">
                            <option value="0">-- Select Country --</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Korea</option>
                          </select>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-4 lg:mr-3 ">States</span>
                        <div class="states relative w-full lg:full">
                          <select id="states" class="select2 req_place" data-select-search="true" placeholder="-- Select Country --" style="width: 100%;">
                            <option value="0">-- Select States --</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Korea</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row relative h-full w-full">
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2 lg:mr-10 mb-6 lg:mb-0">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-4 lg:mr-3 ">Cities</span>
                        <div class="cities relative w-full lg:full">
                          <select id="cities" class="select2 req_place" data-select-search="true" placeholder="-- Select Country --" style="width: 100%;">
                            <option value="0">-- Select Cities --</option>
                            <option value="1">Indonesia</option>
                            <option value="2">Korea</option>
                          </select>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-col relative h-full w-full lg:w-1/2">
                        <span class="text-sm lg:text-md text-artiliser font-semibold mb-2 lg:mr-3 ">Zip Code</span>
                        <div class="relative w-full lg:full">
                            <input type="number" placeholder="Input Zip Code" class="text-md  py-2 w-full
                            bg-white lg:border-b lg:border-artiliser placeholder-gray-400 border-b border-border
                            focus:placeholder-gray-500
                            focus:bg-white 
                            focus:border-gray-600  
                            focus:outline-none">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Button Back -->
            <div class="flex flex-col lg:flex-row relative h-full w-full mb-4 lg:mb-10">
              <div class="flex flex-col ">
                <a href="/profile" type="button" style="border-color:#670067; " class="hover-artiliser hover:bg-artiliser hover:text-white text-artiliser border-artiliser w-24 hidden lg:block lg:ml-8 lg:mb-2 inline-flex items-center justify-center rounded px-2 text-center py-2 text-xs lg:text-base leading-2 lg:leading-6 border rounded-md shadow-sm">
                  Back
                </a>
              </div>
              <div class="flex flex-col lg:flex-row relative h-full w-full justify-center items-center lg:justify-start lg:items-left text-center">
                <a href="#" type="button" class="flex block lg:hidden mb-4 text-white w-24 text-center items-center justify-center rounded rounded rounded-md shadow-sm px-2 py-2 leading-2 lg:leading-6 border" style="border-color:#670067; background-color:#670067;" >
                  Save
                </a>
                <a href="#" type="button" class="hover-artiliserdark hover:bg-artiliserdark hover:text-white w-24 hidden lg:block lg:ml-4 lg:mb-2 inline-flex items-center justify-center rounded px-2 text-center py-2 text-xs lg:text-base leading-2 lg:leading-6 border text-white bg-artiliser border-artiliser rounded-md shadow-sm">
                  Save
                </a>
              </div>
              <div class="flex flex-col lg:flex-row relative h-full w-full lg:justify-start lg:items-left text-center">
                <a href="/profile" type="button" class="flex block lg:hidden mb-4 text-artiliser px-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                </a>
              </div>
            </div>
            <!-- Button Back End -->
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Dropdown Search JS -->
<script>
  $(document).ready(function(){
  
    // Initialize select2
    $("#country").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#country option:selected').text();
      var userid = $('#country').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });

  $(document).ready(function(){
  
    // Initialize select2
    $("#states").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#states option:selected').text();
      var userid = $('#states').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });

  $(document).ready(function(){
  
    // Initialize select2
    $("#cities").select2();

    // Read selected option
    $('#but_read').click(function(){
      var username = $('#cities option:selected').text();
      var userid = $('#cities').val();

      $('#result').html("id : " + userid + ", name : " + username);

    });
  });
</script>

<script>
  let picturePreview = document.querySelector(".imagePreview");
  let actionButton = document.querySelector(".action-button");
  let fileInput = document.querySelector("input[name='fileInput']");
  let fileReader = new FileReader();

  const DEFAULT_IMAGE_SRC = "https://www.drupal.org/files/profile_default.png";

  actionButton.addEventListener("click", () => {
    if ( picturePreview.src !== DEFAULT_IMAGE_SRC ) {
      resetImage();
    } else {
      fileInput.click();
    }
  });

  fileInput.addEventListener("change", () => {
    refreshImagePreview();
  });

  function resetImage() {
    setActionButtonMode("upload");
    picturePreview.src = DEFAULT_IMAGE_SRC;
    fileInput.value = "";
  }

  function setActionButtonMode(mode) {
    let modes = {
      "upload": function() {
        actionButton.innerText = "Choose a file";
        actionButton.classList.remove("mode-remove");
        actionButton.classList.add("mode-upload");
      },
      "remove": function() {
        actionButton.innerText = "Remove image";
        actionButton.classList.remove("mode-upload");
        actionButton.classList.add("mode-remove");
      }
    }
    return (modes[mode]) ? modes[mode]() : console.error("unknown mode");
  }

  function refreshImagePreview() {
    if ( picturePreview.src !== DEFAULT_IMAGE_SRC ) {
      picturePreview.src = DEFAULT_IMAGE_SRC;
    } else {
      if ( fileInput.files && fileInput.files.length > 0 ){
        fileReader.readAsDataURL(fileInput.files[0]);
        fileReader.onload = (e) => {
          picturePreview.src = e.target.result;
          setActionButtonMode("remove");
        }
      }
    }
  }

  refreshImagePreview();
</script>

@endsection