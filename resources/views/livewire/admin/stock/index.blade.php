<div>
    <div class="px-2">
        <button class="w-full btn btn-primary text-lg mt-2" @click="add_stock_modal.showModal()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Adicionar item
        </button>
        <div class="flex items-center justify-center h-[50vh]">
            <h1 class="text-2xl font-bold">Estoque em construção 🚧</h1>
        </div>
        <livewire:admin.stock.create />
    </div>
</div>
