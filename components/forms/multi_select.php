<div class="flex flex-col gap-1.5 max-w-sm" id="multi-select-root">
    <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
        Technologies
    </label>

    <!-- Tag input area -->
    <div class="min-h-[42px] flex flex-wrap gap-1.5 rounded-md border border-[#313244]
                bg-[#181825] px-2 py-1.5 cursor-text
                focus-within:ring-2 focus-within:ring-[#cba6f7]
                focus-within:border-transparent transition duration-150"
         id="tag-container">
        <!-- Pre-selected tags -->
        <?php foreach (['PHP', 'TailwindCSS', 'SQL'] as $t): ?>
        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md
                     bg-[#cba6f7]/15 border border-[#cba6f7]/30
                     text-[#cba6f7] text-xs font-bold">
            <?= htmlspecialchars($t) ?>
            <button type="button" aria-label="Remove <?= htmlspecialchars($t) ?>"
                    class="text-[#cba6f7]/60 hover:text-[#cba6f7] transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </span>
        <?php endforeach; ?>
        <input type="text" placeholder="Add more..."
               class="flex-1 min-w-[80px] bg-transparent text-sm text-[#cdd6f4]
                      placeholder-[#585b70] outline-none py-0.5" />
    </div>

    <!-- Dropdown suggestions -->
    <div class="rounded-md border border-[#313244] bg-[#181825] py-1 shadow-lg
                shadow-[#11111b]/50">
        <?php foreach (['Alpine.js', 'Docker', 'Python', 'Redis', 'Bash'] as $opt): ?>
        <div class="flex items-center gap-2 px-3 py-2 text-sm text-[#a6adc8]
                    hover:bg-[#313244]/60 hover:text-[#cdd6f4]
                    transition-colors duration-100 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#45475a]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
            </svg>
            <?= htmlspecialchars($opt) ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
