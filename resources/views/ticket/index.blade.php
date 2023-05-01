<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center items-center"
            >
                <h1 class="text-center pt-10 text-4xl font-bold text-gray-600">
                    Ticket List
                </h1>
                <a
                    class="border leading-6 text-3xl font-bold bg-green-500 text-white rounded-full text-center mt-4 mx-auto w-8 h-8"
                    href="{{ route('ticket.create') }}"
                    >+</a
                >
                <div
                    class="p-6 flex justify-center items-center flex-wrap gap-4 text-gray-900 dark:text-gray-100"
                >
                    @foreach($tickets as $ticket)
                    <div class="border h-full p-4 rounded-lg basis-[49%]">
                        <a href="{{route('ticket.show', $ticket->id)}}">
                            <div class="border-b pb-1 text-xl">
                                {{$ticket->title}}
                            </div>
                            <div>{{$ticket->description}}</div>
                            <div class="mt-2">
                                @if($ticket->attachment)
                                <a
                                    target="_blank"
                                    class="text-blue-500"
                                    href="{{ '/storage/' . $ticket->attachment }}"
                                    >Attachment</a
                                >
                                @endif
                            </div>
                            <small
                                class="block text-end w-full"
                                >{{$ticket->created_at->diffForHumans()}}</small
                            >
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
