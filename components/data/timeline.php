<?php
$events = [
    ['date' => 'Jul 2024', 'title' => 'Started ui_shelf',       'body' => 'Initialized the PHP component browser project.', 'color' => '#cba6f7', 'done' => true],
    ['date' => 'Aug 2024', 'title' => 'Added 20+ components',   'body' => 'Buttons, cards, forms, navigation, data display.', 'color' => '#89b4fa', 'done' => true],
    ['date' => 'Sep 2024', 'title' => 'Public release',         'body' => 'Pushed to GitHub and announced on velynox.de.',   'color' => '#a6e3a1', 'done' => false],
    ['date' => 'Oct 2024', 'title' => 'Component search',       'body' => 'Full-text search across all registered components.', 'color' => '#f9e2af', 'done' => false],
];
?>

<div class="flex flex-col max-w-sm">
    <?php foreach ($events as $i => $ev): ?>
    <div class="flex gap-4">
        <!-- Spine -->
        <div class="flex flex-col items-center">
            <div class="w-3 h-3 rounded-full border-2 mt-0.5 shrink-0"
                 style="border-color:<?= $ev['color'] ?>;
                        background-color:<?= $ev['done'] ? $ev['color'] : '#1e1e2e' ?>">
            </div>
            <?php if ($i < count($events) - 1): ?>
                <div class="w-px flex-1 bg-[#313244] my-1"></div>
            <?php endif; ?>
        </div>

        <!-- Content -->
        <div class="pb-6 min-w-0">
            <p class="text-[#585b70] text-xs tracking-widest uppercase mb-0.5">
                <?= htmlspecialchars($ev['date']) ?>
            </p>
            <p class="text-[#cdd6f4] text-sm font-bold">
                <?= htmlspecialchars($ev['title']) ?>
            </p>
            <p class="text-[#a6adc8] text-xs leading-relaxed mt-0.5">
                <?= htmlspecialchars($ev['body']) ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
