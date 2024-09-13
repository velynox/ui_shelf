<!-- Dropdown menu — shown open for preview purposes -->
<div class="relative inline-block">
    <!-- Trigger button -->
    <button type="button"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-md border
                   border-[#313244] bg-[#181825] text-sm text-[#a6adc8]
                   hover:text-[#cdd6f4] hover:border-[#45475a]
                   transition-colors duration-150">
        Options
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <!-- Menu (always visible in preview) -->
    <div class="mt-1.5 w-44 rounded-lg border border-[#313244] bg-[#181825]
                shadow-xl shadow-[#11111b]/50 py-1 flex flex-col">
        <?php
        $items = [
            ['icon' => 'M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10', 'label' => 'Edit',        'color' => '#a6adc8'],
            ['icon' => 'M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 4.625l-7.5-7.5', 'label' => 'Duplicate',   'color' => '#a6adc8'],
            null, // divider
            ['icon' => 'M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z', 'label' => 'Share',       'color' => '#a6adc8'],
            null,
            ['icon' => 'M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0', 'label' => 'Delete',      'color' => '#f38ba8'],
        ];
        foreach ($items as $item):
            if ($item === null): ?>
                <div class="my-1 border-t border-[#313244]"></div>
            <?php continue; endif; ?>
            <a href="#"
               class="flex items-center gap-2.5 px-3 py-2 text-xs
                      transition-colors duration-100
                      <?= $item['color'] === '#f38ba8'
                          ? 'text-[#f38ba8] hover:bg-[#f38ba8]/10'
                          : 'text-[#a6adc8] hover:bg-[#313244]/60 hover:text-[#cdd6f4]' ?>">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="<?= htmlspecialchars($item['icon']) ?>"/>
                </svg>
                <?= htmlspecialchars($item['label']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
