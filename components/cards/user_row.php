<?php
$users = [
    ['initials' => 'VX', 'name' => 'velynox',   'role' => 'Owner',       'color' => '#cba6f7', 'online' => true],
    ['initials' => 'AK', 'name' => 'arch_kid',  'role' => 'Contributor', 'color' => '#89b4fa', 'online' => true],
    ['initials' => 'MR', 'name' => 'mocha_dev', 'role' => 'Viewer',      'color' => '#a6e3a1', 'online' => false],
];
?>

<div class="max-w-xs flex flex-col gap-1">
    <?php foreach ($users as $u): ?>
    <div class="flex items-center gap-3 px-3 py-2.5 rounded-md
                hover:bg-[#313244]/40 transition-colors duration-100">
        <!-- Avatar -->
        <div class="relative shrink-0">
            <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-bold"
                 style="background-color:<?= $u['color'] ?>18;
                        border:1px solid <?= $u['color'] ?>33;
                        color:<?= $u['color'] ?>">
                <?= htmlspecialchars($u['initials']) ?>
            </div>
            <?php if ($u['online']): ?>
                <span class="absolute -bottom-0.5 -right-0.5 w-2.5 h-2.5 rounded-full
                             bg-[#a6e3a1] border-2 border-[#1e1e2e]"></span>
            <?php endif; ?>
        </div>
        <!-- Info -->
        <div class="flex-1 min-w-0">
            <p class="text-[#cdd6f4] text-sm font-bold truncate">
                <?= htmlspecialchars($u['name']) ?>
            </p>
        </div>
        <!-- Role badge -->
        <span class="text-[10px] font-bold uppercase tracking-widest
                     text-[#585b70] shrink-0">
            <?= htmlspecialchars($u['role']) ?>
        </span>
    </div>
    <?php endforeach; ?>
</div>
