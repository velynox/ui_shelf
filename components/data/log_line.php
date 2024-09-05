<?php
$logs = [
    ['level' => 'INFO',  'time' => '08:14:02', 'msg' => 'Server started on port 8000',          'color' => '#89b4fa'],
    ['level' => 'INFO',  'time' => '08:14:03', 'msg' => 'Loaded 47 components from registry',   'color' => '#89b4fa'],
    ['level' => 'WARN',  'time' => '08:14:11', 'msg' => 'Component file missing: card-draft.php','color' => '#f9e2af'],
    ['level' => 'INFO',  'time' => '08:15:44', 'msg' => 'GET /?c=data-sparkline 200 12ms',       'color' => '#89b4fa'],
    ['level' => 'ERROR', 'time' => '08:16:02', 'msg' => 'Undefined variable $active in component.php:14','color' => '#f38ba8'],
    ['level' => 'INFO',  'time' => '08:16:10', 'msg' => 'GET /?c=button-primary 200 8ms',        'color' => '#89b4fa'],
];
?>

<div class="max-w-lg rounded-lg border border-[#313244] bg-[#11111b] overflow-hidden">
    <div class="flex items-center justify-between px-4 py-2 bg-[#181825] border-b border-[#313244]">
        <p class="text-[#a6adc8] text-xs font-bold">Application log</p>
        <span class="text-[#585b70] text-[10px]">tail -f app.log</span>
    </div>
    <div class="p-3 flex flex-col gap-0.5 font-mono text-xs">
        <?php foreach ($logs as $log): ?>
        <div class="flex items-baseline gap-2 leading-relaxed">
            <span class="text-[#45475a] shrink-0"><?= $log['time'] ?></span>
            <span class="font-bold w-10 shrink-0 text-right"
                  style="color:<?= $log['color'] ?>">
                <?= $log['level'] ?>
            </span>
            <span class="text-[#a6adc8]"><?= htmlspecialchars($log['msg']) ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
