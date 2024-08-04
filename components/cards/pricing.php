<div class="flex flex-wrap gap-4">
    <!-- Free tier -->
    <div class="w-52 rounded-lg border border-[#313244] bg-[#181825] p-5
                flex flex-col gap-4">
        <div>
            <p class="text-[#a6adc8] text-xs font-bold tracking-widest uppercase">Free</p>
            <p class="text-[#cdd6f4] font-bold text-3xl mt-1">$0
                <span class="text-[#585b70] text-sm font-normal">/ mo</span>
            </p>
        </div>
        <ul class="flex flex-col gap-2 text-xs text-[#a6adc8]">
            <?php foreach (['5 projects', '1 GB storage', 'Community support'] as $f): ?>
                <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#a6e3a1] shrink-0"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <?= htmlspecialchars($f) ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <button type="button"
                class="w-full py-2 rounded-md border border-[#313244] text-xs
                       font-bold tracking-wide text-[#a6adc8]
                       hover:border-[#45475a] hover:text-[#cdd6f4]
                       transition-colors duration-150">
            Get started
        </button>
    </div>

    <!-- Pro tier (highlighted) -->
    <div class="w-52 rounded-lg border border-[#cba6f7]/40 bg-[#181825] p-5
                flex flex-col gap-4 relative">
        <span class="absolute -top-2.5 left-1/2 -translate-x-1/2
                     bg-[#cba6f7] text-[#1e1e2e] text-[10px] font-bold
                     uppercase tracking-widest px-2.5 py-0.5 rounded-full">
            Popular
        </span>
        <div>
            <p class="text-[#cba6f7] text-xs font-bold tracking-widest uppercase">Pro</p>
            <p class="text-[#cdd6f4] font-bold text-3xl mt-1">$12
                <span class="text-[#585b70] text-sm font-normal">/ mo</span>
            </p>
        </div>
        <ul class="flex flex-col gap-2 text-xs text-[#a6adc8]">
            <?php foreach (['Unlimited projects', '50 GB storage', 'Priority support', 'Custom domains'] as $f): ?>
                <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-[#a6e3a1] shrink-0"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    <?= htmlspecialchars($f) ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <button type="button"
                class="w-full py-2 rounded-md bg-[#cba6f7] text-[#1e1e2e]
                       text-xs font-bold tracking-wide
                       hover:bg-[#b48ef0] transition-colors duration-150
                       focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                       focus:ring-offset-2 focus:ring-offset-[#181825]">
            Upgrade
        </button>
    </div>
</div>
