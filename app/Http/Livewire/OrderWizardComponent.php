<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Steps\CartStepComponent;
use App\Http\Livewire\Steps\ConfirmStepComponent;
use App\Http\Livewire\Steps\DeliveryAddressStepComponent;
use Spatie\LivewireWizard\Components\WizardComponent;

class OrderWizardComponent extends WizardComponent
{
    public function steps(): array
    {
        return [
            CartStepComponent::class,
            DeliveryAddressStepComponent::class,
            ConfirmStepComponent::class,
        ];
    }
}
