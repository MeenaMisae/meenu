<div>
    <div class="px-4">
        <button class="w-full btn btn-primary text-lg mt-2" @click="add_stock_modal.showModal()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Adicionar item
        </button>
        <div class="flex w-full gap-x-4 mt-4 flex-wrap">
            @forelse ($ingredients as $ingredient)
                <div class="w-[47%] h-64">
                    <div class="h-[80%] bg-base-200 rounded-3xl flex justify-center flex-col items-center">
                        <span class="badge badge-primary font-semibold">{{ $ingredient->quantity_in_stock }}
                            {{ $ingredient->unit }}
                        </span>
                        <svg data-slot="icon" aria-hidden="true" fill="none" stroke-width="1.5" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-base-content">
                            <path
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-center mt-2">
                        <span class="text-lg font-bold text-base-content">{{ $ingredient->name }}</span>
                    </div>
                </div>
            @empty
                Nenhum ingrediente cadastrado.
            @endforelse
        </div>
        <livewire:admin.stock.create @created="$refresh" />
    </div>
</div>
