<?php
$items = [
    ['q' => 'Do I need a build step?',         'a' => 'No. TailwindCSS is loaded via the Play CDN. Drop the project into any PHP server and it works.'],
    ['q' => 'Can I use these in Laravel?',     'a' => 'Yes. The snippets are plain HTML/PHP — paste them into any Blade template or PHP view.'],
    ['q' => 'Is there a dark mode toggle?',    'a' => 'The entire UI is Catppuccin Mocha by design. A light mode is not planned.'],
    ['q' => 'How do I add a new component?',   'a' => 'Create a .php file under components/, then register it in config/components.php with a unique slug.'],
];
?>

<div class="max-w-sm flex flex-col divide-y divide-[#313244] border border-[#313244]
            rounded-lg overflow-hidden">
    <?php foreach ($items as $i => $item): ?>
    <details class="group bg-[#181825]">
        <summary class="flex items-center justify-between gap-3 px-4 py-3
                        cursor-pointer list-none select-none
                        hover:bg-[#313244]/40 transition-colors duration-100">
            <span class="text-[#cdd6f4] text-sm font-bold">
                <?= htmlspecialchars($item['q']) ?>
            </span>
            <!-- Chevron rotates when open -->
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4 text-[#585b70] shrink-0 transition-transform duration-200
                        group-open:rotate-180"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </summary>
        <div class="px-4 pb-4 pt-1 text-[#a6adc8] text-sm leading-relaxed
                    border-t border-[#313244]">
            <?= htmlspecialchars($item['a']) ?>
        </div>
    </details>
    <?php endforeach; ?>
</div>
