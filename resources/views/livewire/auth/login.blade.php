<div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input wire:model.change="email" type="text" class="form-control" placeholder="Correo">
            @error("email")
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @endError
        </div>
        <div class="mb-3">
            <input wire:model.change="pass" type="password" class="form-control" placeholder="Contraseña">
            @error("pass")
                <div class="text-invalid">
                    {{ $message }}
                </div>
            @endError
        </div>
        <div class="form-check form-switch">
            <input id="remember_me" type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label" for="rememberMe">Recuérdame</label>
        </div>
        <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2">Iniciar sesión</button>        
    </form>
</div>
