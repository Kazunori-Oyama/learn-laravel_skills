<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>
    @if(session('status'))
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">{{session('status')}}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button onclick="location.href='/skill/new/'" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    新規作成
                                </button>
                    <table class="table-auto">
                        <thead>
                            <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">スキル名</th>
                            <th class="px-4 py-2">ステータス</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            <tr>
                            <td class="border px-4 py-2">{{$skill->id}}</td>
                            <td class="border px-4 py-2">{{$skill->skill_name}}</td>
                            <td class="border px-4 py-2">{{App\Models\Skill::SKILL_STATUS_OBJECT[$skill->skill_status]}}</td>
                            <td class="border px-4 py-2">
                                <button onclick="location.href='/skill/detail/{{$skill->id}}'" class="shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    詳細ページへ
                                </button>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        <div class="flex justify-center mt-3">
                            {{$skills->links()}}
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
