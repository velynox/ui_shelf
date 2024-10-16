<?php
/**
 * Compact contribution graph — 12 weeks × 7 days.
 * Mimics the GitHub profile contribution widget.
 */

$weeks = 12;
$days  = 7;
$cell  = 10;
$gap   = 2;
$step  = $cell + $gap;

mt_srand(99);
$data = [];
for ($w = 0; $w < $weeks; $w++) {
    for ($d = 0; $d < $days; $d++) {
        // Simulate a realistic pattern: more activity on weekdays
        $base = ($d >= 1 && $d <= 5) ? mt_rand(0, 4) : mt_rand(0, 1);
        $data[$w][$d] = $base;
    }
}

$colors = ['#1e1e2e', '#313244', '#7c5fa8', '#a67dd4', '#cba6f7'];
$total  = array_sum(array_map('array_sum', $data));

$cells = '';
for ($w = 0; $w < $weeks; $w++) {
    for ($d = 0; $d < $days; $d++) {
        $x   = $w * $step;
        $y   = $d * $step;
        $col = $colors[$data[$w][$d]];
        $cells .= sprintf(
            '<rect x="%d" y="%d" width="%d" height="%d" rx="2" fill="%s"/>',
            $x, $y, $cell, $cell, $col
        );
    }
}

$w_px = $weeks * $step - $gap;
$h_px = $days  * $step - $gap;
?>

<div class="inline-flex flex-col gap-2 rounded-lg border border-[#313244]
            bg-[#181825] px-4 py-3">
    <div class="flex items-center justify-between gap-8">
        <p class="text-[#cdd6f4] text-xs font-bold">
            <?= $total ?> contributions
        </p>
        <p class="text-[#585b70] text-xs">last 12 weeks</p>
    </div>

    <svg width="<?= $w_px ?>" height="<?= $h_px ?>"
         viewBox="0 0 <?= $w_px ?> <?= $h_px ?>"
         xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <?= $cells ?>
    </svg>

    <div class="flex items-center gap-1.5 text-[10px] text-[#585b70]">
        <span>Less</span>
        <?php foreach ($colors as $c): ?>
            <span class="w-2.5 h-2.5 rounded-sm"
                  style="background-color:<?= $c ?>;border:1px solid #313244"></span>
        <?php endforeach; ?>
        <span>More</span>
    </div>
</div>
