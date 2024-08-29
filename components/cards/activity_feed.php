<?php
$events = [
    ['actor' => 'velynox', 'action' => 'pushed 3 commits to',  'target' => 'master',          'time' => '5m ago',  'color' => '#cba6f7'],
    ['actor' => 'velynox', 'action' => 'opened issue',         'target' => '#44 — Dark mode', 'time' => '1h ago',  'color' => '#89b4fa'],
    ['actor' => 'velynox', 'action' => 'closed pull request',  'target' => '#41 — Tooltips',  'time' => '3h ago',  'color' => '#a6e3a1'],
    ['actor' => 'velynox', 'action' => 'created branch',       'target' => 'feat/accordion',  'time' => 'yesterday','color' => '#f9e2af'],
    ['actor' => 'velynox', 'action' => 'tagged release',       'target' => 'v2.0.0',          'time' => '2d ago',  'color' => '#f38ba8'],
];
?>

<div class="max-w-sm flex flex-col gap-0">
    <?php foreach ($events as $i => $ev): ?>
    <div class="flex gap-3 <?= $i < count($events) - 1 ? 'pb-4' : '' ?>">
        <!-- Spine -->
        <div class="flex flex-col items-center">
            <div class="w-2 h-2 rounded-full mt-1.5 shrink-0"
                 style="background-color:<?= $ev['color'] ?>"></div>
            <?php if ($i < count($events) - 1): ?>
                <div class="w-px flex-1 bg-[#313244] mt-1"></div>
            <?php endif; ?>
        </div>
        <!-- Content -->
        <div class="flex-1 min-w-0 pb-0.5">
            <p class="text-xs text-[#a6adc8] leading-relaxed">
                <span class="text-[#cdd6f4] font-bold"><?= htmlspecialchars($ev['actor']) ?></span>
                <?= htmlspecialchars($ev['action']) ?>
                <span style="color:<?= $ev['color'] ?>" class="font-bold">
                    <?= htmlspecialchars($ev['target']) ?>
                </span>
            </p>
            <p class="text-[10px] text-[#45475a] mt-0.5"><?= $ev['time'] ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
