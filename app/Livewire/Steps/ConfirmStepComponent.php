<?php

namespace App\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class ConfirmStepComponent extends StepComponent
{
    public function confirm()
    {
        $amount = $this->state()->amount();
        $address = $this->state()->deliveryAddress();

        // here you should store the amount and address somehow

        $this->redirect(route('order-confirmed'));
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Confirmation',
        ];
    }

    public function render()
    {
        return view('livewire.orderWizard.steps.confirm', [
            'amount' => $this->state()->amount(),
            'address' => $this->state()->deliveryAddress(),
        ]);
    }
}
