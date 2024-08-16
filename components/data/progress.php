<?php
/**
 * Renders a labeled progress bar.
 *
 * @param string    $label
 * @param int       $value   0–100
 * @param string    $color   Hex color for the fill.
 */
function progress_bar(string $label, int $value, string $color): void
{
    $pct = max(0, min(100, $value));
    echo <<<HTML
    <div class="flex flex-col gap-1.5">
        <div class="flex justify-between items-center">
            <span class="text-xs text-[#a6adc8]">{$label}</span>
            <span class="text-xs font-bold text-[#cdd6f4]">{$pct}%</span>
        </div>
        <div class="w-full h-1.5 rounded-full bg-[#313244] overflow-hidden">
            <div class="h-full rounded-full transition-all duration-500"
                 style="width:{$pct}%;background-color:{$color}"></div>
        </div>
    </div>
    HTML;
}
?>

<div class="flex flex-col gap-4 max-w-xs">
    <?php
    progress_bar('PHP',        92, '#cba6f7');
    progress_bar('SQL',        85, '#89b4fa');
    progress_bar('TailwindCSS',88, '#89dceb');
    progress_bar('TypeScript', 60, '#f9e2af');
    progress_bar('Python',     55, '#a6e3a1');
    ?>
</div>
