<?php
/**
 * Renders a donut chart as a pure inline SVG.
 *
 * @param array<array{label:string, value:int, color:string}> $segments
 * @param int $size   SVG size in px.
 * @param int $stroke Stroke width (controls donut thickness).
 */
function donut_chart(array $segments, int $size = 120, int $stroke = 22): string
{
    $total  = array_sum(array_column($segments, 'value'));
    $r      = ($size / 2) - ($stroke / 2);
    $cx     = $size / 2;
    $cy     = $size / 2;
    $circ   = 2 * M_PI * $r;
    $offset = 0;
    $paths  = '';

    foreach ($segments as $seg) {
        $pct   = $seg['value'] / $total;
        $dash  = round($pct * $circ, 3);
        $gap   = round($circ - $dash, 3);
        $rot   = round($offset * 360 - 90, 3);

        $paths .= sprintf(
            '<circle cx="%s" cy="%s" r="%s" fill="none" stroke="%s"
                     stroke-width="%s" stroke-dasharray="%s %s"
                     stroke-dashoffset="0"
                     transform="rotate(%s %s %s)"
                     stroke-linecap="butt"/>',
            $cx, $cy, $r, $seg['color'],
            $stroke, $dash, $gap,
            $rot, $cx, $cy
        );
        $offset += $pct;
    }

    return <<<SVG
<svg width="{$size}" height="{$size}" viewBox="0 0 {$size} {$size}"
     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <circle cx="{$cx}" cy="{$cy}" r="{$r}" fill="none"
            stroke="#313244" stroke-width="{$stroke}"/>
    {$paths}
</svg>
SVG;
}

$segments = [
    ['label' => 'PHP',        'value' => 62, 'color' => '#cba6f7'],
    ['label' => 'CSS',        'value' => 18, 'color' => '#89b4fa'],
    ['label' => 'JavaScript', 'value' => 12, 'color' => '#f9e2af'],
    ['label' => 'Other',      'value' => 8,  'color' => '#45475a'],
];
$total = array_sum(array_column($segments, 'value'));
?>

<div class="flex items-center gap-8">
    <!-- Chart -->
    <div class="relative shrink-0">
        <?= donut_chart($segments, 120, 22) ?>
        <!-- Center label -->
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <span class="text-[#cdd6f4] font-bold text-lg leading-none">62%</span>
            <span class="text-[#585b70] text-[10px] mt-0.5">PHP</span>
        </div>
    </div>

    <!-- Legend -->
    <div class="flex flex-col gap-2">
        <?php foreach ($segments as $seg): ?>
        <div class="flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-sm shrink-0"
                  style="background-color:<?= $seg['color'] ?>"></span>
            <span class="text-[#a6adc8] text-xs w-20"><?= htmlspecialchars($seg['label']) ?></span>
            <span class="text-[#cdd6f4] text-xs font-bold"><?= $seg['value'] ?>%</span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
