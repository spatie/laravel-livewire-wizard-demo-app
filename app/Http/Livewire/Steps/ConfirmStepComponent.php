<?php

namespace App\Http\Livewire\Steps;

use Spatie\LivewireWizard\Components\StepComponent;

class ConfirmStepComponent extends StepComponent
{
    public function confirm()
    {
        // order

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
        return view('livewire.orderWizard.steps.confirm');
    }
}
