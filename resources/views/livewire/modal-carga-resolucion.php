<x-dialog-modal wire:model="abrirModal">
    <!-- Título del modal -->
    <x-slot:title>
        <div class="bg-sky-900 text-white text-center py-4 -mt-4 -mx-6 rounded-t-lg">
            <h2 class="text-lg font-bold">Carga de Resolucion</h2>
        </div>        
    </x-slot:title>
    
    <!-- Contenido del modal -->
    <x-slot:content>
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 dark:bg-gray-900 dark:bg-opacity-75">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-96">
                <h2 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Subir Resolución</h2>

                <form wire:submit.prevent="guardar">
                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">Número Expediente</label>
                        <input type="text" wire:model="numero_exp" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('numero_exp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">Número Resolución</label>
                        <input type="text" wire:model="numero_resolucion" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('numero_resolucion') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">Fecha</label>
                        <input type="date" wire:model="fecha" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('fecha') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">Barrio</label>
                        <input type="text" wire:model="barrio" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('barrio') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">Casa</label>
                        <input type="text" wire:model="casa" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('casa') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-2">
                        <label class="block text-sm font-medium text-gray-900 dark:text-gray-300">PDF</label>
                        <input type="file" wire:model="pdf" class="w-full border rounded px-2 py-1 dark:bg-gray-700 dark:text-white dark:border-gray-600">
                        @error('pdf') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="mt-4 flex justify-end">
                        <button type="button" wire:click="$set('showModal', false)" class="px-4 py-2 bg-gray-300 rounded mr-2 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">Cancelar</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded dark:bg-blue-700 dark:hover:bg-blue-600">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
    </x-slot:content>

    <!-- Footer del modal -->
    <x-slot:footer>
        <div class="flex gap-4 justify-end">
            <x-button-blue wire:click="guardar">Guardar</x-button-blue>
            <x-button wire:click="cerrar">Cerrar</x-button>
        </div>
    </x-slot:footer>
</x-dialog-modal>