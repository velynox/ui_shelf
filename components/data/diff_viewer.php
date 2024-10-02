<?php
$lines = [
    ['type' => 'ctx',  'num_old' => 1,  'num_new' => 1,  'text' => "function find_component(string \$slug): ?array"],
    ['type' => 'ctx',  'num_old' => 2,  'num_new' => 2,  'text' => "{"],
    ['type' => 'del',  'num_old' => 3,  'num_new' => null,'text' => "    foreach (get_components() as \$c) {"],
    ['type' => 'del',  'num_old' => 4,  'num_new' => null,'text' => "        if (\$c['slug'] == \$slug) return \$c;"],
    ['type' => 'add',  'num_old' => null,'num_new' => 3,  'text' => "    foreach (get_components() as \$component) {"],
    ['type' => 'add',  'num_old' => null,'num_new' => 4,  'text' => "        if (\$component['slug'] === \$slug) {"],
    ['type' => 'add',  'num_old' => null,'num_new' => 5,  'text' => "            return \$component;"],
    ['type' => 'add',  'num_old' => null,'num_new' => 6,  'text' => "        }"],
    ['type' => 'ctx',  'num_old' => 5,  'num_new' => 7,  'text' => "    }"],
    ['type' => 'ctx',  'num_old' => 6,  'num_new' => 8,  'text' => "    return null;"],
    ['type' => 'ctx',  'num_old' => 7,  'num_new' => 9,  'text' => "}"],
];

$styles = [
    'del' => ['bg' => '#f38ba8/10', 'border' => '#f38ba8/30', 'prefix' => '-', 'text' => '#f38ba8'],
    'add' => ['bg' => '#a6e3a1/10', 'border' => '#a6e3a1/30', 'prefix' => '+', 'text' => '#a6e3a1'],
    'ctx' => ['bg' => 'transparent', 'border' => 'transparent', 'prefix' => ' ', 'text' => '#a6adc8'],
];
?>

<div class="max-w-lg rounded-lg border border-[#313244] bg-[#11111b] overflow-hidden">
    <!-- Header -->
    <div class="flex items-center gap-2 px-4 py-2.5 bg-[#181825] border-b border-[#313244]">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#cba6f7]"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
        </svg>
        <span class="text-[#a6adc8] text-xs">config/components.php</span>
        <span class="ml-auto text-[10px] text-[#a6e3a1]">+4</span>
        <span class="text-[10px] text-[#f38ba8]">-2</span>
    </div>

    <!-- Diff lines -->
    <div class="font-mono text-xs">
        <?php foreach ($lines as $line):
            $s = $styles[$line['type']];
        ?>
        <div class="flex items-stretch"
             style="background-color:<?= str_replace('/', '', $s['bg']) === 'transparent' ? 'transparent' : '' ?>;
                    <?= $line['type'] !== 'ctx' ? "background-color:{$s['bg']};border-left:2px solid {$s['border']};" : 'border-left:2px solid transparent;' ?>">
            <!-- Line numbers -->
            <span class="w-8 text-right px-1.5 py-0.5 text-[#45475a] select-none shrink-0">
                <?= $line['num_old'] ?? '' ?>
            </span>
            <span class="w-8 text-right px-1.5 py-0.5 text-[#45475a] select-none shrink-0">
                <?= $line['num_new'] ?? '' ?>
            </span>
            <!-- Prefix -->
            <span class="px-2 py-0.5 select-none shrink-0 font-bold"
                  style="color:<?= $s['text'] ?>"><?= $s['prefix'] ?></span>
            <!-- Content -->
            <span class="py-0.5 pr-4 whitespace-pre"
                  style="color:<?= $s['text'] ?>"><?= htmlspecialchars($line['text']) ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
