<!-- Modal dialog — shown as a static mockup -->
<div class="relative max-w-sm">
    <!-- Backdrop hint -->
    <div class="absolute inset-0 -m-6 bg-[#11111b]/60 rounded-lg"></div>

    <!-- Dialog -->
    <div class="relative rounded-lg border border-[#313244] bg-[#181825]
                shadow-2xl shadow-[#11111b]/80 overflow-hidden">
        <!-- Header -->
        <div class="flex items-center justify-between px-5 py-4 border-b border-[#313244]">
            <h2 class="text-[#cdd6f4] font-bold text-sm">Create new component</h2>
            <button type="button" aria-label="Close"
                    class="text-[#585b70] hover:text-[#cdd6f4] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Body -->
        <div class="px-5 py-4 flex flex-col gap-4">
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
                    Slug
                </label>
                <input type="text" value="button-new"
                       class="w-full rounded-md border border-[#313244] bg-[#1e1e2e]
                              px-3 py-2 text-sm text-[#cdd6f4]
                              focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                              focus:border-transparent transition duration-150" />
            </div>
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
                    Category
                </label>
                <input type="text" value="Buttons"
                       class="w-full rounded-md border border-[#313244] bg-[#1e1e2e]
                              px-3 py-2 text-sm text-[#cdd6f4]
                              focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                              focus:border-transparent transition duration-150" />
            </div>
        </div>

        <!-- Footer -->
        <div class="flex justify-end gap-2 px-5 py-4 border-t border-[#313244]">
            <button type="button"
                    class="px-4 py-2 rounded-md border border-[#313244] text-sm
                           font-bold text-[#a6adc8] hover:text-[#cdd6f4]
                           hover:border-[#45475a] transition-colors duration-150">
                Cancel
            </button>
            <button type="button"
                    class="px-4 py-2 rounded-md bg-[#cba6f7] text-[#1e1e2e] text-sm
                           font-bold hover:bg-[#b48ef0] transition-colors duration-150">
                Create
            </button>
        </div>
    </div>
</div>
