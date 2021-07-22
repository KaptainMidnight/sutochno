<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $facility->title }}
        </h2>
    </x-slot>


    <div class="shadow-lg rounded-2xl w-36 p-4 bg-white dark:bg-gray-800 mx-auto mt-4">
        <div class="flex items-center">
            <p class="text-md text-gray-700 dark:text-gray-50 ml-2">
                Views
            </p>
        </div>
        <div class="flex flex-col justify-start">
            <p class="text-gray-800 text-4xl text-left dark:text-white font-bold my-4">
                {{ $facility->count_views }}
            </p>
        </div>
    </div>



    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">1</span>
                        </div>

                        <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">2</span>
                        </div>

                        <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">3</span>
                        </div>

                        <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">4</span>
                        </div>
                    </div>

                    <div class="flex -mx-2 mb-4">
                        <template x-for="i in 4">
                            <div class="flex-1 px-2">
                                <button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                    <span x-text="i" class="text-2xl"></span>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">Lorem ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
                <p class="text-gray-500 text-sm">By <a href="#" class="text-indigo-600 hover:underline">{{ $facility->user->name }}</a></p>

                <div class="flex items-center space-x-4 my-4">
                    <div>
                        <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                            <span class="text-indigo-400 mr-1 mt-1">$</span>
                            <span class="font-bold text-indigo-600 text-3xl">{{ $facility->price }}</span>
                        </div>
                    </div>
                </div>

                <p class="text-gray-500">{{ $facility->description }}</p>

                <div class="flex py-8 space-x-4">
                    <div class="relative">
                        <div class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">Pers</div>
                        <select class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-center pb-1">
                            @for ($i = 1; $i <= $facility->max_residents; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                        To book
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
