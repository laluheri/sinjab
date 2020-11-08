<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<x-app-layout>
    <x-slot name="header">
        {{ __('Abk') }}
    </x-slot>

    <form method="POST" action="{{ route('abk.save') }}">
        
        @csrf
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 pt-6 pb-6">
                <div id="uraianContainer">

                <label for="" class="ml-10 mr-5">Pilih Jabatan : </label>  
                <div class="inline-block relative w-64">
                    <select name="jabatan" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                      @foreach ($jabatan as $j)
                         <option value="{{ $j->id }}">{{ $j->jabatan }}</option>
                      
                      @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>              
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
                    <div class="col-span-4 text-center"><input required name='uraian[0][uraian]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                  
                    <div class="col-span-1 text-center"><input required name='uraian[0][satuan]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name='uraian[0][wp]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name='uraian[0][wke]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name='uraian[0][beban_kerja]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name='uraian[0][pyd]' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><button type="button" onclick="addNewUraian()"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        +
                      </button></div>                                 
                </div>
                {{-- /tahapan --}}
                <div class="grid grid-cols-11 gap-4">
                    <div class="col-span-1 text-center"></div>  
                    <div class="col-span-4 ml-10"><input required name="uraian[0][tahapan][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-10 " id="username" type="text"></div>                                  
                    <div class="col-span-1 text-center"><input required name="uraian[0][satuan_sub][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name="uraian[0][wp_sub][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name="uraian[0][wke_sub][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name="uraian[0][beban_kerja_sub][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><input required name="uraian[0][pyd_sub][]" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>                                 
                    <div class="col-span-1 text-center"><button type="button" onclick="onButtonSubClick('uraian1',false,0)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        +
                      </button></div>                                 
                </div>
               </div>
            </div>
               <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded ">Save</button>
          
            </div>
               
        </div>
        
    </div>
</form>
</x-app-layout>

<script>

var subId = 0;    
var uraianCount = 1;
var rowNumber = 1;

//index untuk uraian name
var uraianIndex = 0;
//index untuk tahapan name
var tahapanIndex = 0;

function onButtonSubClick(containerId,isAdd,uIndex){

    subId++;
    var elementId = 'subTahapan-'+subId;
    var string = "dfkd100";
    var tahapanName = "uraian["+uIndex+"][tahapan][]";
    var id     = '<div class="col-span-1 text-center"></div>';
    var uraian = '<div class="col-span-4 ml-10"><input name = "'+tahapanName+'" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-10 " id="username" type="text"></div>';                             
    //satuan
    var satuanName = "uraian["+uIndex+"][satuan_sub][]";
    var satuan =  '<div class="col-span-1 text-center"><input name="'+satuanName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                 
    
    //waktu penyelesaian
    var wpName = "uraian["+uIndex+"][wp_sub][]";
    var wp     =  '<div class="col-span-1 text-center"><input name="'+wpName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                 
    
    //waktu Kerja Efektif
    var wkeName = "uraian["+uIndex+"][wke_sub][]";
    var wke    =  '<div class="col-span-1 text-center"><input  name="'+wkeName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                
    
    //beban kerja
    var beban_kerjaName = "uraian["+uIndex+"][beban_kerja_sub][]";
    var bk     =  '<div class="col-span-1 text-center"><input name = "'+beban_kerjaName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                                        
    
    //pegawai yang dibutuhkan
    var pydName = "uraian["+uIndex+"][pyd_sub][]";
    var pyd     =  '<div class="col-span-1 text-center"><input name="'+pydName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';     
    
    var button = "";
    if (!isAdd){
        button =  "<div class='col-span-1 text-center'><button type='button' id='button-"+elementId+"' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-white-700 rounded'>-</button></div>";
    }
    else {
        button =  "<div class='col-span-1 text-center'><button type='button' id='button-"+elementId+"' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-white-700 rounded'>+</button></div>";
    }
    var tahapanDiv = '<div class="grid grid-cols-11 gap-4 mt-5" id="'+elementId+'">'+id+uraian+satuan+wp+wke+bk+pyd+button+'</div>';

    $("#"+containerId).append(tahapanDiv);
    $("#button-"+elementId).click(function() {
        if (!isAdd){
            $("#"+elementId).remove();
        }
        else {
            onButtonSubClick(containerId,false,uIndex);
        }
    });

    //tambah index array tahapan
    tahapanIndex++;
}

function addNewUraian(){

    uraianCount++; 
    //increase row number
    rowNumber++;
    var uraianId = "uraian"+uraianCount;
    //tambah index uraian
    uraianIndex++;

    var uraianName = "uraian["+uraianIndex+"][uraian]";

    var number       = '<div class="col-span-1 text-center number">'+rowNumber+'</div>';
    var uraian       = '<div class="col-span-4 text-center"><input required name="'+uraianName+'" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div> ';
    //satuan hasil
    var satuanName = "uraian["+uraianIndex+"][satuan]";
    var satuanHasil  = '<div class="col-span-1 text-center"><input name="'+satuanName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>    ';
    //waktu penyelesaian
    var wpName = "uraian["+uraianIndex+"][wp]";    
    var wp     =  '<div class="col-span-1 text-center"><input name="'+wpName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                 
    //
    var wkeName = "uraian["+uraianIndex+"][wke]"; 
    var wke    =  '<div class="col-span-1 text-center"><input name="'+wkeName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                
    //
    var bkName = "uraian["+uraianIndex+"][beban_kerja]"; 
    var bk     =  '<div class="col-span-1 text-center"><input name="'+bkName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                
    //
    var pydName = "uraian["+uraianIndex+"][pyd]"; 
    var pyd    =  '<div class="col-span-1 text-center"><input name="'+pydName+'" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text"></div>';                                
    //
    var button =  "<div class='col-span-1 text-center'><button id='button-uraian"+uraianCount+"' class='bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-white-700 rounded'>-</button></div>";
    
    var gridContainer = '<div class="grid grid-cols-11 gap-4 mb-5">'+number+uraian+satuanHasil+wp+wke+bk+pyd+button+'</div>';
    var uraianContainer = '<div id="'+uraianId+'" class="mt-5 angka">'+gridContainer+'</div';
    $("#uraianContainer").append(uraianContainer);   

    //add tahapan
    onButtonSubClick(uraianId,true,uraianIndex);

    $("#button-uraian"+uraianCount).click(function(){
       $("#"+uraianId).remove();
       rowNumber--;
       //untuk genereate ulang nomor tahapan
       generateNumber();
    })    
}

function generateNumber(){
    var index = 2;
    $('#uraianContainer').children('.angka').each(function () {
        $(this).find('.number').html(index);
        index++;
    });
}
    
</script>