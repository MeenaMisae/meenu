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
        </span>
    </ul>
</div>
