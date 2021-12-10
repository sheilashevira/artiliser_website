@extends('layouts.adminbackend')
@section('content')
 <div class="shadow-md bg-white rounded px-10 pt-6 pb-8 mb-4 flex flex-col my-5 mx-3" >
  <form action="/user/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
   @if(isset($data->profiles))
   <ul class="flex border-b">
    <li class="-mb-px mr-1">
      <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-artiliser font-semibold" href="{{ route('user.edit', $data->id) }}">Details Profile</a>
    </li>
    <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-artiliser hover:text-blue-800 font-semibold" href="{{ route('user.changePassword', $data->id) }}">Change Password</a>
    </li>
   </ul>
   <div class="md:flex sm:mb-2 sm:ml-6 sm:mr-12">
      <div class="md:flex-shrink-0">
        <div class="flex justify-center md:justify-end">
          @if(empty($data->profiles->image))
          <label for="image-input" >
            <img id="preview-image" class="w-36 h-36 object-cover rounded-full border-2 mt-3" src="https://bit.ly/3ubuq5o" alt="">
              @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
          </label>
          @else
          <label for="image-input" >
            <img id="preview-image" class="w-36 h-36 object-cover rounded-full border-2 mt-3"  alt="" src="/img/{{ $data->profiles->image}}" alt="">
              @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
          </label>
          @endif
        </div>
        <div class="flex items-center justify-center bg-grey-lighter">
          <label class="w-28 flex flex-col items-center px-1 py-2 mt-2 mb-2 bg-artiliser text-blue rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-blue hover:text-white">
              <span class="text-sm text-white">Change Photo</span>
              <input name="image" class="hidden" id="image-input" type='file' onchange="loadFile(this)" accept="image/*">
              {{-- <input id="image" name="image" type="file"  value="{{ $data->profiles->image}}" id="image-input" accept="image/*"> --}}
          </label>
      </div>
          {{-- <input id="image" name="image"  class="content-center py- mb-3" id="image-input" type="file" > --}}
      </div>
      <div class="md:w-full px-3 sm:mb-2 md:ml-14">
        <h2 class="text-gray-800 text-1xl font-semibold text-start sm:mt-6">Name</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <input name="name" class="apperance-none w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->name}}">
          <div class="py-2 text-red-500">
            @error('name')
              {{ $message}}
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">Email</h2>
        <div class="divide-y divide-artiliser md:divde-y-1">
          <input name="email" class="appearance-none w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->email}}">
          <div class="py-2 text-red-500">
            @error('email')
              {{ $message}}
            @enderror
          </div> 
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">Role</h2> 
        <div class="divide-y divide-artiliser md:divide-y-1">
          <select name="role" class="w-full text-1xl text-grey-darker mt-1 focus:outline-none">
            <option value=" {{ $data->role}}">{{ $data->role}}</option>
            <option value="Customer">Customer</option>
            <option value="Admin">Admin</option>
          </select>
          <div class="py-2 text-red-500">
            @error('record')
                {{ $message}}
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">Address</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <input name="address" class="appearance-none w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->profiles->address}}">
          <div class="py-2 text-red-500">
            @error('address')
              {{ $message}}
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">Zip Code</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <input name="zip_code" class="appearance-none w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->profiles->zip_code}}">
          <div class="py-2 text-red-500">
            @error('zip_code')
              {{ $message}}  
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">Country</h2>
        <div class="form-group mb-3 divide-y divide-artiliser md:divide-y-1">
          <select  id="country-dd" name="countries_id" class="form-control w-full text-1xl text-grey-darker mt-1 focus:outline-none">
              <option value="{{ $data->profiles->countries['id']}}">{{ $data->profiles->countries['name']}}</option>
              @foreach ($countries as $data)
              <option value="{{$data->id}}">{{$data->name}}</option>
              @endforeach
          </select>
          <div class="py-2 text-red-500">
            @error('id')
              {{ $message}}
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">State</h2>
        <div class="form-group mb-3 divide-y divide-artiliser md:dibide-y-1">
            <select id="state-dd" name="states_id" class="form-control w-full text-1xl text-grey-darker mt-1 focus:outline-none">
              @foreach ($profile as $data)
              <option value="{{$data->states->id}}">{{$data->states->name}}</option>
              @endforeach
            </select>
            <div class="py-2 text-red-500">
              @error('id')
                {{ $message}}
              @enderror
            </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">City</h2>
        <div class="form-group mb-3 divide-y divide-artiliser md:dibide-y-1">
            <select id="city-dd" name="cities_id" class="form-control w-full text-1xl text-grey-darker mt-1 focus:outline-none">
              @foreach ($profile as $data)
              <option value="{{$data->cities->id}}">{{$data->cities->name}}</option>
              @endforeach
            </select>
            <div class="py-2 text-red-500">
              @error('id')
                {{ $message}}
              @enderror
            </div>
        </div>
{{--         
        <div class="divide-y divide-artiliser md:divide-y-1">
          <select id="countries_id" name="countries_id" class="w-full text-1xl text-grey-darker mt-1 focus:outline-none">
            <option value="{{ $data->profiles->countries->id}}">{{ $data->profiles->countries->name}}</option>
            @foreach ($countries as $country)
              <option value="{{ $country->id}}">{{ $country->name}}</option>
            @endforeach
          </select>
          <div class="py-2 text-red-500">
            @error('id')
              {{ $message}}
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">State</h2>
        <div class="divide-y divide-artiliser md:dibide-y-1">
          <select id="states_id" name="states_id" class="w-full text-1xl text-grey-darker mt-1 focus:outline-none">
            <option value="{{ $data->profiles->states->id}}">{{ $data->profiles->states->name}}</option>
            @foreach ($states as $state)
              <option value="{{ $state->id}}">{{ $state->name}}</option>
            @endforeach
          </select>
          <div class="py-2 text-red-500">
            @error('id')
              {{ $message}}    
            @enderror
          </div>
        </div>
        <h2 class="text-gray-800 text-1xl font-semibold text-start">City</h2>
        <div class="divide-y divide-artiliser md:divide-y-1">
          <select id="cities_id" name="cities_id" class="w-full text-1xl text-grey-darker mt-1 focus:outline-none">
            <option value="{{ $data->profiles->cities->id}}">{{ $data->profiles->cities->name}}</option>
            {{-- @foreach ($cities as $city)
                <option value="{{ $city->id}}">{{ $city->name}}</option>
            @endforeach --}}
          {{-- </select>
          <div class="py-2 text-red-500">
            @error('record')
                {{ $message}}
            @enderror
          </div>
        </div> --}}
        <div class="flex justify-end mt-4">
        <button type="submit" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus:outline-none">Save</button>
          <a href="/user" class="inline-block px-6 py-1 text-xs text-artiliser font-medium leading-6 text-center transition bg-transparent border border-artiliser rounded ripple focus:outline-none">Back</a>
        </div>
      </div> 
    </div>
  </div>

  @else
  <ul class="flex border-b">
    <li class="-mb-px mr-1">
      <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-artiliser font-semibold" href="{{ route('user.edit', $data->id) }}">Details Profile</a>
    </li>
    <li class="mr-1">
      <a class="bg-white inline-block py-2 px-4 text-artiliser hover:text-blue-800 font-semibold" href="{{ route('user.changePassword', $data->id) }}">Change Password</a>
    </li>
   </ul>
   <div class="md:flex sm:mb-2">
    <div class="md:flex-shrink-0 "></div>
      <div class="md:w-full px-3 sm:mb-2 md:ml-2">
        <h2 class="text-gray-800 text-1xl font-semibold text-start sm:mt-6">Name</h2>
          <div class="divide-y divide-artiliser md:divide-y-1">
            <input name="name" class="appearance-none  w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->name}}">
              <div class="py-2  text-red-500">
                @error('name')
                  {{ $message}}
                @enderror
              </div>
          </div>
            <h2 class="text-gray-800 text-1xl font-semibold text-start">Email</h2>
              <div class="divide-y divide-artiliser md:divide-y-1">
                <input name="email"  class="appearance-none  w-full bg-grey-lighter text-1xl text-grey-darker" value="{{ $data->email}}">
                  <div class="py-2  text-red-500">
                    @error('email')
                      {{ $message}}
                    @enderror
                  </div>
              </div>
             <h2 class="text-gray-800 text-1xl font-semibold text-start">Role</h2>
              <div class="divide-y divide-artiliser md:divide-y-1 ">
                <select name="role">
                  <option value="{{ $data->role}}">{{ $data->role}}</option>
                  <option value="Customer">Customer</option>
                  <option value="Admin">Admin</option>
                </select>
                  <div class="py-2  text-red-500">
                    @error('password')
                      {{ $message}}
                    @enderror
                  </div> 
              </div>
            </div>
          </div>
          <div class="flex justify-end mt-4">
            <button type="submit" class="inline-block px-6 bg-artiliser py-1 text-xs font-medium leading-6 text-center text-white transition rounded border shadow ripple hover:shadow-lg focus:outline-none">Save</button>
              <a href="/user" class="inline-block px-6 py-1 text-xs text-artiliser font-medium leading-6 text-center transition bg-transparent border border-artiliser rounded ripple focus:outline-none">Back</a>
            </div>
          </div> 
        </div>
      </div>
  @endif
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

<script>
    $(document).ready(function () {
        $('#country-dd').on('change', function () {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    countries_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#city-dd').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-dd').on('change', function () {
            var idState = this.value;
            $("#city-dd").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    states_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#city-dd').html('<option value="">Select City</option>');
                    $.each(res.cities, function (key, value) {
                        $("#city-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });

</script>
@endsection


      
    