<!-- Command palette row — the kind you'd see in a ⌘K modal -->
<div class="max-w-md flex flex-col gap-0.5">
    <!-- Active row -->
    <div class="flex items-center gap-3 px-3 py-2.5 rounded-md bg-[#313244]">
        <div class="w-7 h-7 rounded-md bg-[#cba6f7]/15 border border-[#cba6f7]/30
                    flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#cba6f7]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
            </svg>
        </div>
        <div class="flex-1 min-w-0">
            <p class="text-[#cdd6f4] text-sm truncate">Open component browser</p>
            <p class="text-[#585b70] text-xs">ui_shelf</p>
        </div>
        <kbd class="shrink-0 px-1.5 py-0.5 rounded border border-[#45475a]
                    bg-[#1e1e2e] text-[#585b70] text-[10px] font-bold">
            Enter
        </kbd>
    </div>

    <!-- Inactive rows -->
    <?php
    $rows = [
        ['label' => 'New component',    'sub' => 'Create',   'icon' => 'M12 4.5v15m7.5-7.5h-15'],
        ['label' => 'Toggle dark mode', 'sub' => 'Settings', 'icon' => 'M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z'],
        ['label' => 'Copy source code', 'sub' => 'Actions',  'icon' => 'M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z'],
    ];
    foreach ($rows as $row):
    ?>
    <div class="flex items-center gap-3 px-3 py-2.5 rounded-md
                hover:bg-[#313244]/60 transition-colors duration-100 cursor-pointer">
        <div class="w-7 h-7 rounded-md bg-[#313244] border border-[#45475a]
                    flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#a6adc8]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="<?= htmlspecialchars($row['icon']) ?>" />
            </svg>
        </div>
        <div class="flex-1 min-w-0">
            <p class="text-[#a6adc8] text-sm truncate"><?= htmlspecialchars($row['label']) ?></p>
            <p class="text-[#585b70] text-xs"><?= htmlspecialchars($row['sub']) ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
