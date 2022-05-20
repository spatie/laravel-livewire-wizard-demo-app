<div>
    <div>
        <label class="text-sm text-gray-700" for="{{ $name }}">{{ \Illuminate\Support\Str::of($name)->kebab()->replace('-', ' ')->ucfirst() }}</label>
    </div>

    <div>
        <input class="input" type="text" wire:model="{{ $name }}">
    </div>

    @error($name)
    <div class="mt-1 text-red-500 text-sm">
        {{ $message }}
    </div>
    @enderror
</div>
