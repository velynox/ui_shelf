<!-- Tooltip — pure CSS, no JS -->
<div class="flex flex-wrap gap-8 items-center pt-6">
    <!-- Top tooltip -->
    <div class="relative group inline-flex">
        <button type="button"
                class="px-3 py-1.5 rounded-md border border-[#313244] text-sm
                       text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">
            Hover me (top)
        </button>
        <div role="tooltip"
             class="pointer-events-none absolute bottom-full left-1/2 -translate-x-1/2
                    mb-2 px-2.5 py-1.5 rounded-md bg-[#313244] border border-[#45475a]
                    text-[#cdd6f4] text-xs whitespace-nowrap shadow-lg
                    opacity-0 group-hover:opacity-100 transition-opacity duration-150
                    z-10">
            This is a tooltip
            <!-- Arrow -->
            <span class="absolute top-full left-1/2 -translate-x-1/2
                         border-4 border-transparent border-t-[#45475a]"></span>
        </div>
    </div>

    <!-- Right tooltip -->
    <div class="relative group inline-flex">
        <button type="button"
                class="px-3 py-1.5 rounded-md border border-[#313244] text-sm
                       text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">
            Hover me (right)
        </button>
        <div role="tooltip"
             class="pointer-events-none absolute left-full top-1/2 -translate-y-1/2
                    ml-2 px-2.5 py-1.5 rounded-md bg-[#313244] border border-[#45475a]
                    text-[#cdd6f4] text-xs whitespace-nowrap shadow-lg
                    opacity-0 group-hover:opacity-100 transition-opacity duration-150
                    z-10">
            Opens to the right
            <span class="absolute right-full top-1/2 -translate-y-1/2
                         border-4 border-transparent border-r-[#45475a]"></span>
        </div>
    </div>
</div>
