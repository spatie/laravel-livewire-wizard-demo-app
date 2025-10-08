<?php

namespace App\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class CartStepComponent extends StepComponent
{
    public $amount = 1;

    public array $rules = [
        'amount' => ['numeric', 'min:1', 'max:5'],
    ];

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function stepInfo(): array
    {
        return [
            'label' => 'Cart',
        ];
    }

    public function render()
    {
        return view('livewire.orderWizard.steps.cart');
    }
}
