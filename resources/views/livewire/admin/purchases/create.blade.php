<dialog id="add_purchase_modal" class="modal" wire:ignore.self>
    <div class="modal-box">
        <form class="flex flex-col h-full gap-y-4">
            <div class="form-control">
                <label for="name" class="label">Nome:</label>
                <input wire:model="name" type="text" class="input input-bordered" id="name" placeholder="Manteiga"
                    required>
            </div>
            <div>
                <label for="quantity" class="label">Quantidade:</label>
                <div class="join">
                    <input wire:model="quantity" type="number" class="w-full input input-bordered join-item"
                        id="quantity" step="0.01" min="0" placeholder="1" required>
                    <select wire:model="unit" name="unit" id="unit"
                        class="w-1/4 select select-bordered join-item" required>
                        <option value="g">g</option>
                        <option value="ml">ml</option>
                        <option value="unit">unidade</option>
                        <option value="kg">kg</option>
                        <option value="l">l</option>
                    </select>
                </div>
            </div>
            {{-- <label for="itemName" class="label">Valor:</label>
            <div class="join w-full">
                <button class="btn btn-primary join-item" type="button">R$</button>
                <input x-mask:dynamic="$money($input, ',')" class="w-full input input-bordered join-item" id="itemName"
                    required placeholder="0,00">
            </div> --}}
            {{-- <div class="my-2 form-control">
                <div class="flex items-center justify-between">
                    <label for="" class="label">Comprado hoje?</label>
                    <input type="checkbox" class="toggle toggle-info" wire:click="$toggle('boughtToday')"
                        wire:model.live="boughtToday" required>
                </div>
                <div class="h-24">
                    @if (!$boughtToday)
                        <label for="boughtDate" class="label">Data da compra:</label>
                        <input type="date" class="w-full input input-bordered" id="boughtDate"
                            @if ($boughtToday) required @endif>
                    @endif
                </div>
            </div> --}}
            <div class="mt-4">
                <button class="w-full btn btn-primary text-lg" type="submit">Salvar</button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>