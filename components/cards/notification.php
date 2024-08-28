<?php
$items = [
    ['type' => 'deploy',  'title' => 'Deploy succeeded',       'body' => 'ui_shelf v2.1.0 is live.',          'time' => '2m ago',  'read' => false, 'color' => '#a6e3a1'],
    ['type' => 'mention', 'title' => 'New mention',            'body' => '@velynox referenced in issue #42.', 'time' => '14m ago', 'read' => false, 'color' => '#cba6f7'],
    ['type' => 'error',   'title' => 'Build failed',           'body' => 'Exit code 1 on branch feature/x.',  'time' => '1h ago',  'read' => true,  'color' => '#f38ba8'],
    ['type' => 'update',  'title' => 'Dependency update ready','body' => 'tailwindcss 3.4.1 available.',       'time' => '3h ago',  'read' => true,  'color' => '#89b4fa'],
];

$icons = [
    'deploy'  => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
    'mention' => 'M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25',
    'error'   => 'M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z',
    'update'  => 'M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99',
];
?>

<div class="w-72 rounded-lg border border-[#313244] bg-[#181825] overflow-hidden">
    <div class="flex items-center justify-between px-4 py-2.5 border-b border-[#313244]">
        <p class="text-[#cdd6f4] text-xs font-bold tracking-wide">Notifications</p>
        <span class="text-[10px] font-bold uppercase tracking-widest
                     text-[#cba6f7] cursor-pointer hover:text-[#b48ef0]">
            Mark all read
        </span>
    </div>

    <?php foreach ($items as $item): ?>
    <div class="flex items-start gap-3 px-4 py-3 border-b border-[#313244]/50
                <?= !$item['read'] ? 'bg-[#1e1e2e]' : '' ?>
                hover:bg-[#313244]/30 transition-colors duration-100">
        <!-- Icon -->
        <div class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 mt-0.5"
             style="background-color:<?= $item['color'] ?>18;border:1px solid <?= $item['color'] ?>33">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5"
                 style="color:<?= $item['color'] ?>"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="<?= htmlspecialchars($icons[$item['type']]) ?>"/>
            </svg>
        </div>
        <!-- Text -->
        <div class="flex-1 min-w-0">
            <div class="flex items-center justify-between gap-2">
                <p class="text-[#cdd6f4] text-xs font-bold truncate">
                    <?= htmlspecialchars($item['title']) ?>
                </p>
                <?php if (!$item['read']): ?>
                    <span class="w-1.5 h-1.5 rounded-full bg-[#cba6f7] shrink-0"></span>
                <?php endif; ?>
            </div>
            <p class="text-[#585b70] text-xs leading-relaxed mt-0.5 truncate">
                <?= htmlspecialchars($item['body']) ?>
            </p>
            <p class="text-[#45475a] text-[10px] mt-1"><?= $item['time'] ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
