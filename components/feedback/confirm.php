<!-- Confirm / destructive dialog -->
<div class="max-w-xs rounded-lg border border-[#f38ba8]/30 bg-[#181825]
            shadow-xl shadow-[#11111b]/60 overflow-hidden">
    <!-- Icon + heading -->
    <div class="px-5 pt-5 pb-4 flex flex-col items-center gap-3 text-center">
        <div class="w-12 h-12 rounded-full bg-[#f38ba8]/10 border border-[#f38ba8]/30
                    flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#f38ba8]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107
                         1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244
                         2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456
                         0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114
                         1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18
                         -.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037
                         -2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
            </svg>
        </div>
        <div>
            <h3 class="text-[#cdd6f4] font-bold text-sm">Delete component</h3>
            <p class="text-[#a6adc8] text-xs leading-relaxed mt-1">
                This will permanently remove <span class="text-[#cdd6f4] font-bold">button-primary</span>
                from the registry. This action cannot be undone.
            </p>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex gap-2 px-5 pb-5">
        <button type="button"
                class="flex-1 py-2 rounded-md border border-[#313244] text-sm
                       font-bold text-[#a6adc8] hover:text-[#cdd6f4]
                       hover:border-[#45475a] transition-colors duration-150">
            Cancel
        </button>
        <button type="button"
                class="flex-1 py-2 rounded-md bg-[#f38ba8] text-[#1e1e2e] text-sm
                       font-bold hover:bg-[#e87090] transition-colors duration-150">
            Delete
        </button>
    </div>
</div>
