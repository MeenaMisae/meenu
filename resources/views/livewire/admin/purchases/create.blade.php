<dialog id="add_purchase_modal" class="modal" wire:ignore.self>
    <div class="modal-box">
        <form wire:submit.prevent="save" class="flex flex-col h-full">
            <div class="form-control">
                <label for="item" class="label">Item:</label>
                <select id="item" name="item" class="select select-primary"
                    wire:change="loadUnit($event.target.value)" wire:model="ingredientId">
                    <option value="0" selected disabled>Selecione o item</option>
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="quantity" class="label">Quantidade:</label>
                <div class="join w-full">
                    <input wire:model="quantity" type="number" class="w-full input input-primary join-item"
                        id="quantity" step="0.01" min="0" placeholder="1" required />
                    <button class="join-item btn btn-primary" type="button">{{ $unit }}</button>
                </div>
            </div>
            <div class="form-control">
                <label for="price" class="label">Valor:</label>
                <div class="join w-full">
                    <button class="btn btn-primary join-item" type="button">R$</button>
                    <input x-mask:dynamic="$money($input, ',')" wire:model="price"
                        class="w-full input input-primary join-item" id="price" required placeholder="0,00">
                </div>
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
                            wire:model="purchaseDate" @if ($boughtToday) required @endif>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <button class="w-full btn btn-primary text-lg" type="submit">Salvar</button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
