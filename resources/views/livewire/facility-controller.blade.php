<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facilities') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
        @foreach($facilities as $facility)
            <div class="flex items-center justify-center">
                <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                        <div class="bg-cover bg-center h-56 p-4" style="background-image: url(https://via.placeholder.com/450x450)">
                            <div class="flex justify-end">
                                <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ $facility->title }} • {{ $facility->created_at->diffForHumans() }}</p>
                            <p class="text-3xl text-gray-900">${{ $facility->price }}</p>
                        </div>
                        <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Realtor</div>
                            <div class="flex items-center pt-2">
                                <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://via.placeholder.com/50x50)">
                                </div>
                                <div>
                                    <p class="font-bold text-gray-900">{{ $facility->user->name }}</p>
                                    <p class="text-sm text-gray-700">(111) 111-1111</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
