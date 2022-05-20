<?php

namespace App\Http\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class CartStepComponent extends StepComponent
{
    public int $amount = 1;

    public array $rules = [
        'amount'=> 'numeric',
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
        ray('rendering first step');

        return view('livewire.orderWizard.steps.cart');
    }
}
