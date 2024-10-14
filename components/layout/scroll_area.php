<div class="flex flex-col gap-4 max-w-xs">
    <!-- Vertical scroll area -->
    <div class="flex flex-col gap-1">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">
            Vertical scroll
        </p>
        <div class="h-40 overflow-y-auto rounded-lg border border-[#313244] bg-[#181825]
                    scrollbar-thin p-3 flex flex-col gap-2">
            <?php for ($i = 1; $i <= 12; $i++): ?>
            <div class="flex items-center gap-2 py-1.5 px-2 rounded-md
                        hover:bg-[#313244]/40 transition-colors duration-100">
                <span class="w-5 h-5 rounded bg-[#313244] flex items-center justify-center
                             text-[#585b70] text-[10px] font-bold shrink-0">
                    <?= $i ?>
                </span>
                <span class="text-[#a6adc8] text-xs">Component item <?= $i ?></span>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Horizontal scroll area -->
    <div class="flex flex-col gap-1">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">
            Horizontal scroll
        </p>
        <div class="overflow-x-auto rounded-lg border border-[#313244] bg-[#181825] p-3">
            <div class="flex gap-2" style="width:max-content">
                <?php
                $cats = ['Buttons','Cards','Badges','Alerts','Forms','Navigation','Data','Layout','Feedback','Media','Profile'];
                foreach ($cats as $cat):
                ?>
                <span class="shrink-0 px-3 py-1.5 rounded-md border border-[#313244]
                             bg-[#1e1e2e] text-[#a6adc8] text-xs whitespace-nowrap
                             hover:border-[#45475a] hover:text-[#cdd6f4]
                             transition-colors duration-100 cursor-pointer">
                    <?= htmlspecialchars($cat) ?>
                </span>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
