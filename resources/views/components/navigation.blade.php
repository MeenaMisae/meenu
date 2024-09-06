@props(['title'])

<input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
<div class="flex flex-col drawer-content">
    <div class="w-full navbar bg-[#3b3b3b]">
        <div class="flex-none lg:hidden">
            <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </label>
        </div>
        <div class="flex-1 px-2 mx-2 text-2xl font-semibold text-[#00d1cd]">{{ $title }}</div>
        <div class="flex-none hidden lg:block">
            <ul class="menu menu-horizontal">
                <li><a>Navbar Item 1</a></li>
                <li><a>Navbar Item 2</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="drawer-side">
    <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="min-h-full p-4 w-72 menu bg-[#3b3b3b]">
        <x-application-logo class="w-40 h-12" />
        <span class="flex flex-col mt-4 space-y-4">
            <li>
                <a wire:navigate href="{{ route('admin.sales.create') }}" class="@if (request()->routeIs('admin.sales.create')) active !bg-white !text-black @endif flex justify-start h-12 text-lg font-semibold text-white border hover:bg-white hover:text-black btn btn-outline rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    Nova venda
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('admin.dashboard.index') }}" class="@if (request()->routeIs('admin.dashboard.index')) active !bg-white !text-black @endif flex justify-start h-12 text-lg font-semibold text-white border hover:bg-white hover:text-black btn btn-outline rounded-2xl">
                    <svg class="size-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
                    </svg>
                    Painel
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('admin.recipes.index') }}" class="@if (request()->routeIs('admin.recipes.index')) active !bg-white !text-black @endif flex justify-start h-12 text-lg font-semibold text-white border hover:bg-white hover:text-black btn btn-outline rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                    Receitas
                </a>
            </li>
            <li>
                <a wire:navigate href="{{ route('admin.stock.index') }}" class="@if (request()->routeIs('admin.stock.index')) active !bg-white !text-black @endif flex justify-start h-12 text-lg font-semibold text-white border hover:bg-white hover:text-black btn btn-outline rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m7.875 14.25 1.214 1.942a2.25 2.25 0 0 0 1.908 1.058h2.006c.776 0 1.497-.4 1.908-1.058l1.214-1.942M2.41 9h4.636a2.25 2.25 0 0 1 1.872 1.002l.164.246a2.25 2.25 0 0 0 1.872 1.002h2.092a2.25 2.25 0 0 0 1.872-1.002l.164-.246A2.25 2.25 0 0 1 16.954 9h4.636M2.41 9a2.25 2.25 0 0 0-.16.832V12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 12V9.832c0-.287-.055-.57-.16-.832M2.41 9a2.25 2.25 0 0 1 .382-.632l3.285-3.832a2.25 2.25 0 0 1 1.708-.786h8.43c.657 0 1.281.287 1.709.786l3.284 3.832c.163.19.291.404.382.632M4.5 20.25h15A2.25 2.25 0 0 0 21.75 18v-2.625c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125V18a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                    Estoque
                </a>
            </li>
        </span>
    </ul>
</div>
