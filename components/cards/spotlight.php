<!-- Gradient spotlight card — hover moves the glow -->
<div class="flex flex-wrap gap-4">
    <?php
    $cards = [
        ['title' => 'Zero config',    'body' => 'Drop in a PHP server and go. No webpack, no npm, no build step.', 'from' => '#cba6f7', 'to' => '#89b4fa'],
        ['title' => 'File-based',     'body' => 'Each component is a plain .php snippet. Copy what you need.',      'from' => '#a6e3a1', 'to' => '#94e2d5'],
        ['title' => 'Dark by design', 'body' => 'Catppuccin Mocha is the only palette. No light mode planned.',     'from' => '#f9e2af', 'to' => '#fab387'],
    ];
    foreach ($cards as $c):
    ?>
    <div class="relative group w-44 rounded-xl border border-[#313244] bg-[#181825]
                p-5 overflow-hidden cursor-default">
        <!-- Spotlight glow -->
        <div class="absolute -inset-px rounded-xl opacity-0 group-hover:opacity-100
                    transition-opacity duration-500 pointer-events-none"
             style="background:radial-gradient(200px circle at 50% 0%,
                    <?= $c['from'] ?>22, transparent 70%)"></div>
        <!-- Top accent line -->
        <div class="absolute top-0 inset-x-0 h-px opacity-0 group-hover:opacity-100
                    transition-opacity duration-500"
             style="background:linear-gradient(90deg, transparent,
                    <?= $c['from'] ?>, <?= $c['to'] ?>, transparent)"></div>

        <div class="relative flex flex-col gap-2">
            <p class="text-[#cdd6f4] font-bold text-sm">
                <?= htmlspecialchars($c['title']) ?>
            </p>
            <p class="text-[#585b70] text-xs leading-relaxed">
                <?= htmlspecialchars($c['body']) ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
