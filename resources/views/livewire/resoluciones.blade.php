<div>
<div class="text-3xl font-bold text-center p-4 dark:bg-zinc-900 dark:bg-black dark:text-white rounded-lg dark:shadow-md">
    Sistema de Carga de Resoluciones
</div>

<div class="flex items-center gap-2 p-4">
    <input type="text" 
        placeholder="Búsqueda de resoluciones"
        class="px-4 py-2 w-full border rounded-lg bg-white text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-400 
               dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:focus:ring-blue-500"
    >

    <button wire:click="abrirModal"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 cursor-pointer transition">
        Cargar Resolución
    </button>
</div>

    <div class="p-4">
    <table class="w-full border-collapse border border-gray-600 shadow-lg rounded-lg">
        <thead>
            <tr class="bg-gray-200 dark:bg-gray-700 dark:text-white">
                <th class="p-4 border border-gray-600">Nº de Expediente</th>
                <th class="p-4 border border-gray-600">Nº de Resolucion</th>
                <th class="p-4 border border-gray-600">Fecha de Resolucion</th>
                <th class="p-4 border border-gray-600">Barrio</th>
                <th class="p-4 border border-gray-600">Casa</th>
                <th class="p-4 border border-gray-600">Archivo PDF</th>
                <th class="p-4 border border-gray-600">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white dark:bg-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                <td class="p-4 border border-gray-600 text-center">1</td>
                <td class="p-4 border border-gray-600 text-center">2</td>
                <td class="p-4 border border-gray-600 text-center">3456/440-2025</td>
                <td class="p-4 border border-gray-600 text-center">254</td>
                <td class="p-4 border border-gray-600 text-center">54</td>
                <td class="p-4 border border-gray-600 text-center">ARCHIVO.PDF</td>

                <td class="p-4 border border-gray-600 flex justify-center gap-2">
                    <button wire:click=""
                        class="px-4 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 cursor-pointer transition">
                        Modificar
                    </button>
                    <button wire:click=""
                        class="px-4 py-2 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 cursor-pointer transition">
                        Borrar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@include('livewire.modal-carga-resolucion')
</div>
