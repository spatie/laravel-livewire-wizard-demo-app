<div>
    @include('livewire.orderWizard.navigation')

    <h1>Delivery address</h1>

    <div class="text-xs text-under text-gray-400 cursor-pointer" wire:click="previousStep" >⬅ Previous</div>

    <div class="space-y-4 mt-4">
        <x-input name="name" />
        <x-input name="street" />
        <x-input name="zip" />
        <x-input name="city" />
        <x-button label="Submit" wire:click="submit" />
    </div>

</div>
