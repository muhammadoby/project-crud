<form wire:submit="submit">
    <!-- Username -->
    <div class="mb-3">
        <label for="email" class="form-label">Alamat Email</label>
        <input type="email" id="email" class="form-control @error('email')
            is-invalid
        @enderror"
            wire:model="email" placeholder="Email address here" required="">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" id="password"
            class="form-control @error('password')
            is-invalid
        @enderror" wire:model="password"
            placeholder="**************" required="">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!-- Checkbox -->
    <div class="d-lg-flex justify-content-between align-items-center
mb-4">
        <div class="form-check custom-checkbox">
            <input type="checkbox" class="form-check-input" wire:model="remember" id="rememberme">
            <label class="form-check-label" for="rememberme">Ingat Saya</label>
        </div>

    </div>
    <div>
        <!-- Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Masuk</button>
        </div>

        <div class="d-md-flex justify-content-between mt-4">
            <div>
                <a href="forget-password.html" class="text-inherit
fs-5">Forgot your password?</a>
            </div>

        </div>
    </div>


</form>
