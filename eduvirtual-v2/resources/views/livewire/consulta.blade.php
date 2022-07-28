<div>
    <x-consulta-button wire:click="$set('open', true)">Realizar Consulta

    </x-consulta-button>

<x-jet-dialog-modal wire:model="open">
<x-slot name="title"> <h3 class="mb-2 text-xl font-bold text-center">Realizar Consulta</h3></x-slot>
<x-slot name="content">

                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="descripcion" class="block mb-2 text-sm font-bold text-gray-700">Nombre y Apellido:</label>
                            <input type="text" class="block w-full pr-12 mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" name="name" id="name" wire:model="name" required>
                        </div>


                        <div class="mb-4">
                            <label for="descripcion" class="block mb-2 text-sm font-bold text-gray-700">Email:</label>
                            <input type="text" class="block w-full pr-12 mt-1 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" name="email" id="email" wire:model.defer="email" required>
                        </div>
                        <div class="mb-4">

                            <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                                Motivo de la Consulta
                            </label>
                            <textarea class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" name="mensaje" id="mensaje" wire:model.defer="mensaje" type="text" placeholder="Escríbe tu consulta Aquí"required></textarea>
                        </div>




                    </div>



</x-slot>
<x-slot name="footer">

    <x-jet-secondary-button wire:click="$set('open',false)">
        Cancelar
    </x-jet-secondary-button>

    <x-button-enlace wire:click="save">Enviar</x-button-enlace>
</x-slot>
</x-jet-dialog-modal>


</div>

