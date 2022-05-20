<div>
    @include('livewire.orderWizard.navigation')

    <h1>Delivery address</h1>

    <div class="space-y-4">
        <x-input name="name" />
        <x-input name="addressLine" />
        <x-input name="zip" />
        <x-input name="city" />
    </div>

    <x-button label="Submit" wire:click="submit" />
</div>
