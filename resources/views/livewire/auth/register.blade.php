<div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input name="name" wire:model.change="name" type="text" class="form-control @error('name') is-invalid @elseif(strlen($name) > 0) is-valid @enderror" placeholder="Nombre" value="{{ old('name') }}">
            @error("name")
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @endError
        </div>
        <div class="mb-3">
            <input name="email" wire:model.change="email" type="email" class="form-control @error('email') is-invalid @elseif(strlen($email) > 0) is-valid @enderror" placeholder="Correo" value="{{ old('email') }}">
            @error("email")
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @endError
        </div>
        <div class="mb-3">
            <input name="password" wire:model.change="pass" type="password" class="form-control @error('pass') is-invalid @elseif(strlen($pass) > 0) is-valid @enderror" placeholder="Contraseña">
            @error("pass")
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @endError
        </div>
        <div class="mb-3">
            <input name="password_confirmation" wire:model.change="passConfirm" type="password" class="form-control @error('passConfirm') is-invalid @elseif(strlen($passConfirm) > 0) is-valid @enderror" placeholder="Verificar contraseña">
        </div>
        <div class="form-check form-switch">
            <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label" for="rememberMe">Recuérdame</label>
        </div>
        <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2" @disabled($errors->isNotEmpty())>Registrar</button>        
    </form>
</div>
