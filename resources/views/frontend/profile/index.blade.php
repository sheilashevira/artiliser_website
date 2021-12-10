@extends('layouts.userfrontend')
@section('content')
  <div class="container mx-auto ">
    <div class="grid mx-10 mt-16 md:mt-1 lg:mt-36">
      <div class="container mx-auto mt-16 mt-96 lg:mt-72">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded-lg shadow-xl -mt-96 sm:-mt-72">
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="flex justify-center w-full px-4 mb-16 lg:w-3/12 sm:mb-28 lg:order-2">
                <div class="relative flex flex-col items-center justify-center h-full text-white bg-black bg-opacity-50">
                <!-- <div class="relative"> -->
                  <img alt="..." src="https://i.pinimg.com/474x/f9/61/30/f961306179ce606db7bedb1d731436b6.jpg" class="absolute flex items-center justify-center w-24 h-24 -m-16 -ml-16 align-middle border-none rounded-full lg:h-36 lg:w-36 lg:-ml-16" style="max-width: 150px;" >
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h3 class="mb-2 text-xl font-semibold leading-normal text-gray-800 sm:text-4xl">
              {{ $data->name }}
            </h3>
            <div class="mt-0 text-sm font-bold leading-normal text-gray-500 uppercase sm:text-xl">
              <i class="mr-2 text-gray-500 fas fa-map-marker-alt text-md" ></i>
                  Jimbaran, Bali
            </div>
          </div>
          <div class="px-3 py-6 mt-0 text-center ">
            <a href="/edit-profile" type="button" class="inline-flex items-center justify-center px-8 py-2 mb-2 text-sm border rounded rounded-md shadow-sm border-artiliser hover-artiliser hover:bg-artiliser hover:text-white text-artiliser md:text-base leading-2 sm:leading-6" type="button">
              Edit Profile
            </a>
            <a href="/change-password" type="button"  class="inline-flex items-center justify-center px-3 py-2 text-sm border rounded rounded-md shadow-sm border-artiliser hover-artiliser hover:bg-artiliser hover:text-white text-artiliser md:text-base leading-2 sm:leading-6" type="button">
              Change Password
            </a>
          </div>
          <div class="py-5 mt-5 border-t border-gray-300">
            <div class="container flex-none md:flex">
              <div class="text-center sm:text-left sm:ml-96">
              </div>
              <div class="text-left sm:text-left sm:ml-96 sm:hidden">
                <p class="mb-2 ml-4 font-bold leading-normal text-gray-800 text-md">
                  Account Details
                </p>
                <div class="mt-0 mb-4 ml-4 text-sm font-normal leading-normal text-gray-500">
                    {{ $data->name }}
                    <br>Perumahan Graha Anyar Gg. IIB No.16
                    <br>Kuta Selatan
                    <br>Badung
                    <br>Bali 80361
                    <br>Indonesia
                </div>
              </div>
            </div>
            <h5 class="mb-1 mb-2 ml-4 font-bold leading-normal text-gray-800 text-md md:text-2xl md:ml-6 md:mt-2 lg:ml-16">
              Order History
            </h5>
            <div class="container flex-none md:flex">
              <table class="flex flex-row flex-no-wrap my-5 ml-4 mr-4 overflow-hidden rounded-lg md:w-1/2 max-w-screen md:bg-white md:ml-6 lg:ml-16 md:mr-10 lg:mr-0 xl:mr-6">
                <thead class="text-white md:text-black">
                  <tr class="flex flex-col mb-2 text-xs border rounded-l-lg border-grey-light md:border-none md:bg-white bg-artiliser md:text-md flex-no wrap md:table-row md:rounded-none md:mb-0">
                    <th class="p-3 text-center">Order</th>
                    <th class="p-3 text-center">Date</th>
                    <th class="p-3 text-center">Payment Status</th>
                    <th class="p-3 text-center">Fulfillment Status</th>
                    <th class="p-3 text-center">Total</th>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-l-lg border-grey-light md:border-none md:bg-white bg-artiliser md:text-md flex-no wrap md:table-row md:rounded-none md:mb-0">
                    <th class="p-3 text-center">Order</th>
                    <th class="p-3 text-center">Date</th>
                    <th class="p-3 text-center">Payment Status</th>
                    <th class="p-3 text-center">Fulfillment Status</th>
                    <th class="p-3 text-center">Total</th>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-l-lg border-grey-light md:border-none md:bg-white bg-artiliser md:text-md flex-no wrap md:table-row md:rounded-none md:mb-0">
                    <th class="p-3 text-center">Order</th>
                    <th class="p-3 text-center">Date</th>
                    <th class="p-3 text-center">Payment Status</th>
                    <th class="p-3 text-center">Fulfillment Status</th>
                    <th class="p-3 text-center">Total</th>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-l-lg border-grey-light md:border-none md:bg-white bg-artiliser md:text-md flex-no wrap md:table-row md:rounded-none md:mb-0">
                    <th class="p-3 text-center">Order</th>
                    <th class="p-3 text-center">Date</th>
                    <th class="p-3 text-center">Payment Status</th>
                    <th class="p-3 text-center">Fulfillment Status</th>
                    <th class="p-3 text-center">Total</th>
                  </tr>
                </thead>
                <tbody class="flex-1 md:flex-none">
                  <tr class="flex flex-col mb-2 text-xs border rounded-r-lg border-grey-light md:border-none flex-no wrap md:table-row md:mb-0 md:text-md">
                    <td class="p-3 text-center text-red-500 hover:bg-gray-100">#10001</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">12/06/2021</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Paid</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Fulfilled</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Rp250.000,00</td>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-r-lg border-grey-light md:border-none flex-no wrap md:table-row md:mb-0 md:text-md">
                    <td class="p-3 text-center text-red-500 hover:bg-gray-100">#10001</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">12/06/2021</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Paid</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Fulfilled</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Rp250.000,00</td>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-r-lg border-grey-light md:border-none flex-no wrap md:table-row md:mb-0 md:text-md">
                    <td class="p-3 text-center text-red-500 hover:bg-gray-100">#10001</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">12/06/2021</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Paid</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Fulfilled</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Rp250.000,00</td>
                  </tr>
                  <tr class="flex flex-col mb-2 text-xs border rounded-r-lg border-grey-light md:border-none flex-no wrap md:table-row md:mb-0 md:text-md">
                    <td class="p-3 text-center text-red-500 hover:bg-gray-100">#10001</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">12/06/2021</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Paid</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Fulfilled</td>
                    <td class="p-3 text-center truncate hover:bg-gray-100">Rp250.000,00</td>
                  </tr>
                </tbody>
              </table>
              <div class="hidden text-center md:text-left lg:ml-36 md:-mt-8 md:block">
                <p class="mb-2 font-bold leading-normal text-gray-800 text-md">
                  Account Details
                </p>
                <div class="mt-0 mb-2 text-sm font-normal leading-normal text-gray-500">
                    {{ $data->name }}
                    <br>Perumahan Graha Anyar Gg. IIB No.16
                    <br>Kuta Selatan
                    <br>Badung
                    <br>Bali 80361
                    <br>Indonesia
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection