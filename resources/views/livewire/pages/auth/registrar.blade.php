<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        auth()->login($user);

        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>


<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registrate</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form class="row" wire:submit="register">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="name" name="name"  wire:model="name" placeholder="Nombre">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="email" name="email" wire:model="email" placeholder="Correo">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="password" name="password" wire:model="password" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="password_confirmation" name="password_confirmation" wire:model="password_confirmation" placeholder="Confirme su contraseña">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
