<?php
$tags = [
    ['label' => 'PHP',          'weight' => 5, 'color' => '#cba6f7'],
    ['label' => 'TailwindCSS',  'weight' => 5, 'color' => '#89dceb'],
    ['label' => 'SQL',          'weight' => 4, 'color' => '#89b4fa'],
    ['label' => 'HTML',         'weight' => 4, 'color' => '#fab387'],
    ['label' => 'CSS',          'weight' => 3, 'color' => '#a6e3a1'],
    ['label' => 'JavaScript',   'weight' => 3, 'color' => '#f9e2af'],
    ['label' => 'Alpine.js',    'weight' => 2, 'color' => '#a6e3a1'],
    ['label' => 'Bash',         'weight' => 2, 'color' => '#94e2d5'],
    ['label' => 'Docker',       'weight' => 2, 'color' => '#89b4fa'],
    ['label' => 'Git',          'weight' => 2, 'color' => '#f38ba8'],
    ['label' => 'Python',       'weight' => 1, 'color' => '#f9e2af'],
    ['label' => 'Redis',        'weight' => 1, 'color' => '#f38ba8'],
    ['label' => 'REST APIs',    'weight' => 1, 'color' => '#cba6f7'],
    ['label' => 'Linux',        'weight' => 1, 'color' => '#a6adc8'],
    ['label' => 'Vite',         'weight' => 1, 'color' => '#fab387'],
];

// Map weight 1–5 to font size classes
$size_map = [1 => 'text-xs', 2 => 'text-sm', 3 => 'text-base', 4 => 'text-lg', 5 => 'text-xl'];

// Shuffle for natural cloud feel (seeded)
mt_srand(7);
usort($tags, fn() => mt_rand(-1, 1));
?>

<div class="max-w-sm flex flex-wrap gap-2 items-center leading-loose">
    <?php foreach ($tags as $tag):
        $sz = $size_map[$tag['weight']];
    ?>
    <span class="<?= $sz ?> font-bold cursor-default transition-opacity duration-150
                 hover:opacity-80"
          style="color:<?= $tag['color'] ?>">
        <?= htmlspecialchars($tag['label']) ?>
    </span>
    <?php endforeach; ?>
</div>
