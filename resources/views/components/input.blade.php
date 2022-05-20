<div>
    <div>
        <label class="text-xs" for="{{ $name }}">{{ \Illuminate\Support\Str::of($name)->kebab()->replace('-', ' ')->ucfirst() }}</label>
    </div>

    <div>
        <input type="text" wire:model="{{ $name }}">
    </div>

    @error($name)
    <div class="text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>
