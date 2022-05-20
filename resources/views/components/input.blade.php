<div>
    <label for="{{ $name }}">{{ \Illuminate\Support\Str::of($name)->kebab()->replace('-', ' ')->ucfirst() }}</label>

    <input type="text" wire:model="{{ $name }}">

    @error($name)
        {{ $message }}
    @enderror
</div>
