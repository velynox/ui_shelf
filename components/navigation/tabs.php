<div class="max-w-md">
    <!-- Tab list -->
    <div class="flex border-b border-[#313244]" role="tablist">
        <button role="tab" aria-selected="true" aria-controls="tab-panel-overview"
                class="px-4 py-2.5 text-sm font-bold tracking-wide
                       text-[#cba6f7] border-b-2 border-[#cba6f7]
                       transition-colors duration-100 -mb-px">
            Overview
        </button>
        <button role="tab" aria-selected="false" aria-controls="tab-panel-files"
                class="px-4 py-2.5 text-sm font-bold tracking-wide
                       text-[#a6adc8] border-b-2 border-transparent
                       hover:text-[#cdd6f4] transition-colors duration-100 -mb-px">
            Files
        </button>
        <button role="tab" aria-selected="false" aria-controls="tab-panel-commits"
                class="px-4 py-2.5 text-sm font-bold tracking-wide
                       text-[#a6adc8] border-b-2 border-transparent
                       hover:text-[#cdd6f4] transition-colors duration-100 -mb-px">
            Commits
        </button>
        <button role="tab" aria-selected="false" aria-controls="tab-panel-settings"
                class="px-4 py-2.5 text-sm font-bold tracking-wide
                       text-[#a6adc8] border-b-2 border-transparent
                       hover:text-[#cdd6f4] transition-colors duration-100 -mb-px">
            Settings
        </button>
    </div>

    <!-- Active panel -->
    <div id="tab-panel-overview" role="tabpanel"
         class="pt-4 text-[#a6adc8] text-sm leading-relaxed">
        This is the overview panel. Switch tabs to see the inactive state above.
        In a real implementation, JS would toggle <code class="text-[#cba6f7]">aria-selected</code>
        and show/hide panels.
    </div>
</div>
