<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Abk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 pt-6 pb-6">
                <div id="uraianContainer">
                                 
                <div class="grid grid-cols-11 gap-4 mt-10">
                    <div class="col-span-1 text-center">No</div>  
                    <div class="col-span-4 text-center">Uraian Tugas</div>                                  
                    <div class="col-span-1 text-center">Satuan Hasil</div>                                 
                    <div class="col-span-1 text-center">Waktu Penyelesaian</div>                                 
                    <div class="col-span-1 text-center">Waktu Kerja Efektif</div>                                 
                    <div class="col-span-1 text-center">Beban Kerja</div>                                 
                    <div class="col-span-1 text-center">Pegawai Yang dibutuhkan</div>                                 
                    <div class="col-span-1 text-center"></div>                                 
                </div>
                <hr class="py-4">
               <div id="uraian1">
                <div class="grid grid-cols-11 gap-4 mb-5">
                    <div class="col-span-1 text-center">1</div>  
                   
                    <div class="col-span-4 ml-10">Bebabnn</div>           
                    <div class="col-span-1 text-center">Satuan Hasil</div>                                 
                    <div class="col-span-1 text-center">Penyelesaian</div>                                 
                    <div class="col-span-1 text-center">Waktu kerjaaa</div>                                 
                    <div class="col-span-1 text-center">beban kerja</div>                                 
                    <div class="col-span-1 text-center">pgwldf</div>                                                                 
                </div>
                {{-- /tahapan --}}
                <div class="grid grid-cols-11 gap-4">
                    <div class="col-span-1 text-center"></div>  
                    <div class="col-span-4 ml-10">Bebabnn</div>                                  
                    <div class="col-span-1 text-center">MMMnene</div>                                 
                    <div class="col-span-1 text-center">CCC</div>                                 
                    <div class="col-span-1 text-center">kjdfkdjf</div>                                 
                    <div class="col-span-1 text-center">Chaaa</div>                                 
                    <div class="col-span-1 text-center">dkdjdk</div>                                                                 
                </div>
               </div>
            </div>
           
            </div>
               
        </div>
        
    </div>
</x-app-layout>
