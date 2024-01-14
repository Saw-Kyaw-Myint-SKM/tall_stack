<?php

use Livewire\Volt\Component;

new class extends Component {
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }
}; ?>

<div>
    <h1 class="text-red-500">{{ $count }}</h1>
    <button class="border border-red-500 text-white" wire:click="increment">increment</button>
</div>
