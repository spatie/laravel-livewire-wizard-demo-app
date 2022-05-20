<div>
    @include('livewire.orderWizard.navigation')

    <h1>Your cart</h1>

    <label>
        Number: <input type="number" wire:model="amount">
    </label>

    <div>
    Price: 10 EUR
    </div>

    <div>
        Total: {{ $amount * 10 }} EUR
    </div>

    <x-button label="Submit" wire:click="submit" />
</div>
