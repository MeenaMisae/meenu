<dialog id="edit_stock_modal" class="modal" wire:ignore.self>
    <div class="modal-box">
        <form wire:submit="update" class="flex flex-col h-full gap-y-4">
            <div class="form-control">
                <label for="name" class="label">Nome:</label>
                <input wire:model="name" type="text" class="input input-bordered" id="name">
                <div class="h-2">
                    @error('name')
                        <span class="text-error font-semibold text-lg">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <label for="quantity" class="label">Quantidade:</label>
                <div class="join">
                    <input wire:model="quantity" type="number" class="w-full input input-bordered join-item"
                        id="quantity" step="0.01" min="0" placeholder="1">
                    <select wire:model.live="unit" name="unit" id="unit"
                        class="w-1/3 select select-bordered join-item">
                        <option value="" selected disabled></option>
                        <option value="g">g</option>
                        <option value="ml">ml</option>
                        <option value="each">unidade</option>
                        <option value="kg">kg</option>
                        <option value="l">l</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    @error('quantity')
                        <span class="text-error font-semibold text-lg">{{ $message }}</span>
                    @enderror
                    @error('unit')
                        <span class="text-error font-semibold text-lg">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <button class="w-full btn btn-primary text-lg" type="submit">Editar</button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
