<div class="flex flex-col gap-3 max-w-sm">
    <!-- Search with icon -->
    <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-3 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#585b70]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0
                         0010.607 10.607z" />
            </svg>
        </div>
        <input
            type="search"
            placeholder="Search components..."
            class="w-full rounded-md border border-[#313244] bg-[#181825]
                   pl-9 pr-3 py-2 text-sm text-[#cdd6f4] placeholder-[#585b70]
                   focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                   focus:border-transparent transition duration-150"
        />
    </div>

    <!-- Search with kbd hint -->
    <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-3 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#585b70]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0
                         0010.607 10.607z" />
            </svg>
        </div>
        <input
            type="search"
            placeholder="Quick search..."
            class="w-full rounded-md border border-[#313244] bg-[#181825]
                   pl-9 pr-16 py-2 text-sm text-[#cdd6f4] placeholder-[#585b70]
                   focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                   focus:border-transparent transition duration-150"
        />
        <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center gap-0.5">
            <kbd class="px-1.5 py-0.5 rounded border border-[#45475a] bg-[#1e1e2e]
                        text-[#585b70] text-[10px] font-bold">⌘</kbd>
            <kbd class="px-1.5 py-0.5 rounded border border-[#45475a] bg-[#1e1e2e]
                        text-[#585b70] text-[10px] font-bold">K</kbd>
        </div>
    </div>
</div>
