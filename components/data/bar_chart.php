<?php
$data = [
    ['label' => 'Mon', 'value' => 42],
    ['label' => 'Tue', 'value' => 78],
    ['label' => 'Wed', 'value' => 55],
    ['label' => 'Thu', 'value' => 91],
    ['label' => 'Fri', 'value' => 67],
    ['label' => 'Sat', 'value' => 30],
    ['label' => 'Sun', 'value' => 14],
];

$max    = max(array_column($data, 'value'));
$w      = 280;
$h      = 100;
$pad    = 4;
$count  = count($data);
$bw     = floor(($w - $pad * ($count + 1)) / $count); // bar width
$accent = '#cba6f7';
$muted  = '#313244';
?>

<div class="flex flex-col gap-3 max-w-xs">
    <div class="flex items-center justify-between">
        <p class="text-[#585b70] text-xs tracking-widest uppercase">Commits / week</p>
        <p class="text-[#cdd6f4] text-xs font-bold">
            <?= array_sum(array_column($data, 'value')) ?> total
        </p>
    </div>

    <svg width="<?= $w ?>" height="<?= $h + 20 ?>"
         viewBox="0 0 <?= $w ?> <?= $h + 20 ?>"
         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <?php foreach ($data as $i => $bar):
            $barH  = round(($bar['value'] / $max) * $h);
            $x     = $pad + $i * ($bw + $pad);
            $y     = $h - $barH;
            $today = ($i === 3); // Thursday highlighted
        ?>
        <!-- Bar -->
        <rect x="<?= $x ?>" y="<?= $y ?>" width="<?= $bw ?>" height="<?= $barH ?>"
              rx="3" fill="<?= $today ? $accent : $muted ?>"/>
        <!-- Label -->
        <text x="<?= $x + $bw / 2 ?>" y="<?= $h + 14 ?>"
              text-anchor="middle" font-size="9"
              fill="<?= $today ? $accent : '#585b70' ?>"
              font-family="JetBrains Mono, monospace">
            <?= htmlspecialchars($bar['label']) ?>
        </text>
        <?php endforeach; ?>
    </svg>
</div>
