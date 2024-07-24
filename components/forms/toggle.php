<div class="flex flex-col gap-4 max-w-xs">
    <!-- Toggle ON -->
    <label class="flex items-center justify-between gap-4 cursor-pointer group">
        <div class="flex flex-col">
            <span class="text-sm text-[#cdd6f4] font-bold">Dark mode</span>
            <span class="text-xs text-[#a6adc8]">Use the Catppuccin Mocha theme.</span>
        </div>
        <button type="button"
                role="switch"
                aria-checked="true"
                class="relative inline-flex w-10 h-5 rounded-full
                       bg-[#cba6f7] transition-colors duration-200
                       focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                       focus:ring-offset-2 focus:ring-offset-[#1e1e2e] shrink-0">
            <span class="absolute top-0.5 left-[1.375rem] w-4 h-4 rounded-full
                         bg-[#1e1e2e] shadow transition-transform duration-200"></span>
        </button>
    </label>

    <!-- Toggle OFF -->
    <label class="flex items-center justify-between gap-4 cursor-pointer group">
        <div class="flex flex-col">
            <span class="text-sm text-[#cdd6f4] font-bold">Notifications</span>
            <span class="text-xs text-[#a6adc8]">Receive email digests.</span>
        </div>
        <button type="button"
                role="switch"
                aria-checked="false"
                class="relative inline-flex w-10 h-5 rounded-full
                       bg-[#313244] transition-colors duration-200
                       focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                       focus:ring-offset-2 focus:ring-offset-[#1e1e2e] shrink-0">
            <span class="absolute top-0.5 left-0.5 w-4 h-4 rounded-full
                         bg-[#585b70] shadow transition-transform duration-200"></span>
        </button>
    </label>

    <!-- Toggle disabled -->
    <label class="flex items-center justify-between gap-4 cursor-not-allowed opacity-50">
        <div class="flex flex-col">
            <span class="text-sm text-[#cdd6f4] font-bold">Beta features</span>
            <span class="text-xs text-[#a6adc8]">Not available on your plan.</span>
        </div>
        <button type="button"
                role="switch"
                aria-checked="false"
                disabled
                class="relative inline-flex w-10 h-5 rounded-full
                       bg-[#313244] shrink-0 cursor-not-allowed">
            <span class="absolute top-0.5 left-0.5 w-4 h-4 rounded-full
                         bg-[#45475a]"></span>
        </button>
    </label>
</div>
