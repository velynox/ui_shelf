<?php
$stats = [
    ['label' => 'Page views',   'value' => '24,891', 'diff' => '+12.4%', 'up' => true],
    ['label' => 'Unique visits','value' => '8,302',  'diff' => '+5.1%',  'up' => true],
    ['label' => 'Bounce rate',  'value' => '38.2%',  'diff' => '-2.3%',  'up' => false],
    ['label' => 'Avg. session', 'value' => '2m 41s', 'diff' => '+0.8%',  'up' => true],
];
?>

<div class="grid grid-cols-2 gap-3 max-w-sm">
    <?php foreach ($stats as $s): ?>
    <div class="rounded-lg border border-[#313244] bg-[#181825] px-4 py-3">
        <p class="text-[#585b70] text-xs tracking-widest uppercase">
            <?= htmlspecialchars($s['label']) ?>
        </p>
        <p class="text-[#cdd6f4] font-bold text-xl mt-1">
            <?= htmlspecialchars($s['value']) ?>
        </p>
        <div class="flex items-center gap-1 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-3 h-3 <?= $s['up'] ? 'text-[#a6e3a1]' : 'text-[#f38ba8]' ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="<?= $s['up'] ? 'M4.5 15.75l7.5-7.5 7.5 7.5' : 'M19.5 8.25l-7.5 7.5-7.5-7.5' ?>"/>
            </svg>
            <span class="text-xs font-bold <?= $s['up'] ? 'text-[#a6e3a1]' : 'text-[#f38ba8]' ?>">
                <?= htmlspecialchars($s['diff']) ?>
            </span>
            <span class="text-[#585b70] text-xs">vs last week</span>
        </div>
    </div>
    <?php endforeach; ?>
</div>
