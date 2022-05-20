<div>
    @include('livewire.orderWizard.navigation')

    <h1>Your cart</h1>

    <div class="space-y-4">
        <x-input type="number" name="amount"/>

        @if(is_numeric($amount))
            <div class="text-sm">
                Total: 10 EUR * {{ $amount }} = <span class="p-1 bg-orange-200">{{ $amount * 10 }} EUR</span>
            </div>
        @endif

        <x-button label="Submit" wire:click="submit"/>
    </div>

</div>
