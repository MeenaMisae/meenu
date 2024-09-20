<input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
<div class="flex flex-col drawer-content">
    <div class="w-full navbar bg-base-300">
        <div class="flex-1 px-2 mx-2">
            <x-application-logo />
        </div>
        <div class="flex-none hidden lg:block">
            <ul class="menu menu-horizontal">
                <li><a>Navbar Item 1</a></li>
                <li><a>Navbar Item 2</a></li>
            </ul>
        </div>
        <livewire:theme-selector />
        <div class="flex-none lg:hidden">
            <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-base-content">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>
        </div>
    </div>
</div>
<div class="drawer-side">
    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="min-h-full bg-base-100 w-72 menu gap-y-12 px-3">
        <div class="space-y-9 mt-3">
            <div class="ml-3">
                <x-application-logo />
            </div>
            {{-- <div class="flex justify-between px-3">
            <div class="flex gap-x-2 items-center">
                <div class="avatar placeholder">
                    <div class="w-12 rounded-full text-neutral-content bg-neutral">
                        <span class="text-lg">{{ auth()->user()->name[0] }}</span>
                    </div>
                </div>
                <span class="text-lg">
                    {{ auth()->user()->name }}
                </span>
            </div>
            <form action="{{ route('logout') }}" method="post" class="flex items-center">
                @csrf
                <button class="btn btn-sm btn-square text-error" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                    </svg>
                </button>
            </form>
        </div> --}}
            <li class="flex space-y-4">
                <a href="{{ route('admin.dashboard.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.dashboard.index')) text-secondary @endif flex gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                    </svg>
                    <span class="text-lg font-medium">Painel</span>
                </a>
                <a href="{{ route('admin.sales.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.sales.index')) text-secondary @endif flex gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <span class="text-lg font-medium">Vendas</span>
                </a>
                <a href="{{ route('admin.purchases.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.purchases.index')) text-secondary @endif flex gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    <span class="text-lg font-medium">Compras</span>
                </a>
                <a href="{{ route('admin.stock.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.stock.index')) text-secondary @endif flex gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                    <span class="text-lg font-medium">Estoque</span>
                </a>
                <a href="{{ route('admin.recipes.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.recipes.index')) text-secondary @endif flex gap-x-4">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 19V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v13H7a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M9 3v14m7 0v4" />
                    </svg>
                    <span class="text-lg font-medium">Receitas</span>
                </a>
                {{-- <a href="{{ route('admin.customers.index') }}" wire:navigate
                    class="@if (request()->routeIs('admin.customers.index')) text-secondary @endif flex gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <span class="text-lg font-medium">Clientes</span>
                </a> --}}
            </li>
        </div>
    </ul>
</div>
