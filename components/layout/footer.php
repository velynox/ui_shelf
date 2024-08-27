<footer class="max-w-lg border-t border-[#313244] pt-6 flex flex-col gap-5">
    <!-- Top row -->
    <div class="flex items-start justify-between gap-6">
        <!-- Brand -->
        <div class="flex flex-col gap-1.5">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#cba6f7]"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25
                             2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25
                             2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0
                             01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0
                             012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118
                             10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0
                             012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118
                             20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                </svg>
                <span class="text-[#cdd6f4] font-bold text-sm">ui_shelf</span>
            </div>
            <p class="text-[#585b70] text-xs">PHP component browser by velynox.</p>
        </div>

        <!-- Links -->
        <div class="flex gap-8 text-xs">
            <div class="flex flex-col gap-2">
                <p class="text-[#585b70] font-bold tracking-widest uppercase">Project</p>
                <a href="#" class="text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">Components</a>
                <a href="#" class="text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">Changelog</a>
            </div>
            <div class="flex flex-col gap-2">
                <p class="text-[#585b70] font-bold tracking-widest uppercase">Links</p>
                <a href="#" class="text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">GitHub</a>
                <a href="#" class="text-[#a6adc8] hover:text-[#cdd6f4] transition-colors">velynox.de</a>
            </div>
        </div>
    </div>

    <!-- Bottom row -->
    <div class="flex items-center justify-between border-t border-[#313244] pt-4">
        <p class="text-[#585b70] text-xs">
            &copy; <?= date('Y') ?> velynox. MIT License.
        </p>
        <p class="text-[#585b70] text-xs">Built with PHP &amp; TailwindCSS.</p>
    </div>
</footer>
