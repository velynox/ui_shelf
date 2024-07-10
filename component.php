<?php
/**
 * component.php — ui_shelf
 *
 * Renders the component viewer: header, preview panel, and source tab.
 * This file is included by index.php and expects $active to be set.
 *
 * @var array $active  The active component metadata array.
 */

if (!isset($active) || !is_array($active)) {
    return;
}

$component_file = __DIR__ . '/' . $active['file'];

if (!file_exists($component_file)) {
    echo '<p class="text-[#f38ba8] text-sm">Component file not found: '
        . htmlspecialchars($active['file']) . '</p>';
    return;
}

// Read the raw source for the "Source" tab.
$raw_source = file_get_contents($component_file);
?>

<!-- Component header -->
<div class="flex flex-col gap-1">
    <div class="flex items-center gap-2">
        <span class="text-xs font-bold tracking-widest uppercase
                     text-[#585b70] px-1.5 py-0.5 rounded
                     border border-[#313244]">
            <?= htmlspecialchars($active['category']) ?>
        </span>
    </div>
    <h1 class="text-[#cdd6f4] font-bold text-lg tracking-wide">
        <?= htmlspecialchars($active['name']) ?>
    </h1>
    <p class="text-[#a6adc8] text-sm leading-relaxed">
        <?= htmlspecialchars($active['description']) ?>
    </p>
</div>

<!-- Tab bar -->
<div class="flex items-center gap-0 border-b border-[#313244]" role="tablist">
    <button data-tab="preview"
            role="tab"
            aria-selected="true"
            class="px-4 py-2 text-sm font-bold tracking-wide transition-colors
                   duration-100 tab-active">
        Preview
    </button>
    <button data-tab="source"
            role="tab"
            aria-selected="false"
            class="px-4 py-2 text-sm font-bold tracking-wide transition-colors
                   duration-100 tab-inactive">
        Source
    </button>
</div>

<!-- Preview panel -->
<div data-panel="preview" class="rounded-lg border border-[#313244] bg-[#1e1e2e] p-8">
    <?php include $component_file; ?>
</div>

<!-- Source panel -->
<div data-panel="source" hidden class="flex flex-col gap-2">
    <!-- Copy button -->
    <div class="flex justify-end">
        <button id="copy-btn"
                type="button"
                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded
                       border border-[#313244] text-xs font-bold tracking-widest
                       uppercase text-[#a6adc8] hover:text-[#cdd6f4]
                       hover:border-[#45475a] transition-colors duration-150">
            <!-- Copy icon -->
            <svg id="copy-icon" xmlns="http://www.w3.org/2000/svg"
                 class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012
                         2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0
                         00-2 2v8a2 2 0 002 2z" />
            </svg>
            <!-- Check icon (hidden by default) -->
            <svg id="check-icon" xmlns="http://www.w3.org/2000/svg"
                 class="w-3.5 h-3.5 text-[#a6e3a1]" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                 hidden>
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M5 13l4 4L19 7" />
            </svg>
            Copy
        </button>
    </div>

    <!-- Code block -->
    <pre class="rounded-lg border border-[#313244] bg-[#181825] p-5
                overflow-x-auto text-sm leading-relaxed text-[#cdd6f4]
                whitespace-pre"><code id="source-code"><?= htmlspecialchars($raw_source) ?></code></pre>
</div>
