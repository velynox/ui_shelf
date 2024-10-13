<!-- Command palette modal mockup -->
<div class="relative max-w-md">
    <!-- Backdrop hint -->
    <div class="absolute inset-0 -m-8 bg-[#11111b]/70 rounded-lg"></div>

    <!-- Palette -->
    <div class="relative rounded-xl border border-[#313244] bg-[#181825]
                shadow-2xl shadow-[#11111b]/80 overflow-hidden">
        <!-- Search input -->
        <div class="relative border-b border-[#313244]">
            <div class="pointer-events-none absolute inset-y-0 left-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#585b70]"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0
                             0010.607 10.607z"/>
                </svg>
            </div>
            <input type="search" placeholder="Search components..."
                   class="w-full bg-transparent pl-11 pr-4 py-3.5 text-sm text-[#cdd6f4]
                          placeholder-[#585b70] focus:outline-none" />
        </div>

        <!-- Results -->
        <div class="max-h-64 overflow-y-auto py-1.5">
            <?php
            $results = [
                ['cat' => 'Buttons',    'name' => 'Primary Button',    'icon' => 'M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z', 'active' => true],
                ['cat' => 'Cards',      'name' => 'Profile Card',      'icon' => 'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z', 'active' => false],
                ['cat' => 'Data',       'name' => 'Sparkline',         'icon' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z', 'active' => false],
                ['cat' => 'Forms',      'name' => 'Toggle Switch',     'icon' => 'M5.636 5.636a9 9 0 1012.728 0M12 3v9', 'active' => false],
            ];
            foreach ($results as $r):
                $cls = $r['active'] ? 'bg-[#313244]' : 'hover:bg-[#313244]/60';
            ?>
            <div class="flex items-center gap-3 px-3 py-2 mx-1.5 rounded-md
                        <?= $cls ?> transition-colors duration-100 cursor-pointer">
                <div class="w-7 h-7 rounded-md bg-[#313244] border border-[#45475a]
                            flex items-center justify-center shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#a6adc8]"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="<?= htmlspecialchars($r['icon']) ?>"/>
                    </svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-[#cdd6f4] text-sm truncate"><?= htmlspecialchars($r['name']) ?></p>
                    <p class="text-[#585b70] text-xs"><?= htmlspecialchars($r['cat']) ?></p>
                </div>
                <?php if ($r['active']): ?>
                <kbd class="shrink-0 px-1.5 py-0.5 rounded border border-[#45475a]
                            bg-[#1e1e2e] text-[#585b70] text-[10px] font-bold">
                    Enter
                </kbd>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Footer hint -->
        <div class="flex items-center justify-between px-4 py-2.5 border-t border-[#313244]
                    text-[10px] text-[#585b70]">
            <div class="flex items-center gap-2">
                <kbd class="px-1.5 py-0.5 rounded border border-[#45475a] bg-[#1e1e2e] font-bold">↑↓</kbd>
                <span>Navigate</span>
            </div>
            <div class="flex items-center gap-2">
                <kbd class="px-1.5 py-0.5 rounded border border-[#45475a] bg-[#1e1e2e] font-bold">Esc</kbd>
                <span>Close</span>
            </div>
        </div>
    </div>
</div>
