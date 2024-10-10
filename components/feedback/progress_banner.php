<?php
$steps = [
    ['label' => 'Cloning repo',      'state' => 'done'],
    ['label' => 'Installing deps',   'state' => 'done'],
    ['label' => 'Running migrations','state' => 'active'],
    ['label' => 'Starting server',   'state' => 'pending'],
];
$done  = count(array_filter($steps, fn($s) => $s['state'] === 'done'));
$total = count($steps);
$pct   = round($done / $total * 100);
?>

<div class="max-w-sm rounded-lg border border-[#313244] bg-[#181825] p-4 flex flex-col gap-3">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <p class="text-[#cdd6f4] text-sm font-bold">Deploying ui_shelf</p>
        <span class="text-[#cba6f7] text-xs font-bold"><?= $pct ?>%</span>
    </div>

    <!-- Progress bar -->
    <div class="w-full h-1.5 rounded-full bg-[#313244] overflow-hidden">
        <div class="h-full rounded-full bg-[#cba6f7] transition-all duration-500"
             style="width:<?= $pct ?>%"></div>
    </div>

    <!-- Steps -->
    <div class="flex flex-col gap-1.5">
        <?php foreach ($steps as $step): ?>
        <div class="flex items-center gap-2 text-xs">
            <?php if ($step['state'] === 'done'): ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#a6e3a1] shrink-0"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
                <span class="text-[#a6adc8]"><?= htmlspecialchars($step['label']) ?></span>
            <?php elseif ($step['state'] === 'active'): ?>
                <svg class="w-3.5 h-3.5 text-[#cba6f7] animate-spin shrink-0"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-20" cx="12" cy="12" r="10"
                            stroke="currentColor" stroke-width="4"/>
                    <path class="opacity-80" fill="currentColor"
                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                </svg>
                <span class="text-[#cba6f7] font-bold"><?= htmlspecialchars($step['label']) ?></span>
            <?php else: ?>
                <span class="w-3.5 h-3.5 rounded-full border border-[#45475a] shrink-0"></span>
                <span class="text-[#585b70]"><?= htmlspecialchars($step['label']) ?></span>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
