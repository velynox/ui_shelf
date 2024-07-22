<div class="flex flex-wrap gap-3 items-center">
    <!-- Loading state — spinner inline SVG -->
    <button type="button" disabled
            class="inline-flex items-center gap-2 px-4 py-2 rounded-md font-bold
                   text-sm tracking-wide bg-[#cba6f7]/50 text-[#1e1e2e]/70
                   cursor-not-allowed">
        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10"
                    stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
        Saving...
    </button>

    <!-- Loading ghost -->
    <button type="button" disabled
            class="inline-flex items-center gap-2 px-4 py-2 rounded-md font-bold
                   text-sm tracking-wide border border-[#313244]
                   text-[#585b70] cursor-not-allowed">
        <svg class="w-4 h-4 animate-spin" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10"
                    stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
        </svg>
        Loading
    </button>

    <!-- Ready state (for comparison) -->
    <button type="button"
            class="inline-flex items-center gap-2 px-4 py-2 rounded-md font-bold
                   text-sm tracking-wide bg-[#cba6f7] text-[#1e1e2e]
                   hover:bg-[#b48ef0] transition-colors duration-150
                   focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                   focus:ring-offset-2 focus:ring-offset-[#1e1e2e]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
        </svg>
        Save
    </button>
</div>
