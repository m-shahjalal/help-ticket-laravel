<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto w-full sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center"
            >
                <div
                    class="p-6 flex-col flex justify-center items-center flex-wrap gap-4 text-gray-900 dark:text-gray-100"
                >
                    <div class="flex flex-col justify-between py-4">
                        <h1 class="text-2xl font-bold">{{ $ticket->title }}</h1>
                        <div class="flex gap-2 mt-3 mb-3 w-full">
                            <p class="font-bold italic uppercase">{{ $ticket->status }}</p>
                            <p class="w-fulltext-sm">
                                {{ $ticket->created_at->diffForHumans() }}
                            </p>
                        </div>
                        <p>{{ $ticket->description }}</p>
                        
                        @if ($ticket->attachment)
                        <a
                            href="{{ '/storage/' . $ticket->attachment }}"
                            target="_blank"
                            class="text-blue-500 mt-2"
                            >Attachment</a
                        >
                        @endif
                    </div>
                    <div class="flex">
                        <a
                            href="{{ route('ticket.edit', $ticket->id) }}"
                            value="Edit"
                            type="submit"
                            class="border text-sm p-1 rounded m-1 px-2 cursor-pointer"
                        >Edit</a>

                        <form
                            method="POST"
                            action="{{ route('ticket.destroy', $ticket->id) }}"
                        >
                            @csrf @method('DELETE')
                            <input
                                value="delete"
                                type="submit"
                                class="border text-sm p-1 rounded m-1 px-2 cursor-pointer"
                            />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
