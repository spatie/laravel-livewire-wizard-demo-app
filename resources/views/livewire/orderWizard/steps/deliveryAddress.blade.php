<div>
    @include('livewire.orderWizard.navigation')

    <h1>Delivery address</h1>

    <x-input name="name" />
    <x-input name="addressLine" />
    <x-input name="zip" />
    <x-input name="city" />

    <x-button label="Submit" wire:click="submit" />
</div>
