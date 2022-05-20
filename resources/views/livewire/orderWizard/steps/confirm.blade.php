<div>
    @include('livewire.orderWizard.navigation')

    <h1>Order confirmation</h1>

    <div class="text-xs text-under text-gray-400 cursor-pointer" wire:click="previousStep">⬅ Previous</div>

    <div class="mt-4 space-y-4">
        <div>Here comes the order confirmation</div>

        <x-button label="Confirm order" wire:click="confirm"/>
    </div>

</div>
