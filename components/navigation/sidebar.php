<nav class="w-52 bg-[#181825] border border-[#313244] rounded-lg py-3 flex flex-col gap-1">
    <?php
    $items = [
        ['icon_path' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25', 'label' => 'Dashboard', 'active' => true],
        ['icon_path' => 'M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z', 'label' => 'Projects', 'active' => false],
        ['icon_path' => 'M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5', 'label' => 'Components', 'active' => false],
        ['icon_path' => 'M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'label' => 'Settings', 'active' => false],
    ];
    foreach ($items as $item):
        $cls = $item['active']
            ? 'bg-[#313244] text-[#cba6f7]'
            : 'text-[#a6adc8] hover:bg-[#313244]/50 hover:text-[#cdd6f4]';
    ?>
    <a href="#"
       class="flex items-center gap-2.5 px-3 py-2 mx-1.5 rounded-md text-sm
              transition-colors duration-100 <?= $cls ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="<?= htmlspecialchars($item['icon_path']) ?>" />
        </svg>
        <?= htmlspecialchars($item['label']) ?>
    </a>
    <?php endforeach; ?>

    <div class="mx-3 my-1 border-t border-[#313244]"></div>

    <a href="#" class="flex items-center gap-2.5 px-3 py-2 mx-1.5 rounded-md text-sm
                       text-[#f38ba8] hover:bg-[#f38ba8]/10 transition-colors duration-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25
                     2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12
                     9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        Sign out
    </a>
</nav>
