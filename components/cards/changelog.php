<?php
$entries = [
    [
        'version' => 'v2.2.0',
        'date'    => '2024-09-24',
        'type'    => 'minor',
        'color'   => '#cba6f7',
        'changes' => [
            ['kind' => 'feat',  'text' => 'Add donut chart and bar chart components'],
            ['kind' => 'feat',  'text' => 'Add accordion using native details/summary'],
            ['kind' => 'feat',  'text' => 'Add skeleton loader and spinner variants'],
        ],
    ],
    [
        'version' => 'v2.1.0',
        'date'    => '2024-08-22',
        'type'    => 'minor',
        'color'   => '#89b4fa',
        'changes' => [
            ['kind' => 'feat',  'text' => 'Add profile avatar card with CRT overlay'],
            ['kind' => 'feat',  'text' => 'Add tech stack section component'],
            ['kind' => 'fix',   'text' => 'Fix sidebar active state on mobile'],
        ],
    ],
    [
        'version' => 'v2.0.0',
        'date'    => '2024-07-30',
        'type'    => 'major',
        'color'   => '#f9e2af',
        'changes' => [
            ['kind' => 'feat',  'text' => 'Initial public release — 12 components'],
            ['kind' => 'feat',  'text' => 'Central PHP registry with slug routing'],
            ['kind' => 'chore', 'text' => 'Add .gitignore and project structure'],
        ],
    ],
];

$kind_colors = ['feat' => '#a6e3a1', 'fix' => '#f9e2af', 'chore' => '#585b70'];
?>

<div class="max-w-sm flex flex-col gap-6">
    <?php foreach ($entries as $entry): ?>
    <div class="flex gap-4">
        <!-- Spine dot -->
        <div class="flex flex-col items-center pt-0.5">
            <div class="w-2.5 h-2.5 rounded-full shrink-0"
                 style="background-color:<?= $entry['color'] ?>"></div>
            <div class="w-px flex-1 mt-1.5 bg-[#313244]"></div>
        </div>

        <div class="flex-1 pb-4">
            <!-- Header -->
            <div class="flex items-center gap-2 mb-2">
                <span class="font-bold text-sm" style="color:<?= $entry['color'] ?>">
                    <?= htmlspecialchars($entry['version']) ?>
                </span>
                <span class="text-[#45475a] text-xs">—</span>
                <span class="text-[#585b70] text-xs"><?= $entry['date'] ?></span>
            </div>

            <!-- Changes -->
            <ul class="flex flex-col gap-1.5">
                <?php foreach ($entry['changes'] as $c):
                    $kc = $kind_colors[$c['kind']] ?? '#585b70';
                ?>
                <li class="flex items-baseline gap-2 text-xs">
                    <span class="font-bold shrink-0 w-8 text-right"
                          style="color:<?= $kc ?>"><?= $c['kind'] ?></span>
                    <span class="text-[#a6adc8]"><?= htmlspecialchars($c['text']) ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>
</div>
