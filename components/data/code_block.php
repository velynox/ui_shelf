<?php
$snippet = <<<'PHP'
<?php

declare(strict_types=1);

function find_component(string $slug): ?array
{
    foreach (get_components() as $component) {
        if ($component['slug'] === $slug) {
            return $component;
        }
    }
    return null;
}
PHP;
?>

<div class="max-w-lg rounded-lg border border-[#313244] bg-[#11111b] overflow-hidden">
    <!-- Header bar -->
    <div class="flex items-center justify-between px-4 py-2.5
                bg-[#181825] border-b border-[#313244]">
        <div class="flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#cba6f7]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
            </svg>
            <span class="text-[#a6adc8] text-xs">config/components.php</span>
        </div>
        <span class="text-[#585b70] text-xs">PHP</span>
    </div>

    <!-- Code -->
    <pre class="p-4 text-xs leading-relaxed overflow-x-auto text-[#cdd6f4]
                whitespace-pre"><code><?= htmlspecialchars($snippet) ?></code></pre>
</div>
