<x-filament::page class="filament-resources-create-record-page">
    <x-filament::form wire:submit.prevent="generate">
        {{ $this->form }}
        <x-filament::form.actions :actions="$this->getFormActions()" />
    </x-filament::form>
</x-filament::page>