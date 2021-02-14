<x-app-layout>
    {{-- buscador  --}}
    <div class="mb-4  justify-between items-center">
        <h2 class="text-2xl mb-8  text-green-500">Clientes</h2>
        <div class="flex ">
            <div class=" flex-1">
                <div class=" relative md:w-2/3"> 
                    <input type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Buscar...">
                    <div class="absolute top-0 left-0 inline-flex items-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <button class="float-right px-3 py-2 border-green-500 border text-green-500 rounded transition duration-300 hover:bg-green-600 hover:text-white ">Nuevo Cliente</button>
            </div>
        </div>

    </div>
    {{-- tabla --}}
    <div class="align-middle bg-white overflow-x-auto shadow-md rounded-lg">
        <table class="table-auto w-full " >
            <thead>
                <tr>
                    <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Rut</th>
                    <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Razon social</th>
                    <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Contacto</th>
                    <th class="font-normal px-6 py-3 border-b-2 border-gray-300"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
               @foreach ($clients as $client)
               <tr class="border-gray-300 border-b-2  hover:bg-gray-200 ">

                <td class="px-6 py-4 whitespace-no-wrap  border-gray-500 text-sm leading-5">
                    {{$client->rut}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">{{$client->razon_social}}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">{{$client->contact_name}} {{$client->contact_phone}}</td>

                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                    <a href="{{route('client.show' , ['client' => $client->id])}}" class="px-3 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Ver</a>
                </td>
            </tr>
               @endforeach

             

            </tbody>
        </table>
    </div>

</x-app-layout>
