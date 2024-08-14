<nav aria-label="Pagination" class="flex items-center gap-1">
    <!-- Prev -->
    <a href="#" aria-label="Previous page"
       class="flex items-center justify-center w-8 h-8 rounded-md border
              border-[#313244] text-[#a6adc8] hover:text-[#cdd6f4]
              hover:border-[#45475a] transition-colors duration-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </a>

    <!-- Pages -->
    <?php
    $current = 3;
    $total   = 7;
    for ($i = 1; $i <= $total; $i++):
        if ($i === $current):
    ?>
        <span aria-current="page"
              class="flex items-center justify-center w-8 h-8 rounded-md
                     bg-[#cba6f7] text-[#1e1e2e] text-sm font-bold">
            <?= $i ?>
        </span>
    <?php elseif ($i === 1 || $i === $total || abs($i - $current) <= 1): ?>
        <a href="#"
           class="flex items-center justify-center w-8 h-8 rounded-md border
                  border-[#313244] text-[#a6adc8] text-sm
                  hover:text-[#cdd6f4] hover:border-[#45475a]
                  transition-colors duration-100">
            <?= $i ?>
        </a>
    <?php elseif (abs($i - $current) === 2): ?>
        <span class="flex items-center justify-center w-8 h-8 text-[#585b70] text-sm">
            &hellip;
        </span>
    <?php endif; endfor; ?>

    <!-- Next -->
    <a href="#" aria-label="Next page"
       class="flex items-center justify-center w-8 h-8 rounded-md border
              border-[#313244] text-[#a6adc8] hover:text-[#cdd6f4]
              hover:border-[#45475a] transition-colors duration-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </a>
</nav>
