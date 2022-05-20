<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            いつもの
        </h2>
    </x-slot>
    <div id="app">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        template<br>
                        
                        @if ($str === '1')
                            ifに入りました。<br>
                        @elseif($str === '2')
                            elseifに入りました<br>
                        @else
                            ifに入りませんでした。<br>
                        @endif
                        @foreach($skills as $skill)
                            @if($loop->first)
                           {{$skill->id}} 繰り返しの最初の値のみ<br>
                           @endif
                           {{$skill->id}}<br>
                        @endforeach
                        
                        @php
                        echo 'it called by php';
                        @endphp
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
