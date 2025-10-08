<?php

namespace App\Livewire;

use App\Livewire\Steps\CartStepComponent;
use App\Livewire\Steps\ConfirmStepComponent;
use App\Livewire\Steps\DeliveryAddressStepComponent;
use App\Support\OrderWizardState;
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

    public function stateClass(): string
    {
        return OrderWizardState::class;
    }
}
