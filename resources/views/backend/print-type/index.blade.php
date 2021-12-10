@extends('layouts.adminbackend')
@section('content')
<div class="px-2 py-3">
    <div class="flex justify-end items-center">
        <h3 class="font-semibold"></h3>
        <a href="/print-type/add" type="button" style="background-color:#670067" class="inline-block px-4 py-1 text-xs font-medium leading-6 text-center text-white transition rounded shadow ripple hover:shadow-lg focus:outline-none"><i class="fa fa-plus"></i> Add Print Type</a>
    </div>
</div>
<!-- Card Data Table -->
<div id='recipients' class="p-4 mt-2 lg:mt-0 rounded shadow bg-white">
    @if (session ('success'))
        <div class="py-3 px-5 mb-4 bg-green-100 text-green-900 text-sm rounded-md border border-green-200 alert alert-success alert-dismissible">
            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
            <h5><i class="icon fas fa-check"></i> {{ session ('success') }} </h5>
        </div>
    @endif
    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
            <tr>
                <th data-priority="1">No</th>
                <th data-priority="2">Print Types</th>
                <th data-priority="3">Description</th>
                <th data-priority="4">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($printtypes as $data) 
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td class="text-center">{{ $data->name }}</td>
                <td class="text-center">{!! $data->description !!}</td>
                <td class="text-center">
                    <div class="flex item-center justify-center">
                        <div class="w-4 mr-2 transform hover:text-purple-900 hover:scale-110">
                            <a href="{{ route('print-type.read', $data->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-900 hover:scale-110">
                            <a href="{{ route('print-type.edit', $data->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-900 hover:scale-110">
                            <a href="{{ route('print-type.delete', $data->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- 
@foreach($printtypes as $data)
<!-- Card Data Table -->
<div class="modal min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none hidden"  style="background: rgba(0,0,0,.2);">
    <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg bg-white ">
      <!--content-->
      <div class="">
        <!--body-->
        <div class="text-center p-5 flex-auto justify-center">
            <div class="flex justify-between items-center">
                <h3 class="font-semibold text-white"></h3>
                <button class="text-black close-modal">&cross;</button>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
            <p class="text-sm text-gray-500 px-8">Do you really want to delete this print type?
            This print type cannot be undone</p>    
        </div>
        <!--footer-->
        <div class="p-3  mt-2 text-center space-x-4 md:block">
            <button class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-red-500 transition bg-transparent border border-red-500 rounded ripple hover:bg-red-100 focus:outline-none close-modal">Cancel</button>
            <a href="{{ route('print-type.delete', $data->id) }}" type="button" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white transition bg-red-500 rounded shadow ripple hover:shadow-lg hover:bg-red-600 focus:outline-none">Delete</a>
        </div>
      </div>
    </div>
</div>
@endforeach

<script>
    const modal = document.querySelector('.modal');
    const deleteModal = document.querySelector('.delete-modal');
    const closeModal = document.querySelectorAll('.close-modal');

    deleteModal.addEventListener('click', function(){
        modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
        close.addEventListener('click', function(){
            modal.classList.add('hidden')
        });
    });
</script> --}}

@endsection