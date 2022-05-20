<div>
    <div class="mt-1 mb-4">
        <div>
            <input type="text" wire:model.debounce.200ms="searchingFor" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-800 rounded-md p-4" placeholder="Search a quote...">
        </div>
    </div>

    @if (! empty($searchingFor))
        @if(count($quotes))
            <ul role="list" class="divide-y divide-gray-200">
                @foreach($quotes as $quote)
                    <li class="px-4 py-4 sm:px-6 hover:bg-yellow-50">
                        {{ $quote->text }}
                    </li>
                @endforeach
            </ul>

        @else
            <div class="bg-blue-200 text-blue-800 border rounded-md p-4">
                No quotes were found
            </div>
        @endif
    @endif


</div>
