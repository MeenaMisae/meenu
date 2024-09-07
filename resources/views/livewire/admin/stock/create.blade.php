<dialog id="add_stock_modal" class="modal" wire:ignore.self>
    <div class="h-[64vh] modal-box">
        <form class="h-full">
            <div class="form-control">
                <label for="itemName" class="label">Nome:</label>
                <input type="text" class="input input-bordered" id="itemName" placeholder="Manteiga" required>
            </div>
            <label for="itemQuantity" class="label">Quantidade:</label>
            <div class="join">
                <input type="number" class="w-full input input-bordered join-item" id="itemQuantity" step="0.01"
                    min="0" placeholder="1" required>
                <select name="" id="" class="select select-bordered join-item" required>
                    <option value="">g</option>
                    <option value="">ml</option>
                    <option value="">unidade</option>
                    <option value="">kg</option>
                    <option value="">l</option>
                </select>
            </div>
            <div class="form-control">
                <label for="itemName" class="label">Valor:</label>
                <input x-mask:dynamic="$money($input, ',')" class="input input-bordered" id="itemName" required
                    placeholder="0,00">
            </div>
            <div class="my-2 form-control">
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
            </div>
            <button class="w-full btn btn-primary text-lg mt-2" type="submit">Salvar</button>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
