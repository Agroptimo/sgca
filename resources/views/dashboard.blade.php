<x-app-layout>
    <div class="mb-4  justify-between items-center">
        <h2 class="text-2xl mb-8  text-green-500">Inicio</h2>
    </div>
    <div class="grid grid-cols-1 gap-5 mt-6 md:grid-cols-4 ">
        {{-- columna --}}
        <div class="md:col-span-1">
            <div class=" p-4 mb-4 transition-shadow border rounded-lg shadow-sm  bg-white ">
                <div class="flex items-start justify-between">
                  <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Ventas mes actual</span>
                    <span class="text-lg font-semibold">$3.520.000</span>
                  </div>
                </div>
                <div>
                  <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                  <span>mes anterior</span>
                </div>
              </div>

              <div class="p-4 mb-4 transition-shadow border rounded-lg shadow-sm  bg-white ">
                <div class="flex items-start justify-between">
                  <div class="flex flex-col space-y-2">
                    <span class="text-gray-400">Ventas Enero</span>
                    <span class="text-lg font-semibold">$2.120.000</span>
                  </div>
                </div>
                <div>
                  <span class="inline-block px-2 text-sm text-white bg-red-300 rounded">-3%</span>
                  <span>mes anterior</span>
                </div>
              </div>
              <div class="p-4 mb-4 transition-shadow border rounded-lg shadow-sm  bg-white ">
                <img src="/img/graficas.png">
              </div>
        </div>

        <div class=" md:col-span-3">
            <div class="bg-white p-4 border rounded-lg">
              <h2 class="text-2xl mb-8  text-green-500">Ultima actividad</h2>
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
                            Visita terreno
                        </div>
                      </div>
                      <div class="font-semibold text-gray-800 text-xl text-center lg:text-left px-2">
                        Invernaderos y Riego Valdivieso Ltda	
                      </div>
              

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
                      <div class="font-semibold text-gray-800 text-xl text-center lg:text-left px-2">
                        Invernaderos y Riego Valdivieso Ltda	
                      </div>
              

                    </div>
                  </div>
                </div>
                </div>

            </div>
        

        </div>
</x-app-layout>
