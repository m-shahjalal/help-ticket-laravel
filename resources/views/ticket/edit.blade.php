<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"
            >
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('ticket.update', $ticket->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!-- title -->
                        <div>
                            <x-input-label for="title" :value="__('title')" />
                            <x-text-input
                                id="title"
                                class="block mt-1 w-full"
                                type="text"
                                name="title"
                                value="{{ $ticket->title }}"
                                autofocus
                            />
                            <x-input-error
                                :messages="$errors->get('title')"
                                class="mt-2"
                            />
                        </div>

                        <!-- description -->
                        <div class="mt-4">
                            <x-input-label
                                for="description"
                                :value="__('description')"
                            />

                            <textarea
                            name="description"
                            id="description"
                            class="p-2 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            rows="6"
                            >{{ $ticket->description }}</textarea>
                                
                                <x-input-error
                                :messages="$errors->get('description')"
                                class="mt-2"
                                />
                            </div>

                            <div class="mt-4 mb-2">
                                <x-input-label for="attachment" :value="__('attachment')" />
                                <input
                                id="attachment"
                                style="padding: 8px"
                                class="block mt-1 w-full border rounded-md dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600  shadow-sm"
                                type="file"
                                name="attachment"
                            />
                            <x-input-error
                                :messages="$errors->get('attachment')"
                                class="mt-2"
                            />
                        </div>

                        @if ($ticket->attachment)
                        <a
                            href="{{ '/storage/' . $ticket->attachment }}"
                            target="_blank"
                            class="text-blue-500 mt-4 underline"
                            >See current attachment</a
                        >
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __("Update") }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
