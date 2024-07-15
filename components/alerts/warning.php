<div class="max-w-lg" x-data="{ visible: true }" x-show="visible">
    <div class="flex items-start gap-3 rounded-lg border border-[#f9e2af]/30
                bg-[#f9e2af]/5 px-4 py-3">
        <!-- Icon -->
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-[#f9e2af] shrink-0 mt-0.5"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948
                     3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949
                     3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
        </svg>

        <!-- Content -->
        <div class="flex-1 min-w-0">
            <p class="text-[#f9e2af] text-sm font-bold tracking-wide">Heads up</p>
            <p class="text-[#a6adc8] text-sm leading-relaxed mt-0.5">
                This action cannot be undone. Make sure you have a backup before
                proceeding.
            </p>
        </div>

        <!-- Dismiss button -->
        <button
            type="button"
            onclick="this.closest('[x-data]') ? null : this.closest('.max-w-lg').remove()"
            class="text-[#585b70] hover:text-[#f9e2af] transition-colors duration-150
                   shrink-0 mt-0.5"
            aria-label="Dismiss alert"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
