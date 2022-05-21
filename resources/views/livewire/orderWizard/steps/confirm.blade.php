<div>
    @include('livewire.orderWizard.navigation')

    <h1>Order confirmation</h1>

    <div class="text-xs text-under text-gray-400 cursor-pointer" wire:click="previousStep">⬅ Previous</div>

    <div class="mt-4 space-y-4">
        <div>Please verify this information:</div>
        <div>Amount: {{ $amount }}</div>
        <div>
            <div>Address:</div>
            <div>{{ $address['name'] }}</div>
            <div>{{ $address['street'] }}</div>
            <div>{{ $address['zip'] }} {{ $address['city'] }}</div>
        </div>

        <x-button label="Confirm order" wire:click="confirm"/>
    </div>

</div>
