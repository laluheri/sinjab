<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<x-app-layout>
    <x-slot name="header">
        {{ __('Abk') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 pt-6 pb-6">
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jabatans as $jabatan)
                      <tr>
                        <td class="border px-4 py-2"><a href="{{ route('abk.show', ['id' => $jabatan->id]) }}">{{ $jabatan->jabatan }}</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
               
        </div>
        
    </div>
</x-app-layout>
