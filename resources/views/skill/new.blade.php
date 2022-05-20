<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル新規登録
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <form class="w-full max-w-screen-lg" action="/skill/create" method="POST">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
                                スキル名
                            </label>
                            </div>
                            <div class="md:w-2/3">
                                <input required name="skill_name" placeholder="スキル名" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="experience_years">
                                経験年数
                            </label>
                            </div>
                            <div class="md:w-2/3">
                                <input required name="experience_years" placeholder="経験年数" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="number" value="">
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="remarkd">
                                特記事項
                            </label>
                            </div>
                            <div class="md:w-2/3">
                                <textarea name="remarks" id="" cols="30" rows="10" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></textarea>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-password">
                                ステータス
                            </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="skill_status" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name">
                                    @foreach(App\Models\Skill::SKILL_STATUS_OBJECT as $key => $skillName)
                                    <option value="{{$key}}">{{$skillName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                            <button onclick="location.href='/skill'" class="shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                戻る
                            </button>
                            <button type="submit" class="shadow bg-yellow-500 hover:bg-yellow-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                登録
                            </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
