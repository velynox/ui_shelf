<div class="flex flex-wrap gap-2 items-center">
    <?php
    $tags = [
        ['label' => 'php',        'color' => '#cba6f7'],
        ['label' => 'tailwind',   'color' => '#89b4fa'],
        ['label' => 'open-source','color' => '#a6e3a1'],
        ['label' => 'wip',        'color' => '#f9e2af'],
        ['label' => 'deprecated', 'color' => '#f38ba8'],
        ['label' => 'linux',      'color' => '#94e2d5'],
    ];
    foreach ($tags as $tag):
        $hex = $tag['color'];
    ?>
    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full
                 text-xs font-bold tracking-wide border"
          style="color:<?= $hex ?>;border-color:<?= $hex ?>33;background-color:<?= $hex ?>18">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659
                     1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0
                     005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25
                     2.25 0 009.568 3z" />
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6 6h.008v.008H6V6z" />
        </svg>
        <?= htmlspecialchars($tag['label']) ?>
    </span>
    <?php endforeach; ?>
</div>
