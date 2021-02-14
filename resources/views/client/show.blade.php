<x-app-layout>

    <div class="grid grid-cols-1 gap-5 mt-6 md:grid-cols-4 ">
        {{-- columna --}}
        <div class="md:col-span-1">
            <h2 class="text-2xl mb-8  text-green-500">Cliente</h2>
            <div class=" p-4 mb-4 transition-shadow border rounded-lg shadow-sm  bg-white ">
                <h2 class="text-2xl mb-8 ">{{$client->razon_social}}</h2>
                    <label class="text-gray-400 text-sm">Rut</label>
                    <p class="mb-2">
                      {{$client->rut}}
                    </p> 
                    <label class="text-gray-400 text-sm">Contacto</label>
                    <p class="mb-2">
                        {{$client->contact_name}}
                    </p> 
                    <p class="">
                        {{$client->contact_phone}} 
                      </p> 
                    <label class="text-gray-400 text-sm">Zona</label>
                    <p class="mb-2">
                        Central
                    </p> 
                    <label class="text-gray-400 text-sm">Cuidad</label>
                    <p class="mb-2">
                        Limache
                    </p> 
                
            </div>
        </div>

        <div class=" md:col-span-3">
            <h2 class="text-2xl mb-8  text-green-500">Ultima actividad</h2>
            <div class="bg-white p-4 border rounded-lg mb-4">
                
                <div class="flex  rounded-lg border  border-gray-300 mb-4">
                  <div class="bg-green-500 p-4">
                    <div class="text-center tracking-wide">
                      <div class="text-white font-bold text-2xl ">24</div>
                      <div class="text-white font-normal text-gl">Ene</div>
                    </div>
                  </div>
                  <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                    <div class="flex flex-row lg:justify-start justify-center">
                      <div class="text-gray-700 font-medium text-sm text-center lg:text-left px-2">
                          Comentario
                      </div>
                    </div>
                    <p class="px-2"> El cliente utiliza el producto...  </p>
            

                  </div>
                </div>
                <div class="flex  rounded-lg border  border-gray-300 mb-4">
                  <div class="bg-green-500 p-4">
                    <div class="text-center tracking-wide">
                      <div class="text-white font-bold text-2xl ">22</div>
                      <div class="text-white font-normal text-gl">Ene</div>
                    </div>
                  </div>
                  <div class="w-full  lg:w-11/12 xl:w-full px-1 bg-white py-5 lg:px-2 lg:py-2 tracking-wide">
                    <div class="flex flex-row lg:justify-start justify-center">
                      <div class="text-gray-700 font-medium text-sm text-center lg:text-left px-2">
                          Visita terreno
                      </div>
                    </div>
                    <p class="px-2"> Comentario de la visita en el fundo...</p>
            

                  </div>
                </div>
              </div>
                

              <h2 class="text-2xl mb-8  text-green-500">Historial de ventas</h2>
            <div class="align-middle bg-white overflow-x-auto shadow-md rounded-lg">
               
                <div class="">
                    <table class="table-auto w-full " >
                        <thead>
                            <tr>
                                <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Producto</th>
                                <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Cantidad</th>
                                <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Unidad</th>
                                <th class="font-normal px-6 py-3 border-b-2 border-gray-300 text-left text-green-500 tracking-wider">Valor</th>
                                <th class="font-normal px-6 py-3 border-b-2 border-gray-300"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                           <tr class="border-gray-300 border-b-2  hover:bg-gray-200 ">
            
                            <td class="px-6 py-4 whitespace-no-wrap  border-gray-500 text-sm leading-5">
                                producto x
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">100</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">Litros</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">$200.000</td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                            </td>
                        </tr>
                           
            
                         
            
                        </tbody>
                    </table>
                </div>

  
              </div>

        </div>
    </div>
</x-app-layout>
