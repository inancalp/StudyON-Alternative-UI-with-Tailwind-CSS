<!-- Confirm Password -->
<div {{ $attributes->merge(['class' => 'flex flex-col space-y-1']) }}>
    <label class="text-lg font-semibold" for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" required/>
</div>