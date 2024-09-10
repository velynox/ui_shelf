<?php
$palette = [
    ['name' => 'Mauve',    'hex' => '#cba6f7'],
    ['name' => 'Blue',     'hex' => '#89b4fa'],
    ['name' => 'Green',    'hex' => '#a6e3a1'],
    ['name' => 'Yellow',   'hex' => '#f9e2af'],
    ['name' => 'Red',      'hex' => '#f38ba8'],
    ['name' => 'Teal',     'hex' => '#94e2d5'],
    ['name' => 'Peach',    'hex' => '#fab387'],
    ['name' => 'Lavender', 'hex' => '#b4befe'],
];
?>

<div class="flex flex-col gap-3 max-w-xs">
    <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
        Accent color
    </label>

    <div class="flex flex-wrap gap-2">
        <?php foreach ($palette as $i => $color): ?>
        <label class="cursor-pointer group" title="<?= htmlspecialchars($color['name']) ?>">
            <input type="radio" name="accent" value="<?= htmlspecialchars($color['hex']) ?>"
                   <?= $i === 0 ? 'checked' : '' ?> class="sr-only peer" />
            <span class="block w-7 h-7 rounded-full border-2 border-transparent
                         peer-checked:border-[#cdd6f4] peer-checked:scale-110
                         hover:scale-110 transition-transform duration-150"
                  style="background-color:<?= $color['hex'] ?>"></span>
        </label>
        <?php endforeach; ?>
    </div>

    <!-- Selected color display -->
    <div class="flex items-center gap-2 mt-1">
        <span class="w-4 h-4 rounded-full bg-[#cba6f7]" id="swatch-preview"></span>
        <span class="text-[#a6adc8] text-xs" id="swatch-label">Mauve — #cba6f7</span>
    </div>
</div>
