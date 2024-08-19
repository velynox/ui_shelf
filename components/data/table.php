<?php
$rows = [
    ['name' => 'button-primary',  'category' => 'Buttons',    'status' => 'stable',  'updated' => '2024-07-12'],
    ['name' => 'card-profile',    'category' => 'Cards',      'status' => 'stable',  'updated' => '2024-07-17'],
    ['name' => 'data-sparkline',  'category' => 'Data',       'status' => 'stable',  'updated' => '2024-07-29'],
    ['name' => 'nav-command-row', 'category' => 'Navigation', 'status' => 'beta',    'updated' => '2024-07-31'],
    ['name' => 'form-file-upload','category' => 'Forms',      'status' => 'wip',     'updated' => '2024-08-01'],
];

$status_colors = [
    'stable' => ['bg' => '#a6e3a1', 'text' => '#a6e3a1'],
    'beta'   => ['bg' => '#f9e2af', 'text' => '#f9e2af'],
    'wip'    => ['bg' => '#f38ba8', 'text' => '#f38ba8'],
];
?>

<div class="max-w-lg overflow-x-auto rounded-lg border border-[#313244]">
    <table class="w-full text-xs">
        <thead>
            <tr class="border-b border-[#313244] bg-[#181825]">
                <th class="text-left px-4 py-2.5 text-[#585b70] font-bold
                           tracking-widest uppercase">Component</th>
                <th class="text-left px-4 py-2.5 text-[#585b70] font-bold
                           tracking-widest uppercase">Category</th>
                <th class="text-left px-4 py-2.5 text-[#585b70] font-bold
                           tracking-widest uppercase">Status</th>
                <th class="text-left px-4 py-2.5 text-[#585b70] font-bold
                           tracking-widest uppercase">Updated</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $i => $row):
                $sc = $status_colors[$row['status']];
                $bg = $i % 2 === 0 ? 'bg-[#1e1e2e]' : 'bg-[#181825]';
            ?>
            <tr class="<?= $bg ?> border-b border-[#313244]/50
                       hover:bg-[#313244]/30 transition-colors duration-100">
                <td class="px-4 py-2.5 text-[#89b4fa] font-bold">
                    <?= htmlspecialchars($row['name']) ?>
                </td>
                <td class="px-4 py-2.5 text-[#a6adc8]">
                    <?= htmlspecialchars($row['category']) ?>
                </td>
                <td class="px-4 py-2.5">
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold
                                 uppercase tracking-widest border"
                          style="color:<?= $sc['text'] ?>;
                                 border-color:<?= $sc['bg'] ?>44;
                                 background-color:<?= $sc['bg'] ?>18">
                        <?= htmlspecialchars($row['status']) ?>
                    </span>
                </td>
                <td class="px-4 py-2.5 text-[#585b70]">
                    <?= htmlspecialchars($row['updated']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
