<?php

use Livewire\Volt\Component;

new class extends Component
{
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/', navigate: true);
    }
}; ?>

<li class="nav-item active">
    <a class="nav-link" wire:click="logout" href="">Cierra tu sesión {{ auth()->user()->name }} </a>
</li>
