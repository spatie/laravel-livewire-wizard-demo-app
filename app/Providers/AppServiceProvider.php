<?php

namespace App\Providers;

use App\Http\Livewire\OrderWizardComponent;
use App\Http\Livewire\Steps\CartStepComponent;
use App\Http\Livewire\Steps\ConfirmStepComponent;
use App\Http\Livewire\Steps\DeliveryAddressStepComponent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Model::unguard();

        Blade::component('layouts.layout', 'layout');
        Blade::component('components.button', 'button');
        Blade::component('components.input', 'input');

        Livewire::component('order-wizard', OrderWizardComponent::class);
        Livewire::component('cart', CartStepComponent::class);
        Livewire::component('delivery-address', DeliveryAddressStepComponent::class);
        Livewire::component('confirm', ConfirmStepComponent::class);

    }
}
