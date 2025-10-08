<?php

namespace App\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class DeliveryAddressStepComponent extends StepComponent
{
    public string $name = '';

    public string $street = '';

    public string $zip = '';

    public string $city = '';

    public array $rules = [
        'name' => 'required',
        'street' => 'required',
        'zip' => 'required',
        'city' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Delivery address',
        ];
    }

    public function render()
    {
        return view('livewire.orderWizard.steps.deliveryAddress');
    }
}
