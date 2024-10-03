<?php
/**
 * Recursive file tree renderer.
 *
 * @param array  $nodes   Tree structure.
 * @param int    $depth   Current depth (for indentation).
 */
function render_tree(array $nodes, int $depth = 0): void
{
    foreach ($nodes as $node):
        $is_dir  = isset($node['children']);
        $indent  = $depth * 16;
        $icon_path = $is_dir
            ? 'M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z'
            : 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z';
        $color = $is_dir ? '#89b4fa' : '#a6adc8';
        ?>
        <div class="flex items-center gap-1.5 py-0.5 rounded hover:bg-[#313244]/40
                    transition-colors duration-100 cursor-default"
             style="padding-left:<?= 8 + $indent ?>px">
            <?php if ($is_dir): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0 text-[#45475a]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
            <?php else: ?>
            <span class="w-3.5 shrink-0"></span>
            <?php endif; ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 shrink-0"
                 style="color:<?= $color ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="<?= $icon_path ?>"/>
            </svg>
            <span class="text-xs" style="color:<?= $color ?>">
                <?= htmlspecialchars($node['name']) ?>
            </span>
        </div>
        <?php if ($is_dir && !empty($node['children'])):
            render_tree($node['children'], $depth + 1);
        endif;
    endforeach;
}

$tree = [
    ['name' => 'ui_shelf', 'children' => [
        ['name' => 'components', 'children' => [
            ['name' => 'buttons',    'children' => [['name' => 'primary.php'], ['name' => 'ghost.php']]],
            ['name' => 'cards',      'children' => [['name' => 'info.php'], ['name' => 'profile.php']]],
            ['name' => 'data',       'children' => [['name' => 'sparkline.php'], ['name' => 'donut.php']]],
        ]],
        ['name' => 'config', 'children' => [
            ['name' => 'components.php'],
        ]],
        ['name' => 'public', 'children' => [
            ['name' => 'app.js'],
        ]],
        ['name' => 'index.php'],
        ['name' => 'component.php'],
        ['name' => 'README.md'],
    ]],
];
?>

<div class="max-w-xs rounded-lg border border-[#313244] bg-[#181825] py-2 px-1">
    <?php render_tree($tree); ?>
</div>
