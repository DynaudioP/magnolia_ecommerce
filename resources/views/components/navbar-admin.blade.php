{{-- Navbar/Sidebar Admin --}}

{{-- Sidebar Mobile --}}
<div x-show="open" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="transform -translate-x-full opacity-100"
    x-transition:enter-end="transform translate-x-0 opacity-100" x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="transform translate-x-0 opacity-100"
    x-transition:leave-end="transform -translate-x-full opacity-0"
    class="absolute top-0 left-0 w-4/5 h-full block md:hidden z-60 p-4 bg-gradient-to-r from-[#25777a] to-[#164345]">
    <form action="{{ route('admin.logout') }}" method="POST" class="text-white flex flex-col gap-2">
        @csrf
        <a href="/admin" class="py-2 px-3 rounded hover:bg-gray-700">Dashboard</a>
        <a href="/admin/orders" class="py-2 px-3 rounded hover:bg-gray-700">Orders</a>
        <button type="submit" class="py-2 px-3 rounded hover:bg-gray-700 text-start">Logout</button>
    </form>
</div>
{{-- Sidebar Desktop --}}
<aside class=" text-white p-4 hidden md:block">
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <nav class="flex flex-col gap-2">
            <a href="/admin" class="py-2 px-3 rounded hover:bg-gray-700">Dashboard</a>
            <a href="/admin/orders" class="py-2 px-3 rounded hover:bg-gray-700">Orders</a>
            <button class="py-2 px-3 rounded hover:bg-gray-700 text-start">Logout</button>
        </nav>
    </form>
</aside>
