<?php
/**
 * Contribution heatmap — 52 weeks × 7 days, rendered as an SVG grid.
 * Values are randomly seeded for demo purposes.
 */

$weeks   = 26; // half-year view
$days    = 7;
$cell    = 11; // cell size px
$gap     = 2;  // gap px
$step    = $cell + $gap;
$w       = $weeks * $step + 1;
$h       = $days  * $step + 20; // +20 for day labels

// Seed deterministic "activity" data
$data = [];
mt_srand(42);
for ($wk = 0; $wk < $weeks; $wk++) {
    for ($d = 0; $d < $days; $d++) {
        $data[$wk][$d] = mt_rand(0, 4); // 0 = none, 4 = max
    }
}

// Catppuccin Mocha intensity scale
$colors = ['#1e1e2e', '#313244', '#7c5fa8', '#a67dd4', '#cba6f7'];

// Month labels (approximate)
$month_labels = ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'];
$month_x      = [0, 4, 9, 13, 18, 22];

$cells = '';
for ($wk = 0; $wk < $weeks; $wk++) {
    for ($d = 0; $d < $days; $d++) {
        $x   = $wk * $step;
        $y   = $d  * $step + 16;
        $val = $data[$wk][$d];
        $col = $colors[$val];
        $cells .= sprintf(
            '<rect x="%d" y="%d" width="%d" height="%d" rx="2" fill="%s">
                <title>%d contributions</title>
             </rect>',
            $x, $y, $cell, $cell, $col, $val
        );
    }
}

$labels = '';
foreach ($month_labels as $i => $m) {
    $lx = $month_x[$i] * $step;
    $labels .= sprintf(
        '<text x="%d" y="10" font-size="9" fill="#585b70"
               font-family="JetBrains Mono, monospace">%s</text>',
        $lx, $m
    );
}
?>

<div class="flex flex-col gap-3">
    <div class="flex items-center justify-between max-w-fit">
        <p class="text-[#585b70] text-xs tracking-widest uppercase">Contributions</p>
    </div>

    <svg width="<?= $w ?>" height="<?= $h ?>"
         viewBox="0 0 <?= $w ?> <?= $h ?>"
         xmlns="http://www.w3.org/2000/svg">
        <?= $labels ?>
        <?= $cells ?>
    </svg>

    <!-- Legend -->
    <div class="flex items-center gap-1.5 text-xs text-[#585b70]">
        <span>Less</span>
        <?php foreach ($colors as $c): ?>
            <span class="w-2.5 h-2.5 rounded-sm"
                  style="background-color:<?= $c ?>;border:1px solid #313244"></span>
        <?php endforeach; ?>
        <span>More</span>
    </div>
</div>
