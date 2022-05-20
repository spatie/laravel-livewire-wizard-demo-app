<div>
    @include('livewire.orderWizard.navigation')

    <h1>Your cart</h1>

    <x-input type="number" name="amount"/>

    <div>
        Price: 10 EUR
    </div>

    @if(is_numeric($amount))
        <div>
            Total: {{ $amount * 10 }} EUR
        </div>
    @endif

    <x-button label="Submit" wire:click="submit"/>
</div>
