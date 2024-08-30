<?php
$features = [
    ['icon' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5', 'color' => '#cba6f7', 'title' => 'No build step',    'body' => 'TailwindCSS via Play CDN. Drop in and go.'],
    ['icon' => 'M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776', 'color' => '#89b4fa', 'title' => 'File-based',      'body' => 'Each component is a plain .php snippet file.'],
    ['icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'color' => '#a6e3a1', 'title' => 'No JS required', 'body' => 'Interactions use vanilla JS only where needed.'],
    ['icon' => 'M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z', 'color' => '#f9e2af', 'title' => 'Catppuccin Mocha','body' => 'Consistent dark palette across every component.'],
];
?>

<div class="grid grid-cols-2 gap-3 max-w-sm">
    <?php foreach ($features as $f): ?>
    <div class="rounded-lg border border-[#313244] bg-[#181825] p-4 flex flex-col gap-2
                hover:border-[#45475a] transition-colors duration-150">
        <div class="w-8 h-8 rounded-md flex items-center justify-center"
             style="background-color:<?= $f['color'] ?>18;border:1px solid <?= $f['color'] ?>33">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                 style="color:<?= $f['color'] ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="<?= htmlspecialchars($f['icon']) ?>"/>
            </svg>
        </div>
        <p class="text-[#cdd6f4] text-xs font-bold"><?= htmlspecialchars($f['title']) ?></p>
        <p class="text-[#585b70] text-xs leading-relaxed"><?= htmlspecialchars($f['body']) ?></p>
    </div>
    <?php endforeach; ?>
</div>
