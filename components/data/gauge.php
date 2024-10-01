<?php
/**
 * SVG gauge / speedometer meter.
 *
 * @param float  $value   0–100
 * @param string $label
 * @param string $color   Accent hex
 * @param int    $size    SVG size px
 */
function gauge(float $value, string $label, string $color, int $size = 140): string
{
    $pct    = max(0, min(100, $value)) / 100;
    $r      = 50;
    $cx     = $size / 2;
    $cy     = $size / 2 + 10;
    $stroke = 10;

    // Arc spans 180° (π radians), starting at 180° (left)
    $start_angle = M_PI;
    $end_angle   = 0;
    $angle       = $start_angle + $pct * ($end_angle - $start_angle); // goes right

    // Track arc (full 180°)
    $tx1 = $cx + $r * cos($start_angle);
    $ty1 = $cy + $r * sin($start_angle);
    $tx2 = $cx + $r * cos($end_angle);
    $ty2 = $cy + $r * sin($end_angle);

    // Value arc
    $vx2 = $cx + $r * cos($angle);
    $vy2 = $cy + $r * sin($angle);
    $large = ($pct > 0.5) ? 1 : 0;

    // Needle tip
    $needle_len = $r - 6;
    $nx = $cx + $needle_len * cos($angle);
    $ny = $cy + $needle_len * sin($angle);

    return <<<SVG
<svg width="{$size}" height="{$size}" viewBox="0 0 {$size} {$size}"
     xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <!-- Track -->
    <path d="M {$tx1} {$ty1} A {$r} {$r} 0 0 1 {$tx2} {$ty2}"
          fill="none" stroke="#313244" stroke-width="{$stroke}"
          stroke-linecap="round"/>
    <!-- Value arc -->
    <path d="M {$tx1} {$ty1} A {$r} {$r} 0 {$large} 1 {$vx2} {$vy2}"
          fill="none" stroke="{$color}" stroke-width="{$stroke}"
          stroke-linecap="round"/>
    <!-- Needle -->
    <line x1="{$cx}" y1="{$cy}" x2="{$nx}" y2="{$ny}"
          stroke="{$color}" stroke-width="2" stroke-linecap="round"/>
    <circle cx="{$cx}" cy="{$cy}" r="4" fill="{$color}"/>
    <!-- Center label -->
    <text x="{$cx}" y="{$cy}" dy="22" text-anchor="middle"
          font-size="18" font-weight="bold" fill="#cdd6f4"
          font-family="JetBrains Mono, monospace">{$value}%</text>
    <text x="{$cx}" y="{$cy}" dy="36" text-anchor="middle"
          font-size="9" fill="#585b70"
          font-family="JetBrains Mono, monospace">{$label}</text>
</svg>
SVG;
}
?>

<div class="flex flex-wrap gap-4 items-end">
    <?= gauge(78, 'CPU',    '#cba6f7') ?>
    <?= gauge(45, 'Memory', '#89b4fa') ?>
    <?= gauge(91, 'Disk',   '#f38ba8') ?>
</div>
