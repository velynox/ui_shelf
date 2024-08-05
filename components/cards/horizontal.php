<div class="max-w-md flex flex-col gap-3">
    <?php
    $items = [
        ['icon_color' => '#cba6f7', 'title' => 'ui_shelf', 'sub' => 'PHP · TailwindCSS', 'meta' => 'Updated 2h ago'],
        ['icon_color' => '#89b4fa', 'title' => 'velynox.de', 'sub' => 'HTML · CSS', 'meta' => 'Updated yesterday'],
        ['icon_color' => '#a6e3a1', 'title' => 'deploy-scripts', 'sub' => 'Bash · Docker', 'meta' => 'Updated 3d ago'],
    ];
    foreach ($items as $item):
    ?>
    <div class="flex items-center gap-4 rounded-lg border border-[#313244]
                bg-[#181825] px-4 py-3 hover:border-[#45475a]
                transition-colors duration-150">
        <!-- Icon -->
        <div class="w-9 h-9 rounded-md border border-[#313244] bg-[#1e1e2e]
                    flex items-center justify-center shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                 style="color:<?= $item['icon_color'] ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0
                         0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0
                         00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0
                         002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0
                         00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
        </div>
        <!-- Text -->
        <div class="flex-1 min-w-0">
            <p class="text-[#cdd6f4] text-sm font-bold truncate"><?= htmlspecialchars($item['title']) ?></p>
            <p class="text-[#585b70] text-xs"><?= htmlspecialchars($item['sub']) ?></p>
        </div>
        <span class="text-[#585b70] text-xs shrink-0"><?= htmlspecialchars($item['meta']) ?></span>
    </div>
    <?php endforeach; ?>
</div>
