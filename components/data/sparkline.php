<?php
/**
 * Renders a sparkline as a pure inline SVG polyline.
 * Data points are normalized to fit the SVG viewport.
 *
 * @param array<int|float> $data   Raw values.
 * @param int              $w      SVG width in px.
 * @param int              $h      SVG height in px.
 * @param string           $color  Stroke color (hex).
 * @return string                  SVG markup.
 */
function sparkline(array $data, int $w, int $h, string $color): string
{
    $min   = min($data);
    $max   = max($data);
    $range = $max - $min ?: 1;
    $count = count($data);
    $pad   = 2; // vertical padding in px

    $points = [];
    foreach ($data as $i => $v) {
        $x = ($i / ($count - 1)) * $w;
        $y = $h - $pad - (($v - $min) / $range) * ($h - $pad * 2);
        $points[] = round($x, 2) . ',' . round($y, 2);
    }
    $pts = implode(' ', $points);

    // Build a closed fill path (drop down to baseline).
    $fillPath = "M0,{$h} " . implode(' ', array_map(fn($p) => "L$p", $points))
              . " L{$w},{$h} Z";

    return <<<SVG
<svg width="{$w}" height="{$h}" viewBox="0 0 {$w} {$h}"
     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <defs>
        <linearGradient id="sg-{$color}" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0%"   stop-color="{$color}" stop-opacity="0.25"/>
            <stop offset="100%" stop-color="{$color}" stop-opacity="0"/>
        </linearGradient>
    </defs>
    <path d="{$fillPath}" fill="url(#sg-{$color})"/>
    <polyline points="{$pts}" fill="none" stroke="{$color}"
              stroke-width="1.5" stroke-linejoin="round" stroke-linecap="round"/>
</svg>
SVG;
}

$requests = [42, 58, 51, 73, 68, 90, 85, 112, 99, 130, 118, 145];
$latency  = [12, 14, 11, 18, 22, 16, 13, 19, 15, 21, 17, 14];
$errors   = [0, 1, 0, 0, 2, 1, 0, 0, 1, 0, 0, 1];
?>

<div class="flex flex-col gap-4 max-w-sm">
    <!-- Requests sparkline card -->
    <div class="rounded-lg border border-[#313244] bg-[#181825] px-4 py-3
                flex items-center justify-between gap-4">
        <div>
            <p class="text-[#585b70] text-xs tracking-widest uppercase">Requests</p>
            <p class="text-[#cdd6f4] font-bold text-xl mt-0.5">145</p>
            <p class="text-[#a6e3a1] text-xs mt-0.5">+24% vs yesterday</p>
        </div>
        <?= sparkline($requests, 96, 40, '#89b4fa') ?>
    </div>

    <!-- Latency sparkline card -->
    <div class="rounded-lg border border-[#313244] bg-[#181825] px-4 py-3
                flex items-center justify-between gap-4">
        <div>
            <p class="text-[#585b70] text-xs tracking-widest uppercase">Latency</p>
            <p class="text-[#cdd6f4] font-bold text-xl mt-0.5">14ms</p>
            <p class="text-[#f9e2af] text-xs mt-0.5">p95 avg</p>
        </div>
        <?= sparkline($latency, 96, 40, '#f9e2af') ?>
    </div>

    <!-- Errors sparkline card -->
    <div class="rounded-lg border border-[#313244] bg-[#181825] px-4 py-3
                flex items-center justify-between gap-4">
        <div>
            <p class="text-[#585b70] text-xs tracking-widest uppercase">Errors</p>
            <p class="text-[#cdd6f4] font-bold text-xl mt-0.5">1</p>
            <p class="text-[#f38ba8] text-xs mt-0.5">Last hour</p>
        </div>
        <?= sparkline($errors, 96, 40, '#f38ba8') ?>
    </div>
</div>
