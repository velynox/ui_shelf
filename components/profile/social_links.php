<?php
$links = [
    [
        'label' => 'GitHub',
        'url'   => 'https://github.com/velynox',
        'color' => '#cba6f7',
        'icon'  => 'M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839
                    9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703
                    -2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466
                    -1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032
                    1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088
                    .636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39
                    -1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84
                    -.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115
                    2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202
                    2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339
                    4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012
                    2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022
                    12.017C22 6.484 17.522 2 12 2z',
        'fill'  => true,
    ],
    [
        'label' => 'Website',
        'url'   => 'https://velynox.de',
        'color' => '#89b4fa',
        'icon'  => 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0
                    01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12
                    3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997
                    8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843
                    4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74
                    -1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778
                    -.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5
                    c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013
                    12c0-1.605.42-3.113 1.157-4.418',
        'fill'  => false,
    ],
    [
        'label' => 'Email',
        'url'   => 'mailto:git@velynox.de',
        'color' => '#a6e3a1',
        'icon'  => 'M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25
                    0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25
                    2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916
                    l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0
                    01-1.07-1.916V6.75',
        'fill'  => false,
    ],
];
?>

<div class="flex flex-col gap-3">
    <!-- Icon row -->
    <div class="flex items-center gap-2">
        <?php foreach ($links as $link): ?>
        <a href="<?= htmlspecialchars($link['url']) ?>"
           aria-label="<?= htmlspecialchars($link['label']) ?>"
           class="w-9 h-9 rounded-md border border-[#313244] bg-[#181825]
                  flex items-center justify-center transition-colors duration-150
                  hover:border-[#45475a]"
           style="--c:<?= $link['color'] ?>"
           onmouseover="this.style.color='<?= $link['color'] ?>'"
           onmouseout="this.style.color=''">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#a6adc8]
                 hover:text-current transition-colors"
                 <?= $link['fill'] ? 'fill="currentColor" viewBox="0 0 24 24"' : 'fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"' ?>>
                <path <?= $link['fill'] ? '' : 'stroke-linecap="round" stroke-linejoin="round"' ?>
                      d="<?= htmlspecialchars(preg_replace('/\s+/', ' ', $link['icon'])) ?>"/>
            </svg>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Text row -->
    <div class="flex items-center gap-4">
        <?php foreach ($links as $link): ?>
        <a href="<?= htmlspecialchars($link['url']) ?>"
           class="text-xs text-[#a6adc8] hover:text-[#cdd6f4]
                  transition-colors duration-150 flex items-center gap-1">
            <span style="color:<?= $link['color'] ?>">—</span>
            <?= htmlspecialchars($link['label']) ?>
        </a>
        <?php endforeach; ?>
    </div>
</div>
