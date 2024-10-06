<div class="flex flex-col gap-5">
    <!-- Segmented control -->
    <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            View
        </label>
        <div class="inline-flex rounded-md border border-[#313244] bg-[#181825] p-0.5 gap-0.5">
            <?php
            $opts = ['Preview', 'Source', 'Docs'];
            foreach ($opts as $i => $opt):
                $active = $i === 0;
            ?>
            <button type="button"
                    class="px-4 py-1.5 rounded text-xs font-bold tracking-wide
                           transition-colors duration-150
                           <?= $active
                               ? 'bg-[#313244] text-[#cdd6f4] shadow-sm'
                               : 'text-[#585b70] hover:text-[#a6adc8]' ?>">
                <?= htmlspecialchars($opt) ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Icon segmented control -->
    <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Layout
        </label>
        <div class="inline-flex rounded-md border border-[#313244] bg-[#181825] p-0.5 gap-0.5">
            <?php
            $icons = [
                ['label' => 'Grid',  'active' => true,  'path' => 'M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z'],
                ['label' => 'List',  'active' => false, 'path' => 'M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z'],
                ['label' => 'Table', 'active' => false, 'path' => 'M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z'],
            ];
            foreach ($icons as $icon):
            ?>
            <button type="button"
                    aria-label="<?= htmlspecialchars($icon['label']) ?>"
                    class="w-8 h-8 rounded flex items-center justify-center
                           transition-colors duration-150
                           <?= $icon['active']
                               ? 'bg-[#313244] text-[#cdd6f4]'
                               : 'text-[#585b70] hover:text-[#a6adc8]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="<?= htmlspecialchars($icon['path']) ?>"/>
                </svg>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</div>
