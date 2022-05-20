<div>
    <div>
        <label for="{{ $name }}">{{ \Illuminate\Support\Str::of($name)->kebab()->replace('-', ' ')->ucfirst() }}</label>
    </div>

    <div class="text-xs">
        <input type="text" wire:model="{{ $name }}">
    </div>

    @error($name)
    <div class="text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>
