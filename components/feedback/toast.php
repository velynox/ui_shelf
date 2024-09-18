<?php
$toasts = [
    ['type' => 'success', 'title' => 'Saved',          'body' => 'Your changes have been saved.',       'color' => '#a6e3a1', 'icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
    ['type' => 'error',   'title' => 'Failed',          'body' => 'Could not connect to the server.',   'color' => '#f38ba8', 'icon' => 'M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
    ['type' => 'info',    'title' => 'Update available','body' => 'Refresh to load the latest version.','color' => '#89b4fa', 'icon' => 'M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z'],
];
?>

<!-- Toast stack — positioned relative for preview -->
<div class="relative h-40 max-w-xs">
    <div class="absolute bottom-0 right-0 flex flex-col gap-2 w-full">
        <?php foreach (array_reverse($toasts) as $i => $t): ?>
        <div class="flex items-start gap-3 rounded-lg border bg-[#181825] px-3 py-2.5
                    shadow-lg shadow-[#11111b]/50"
             style="border-color:<?= $t['color'] ?>33;
                    opacity:<?= $i === 0 ? '1' : ($i === 1 ? '0.7' : '0.4') ?>;
                    transform:scale(<?= $i === 0 ? '1' : ($i === 1 ? '0.97' : '0.94') ?>);
                    transform-origin:bottom center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0 mt-0.5"
                 style="color:<?= $t['color'] ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="<?= htmlspecialchars($t['icon']) ?>"/>
            </svg>
            <div class="flex-1 min-w-0">
                <p class="text-[#cdd6f4] text-xs font-bold"><?= htmlspecialchars($t['title']) ?></p>
                <p class="text-[#585b70] text-xs mt-0.5"><?= htmlspecialchars($t['body']) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
