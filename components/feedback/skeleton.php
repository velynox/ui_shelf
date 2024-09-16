<div class="flex flex-col gap-5 max-w-sm">
    <!-- Card skeleton -->
    <div class="rounded-lg border border-[#313244] bg-[#181825] p-4 flex flex-col gap-3">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-[#313244] animate-pulse shrink-0"></div>
            <div class="flex flex-col gap-1.5 flex-1">
                <div class="h-2.5 w-32 rounded bg-[#313244] animate-pulse"></div>
                <div class="h-2 w-20 rounded bg-[#313244] animate-pulse"></div>
            </div>
        </div>
        <div class="flex flex-col gap-1.5">
            <div class="h-2 w-full rounded bg-[#313244] animate-pulse"></div>
            <div class="h-2 w-5/6 rounded bg-[#313244] animate-pulse"></div>
            <div class="h-2 w-4/6 rounded bg-[#313244] animate-pulse"></div>
        </div>
        <div class="flex gap-2 pt-1">
            <div class="h-7 w-20 rounded-md bg-[#313244] animate-pulse"></div>
            <div class="h-7 w-16 rounded-md bg-[#313244] animate-pulse"></div>
        </div>
    </div>

    <!-- List skeleton -->
    <div class="flex flex-col gap-2">
        <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="flex items-center gap-3 px-3 py-2.5 rounded-md border
                    border-[#313244] bg-[#181825]">
            <div class="w-8 h-8 rounded-md bg-[#313244] animate-pulse shrink-0"></div>
            <div class="flex flex-col gap-1.5 flex-1">
                <div class="h-2.5 w-<?= ['28','36','24'][$i] ?> rounded bg-[#313244] animate-pulse"></div>
                <div class="h-2 w-<?= ['20','16','28'][$i] ?> rounded bg-[#313244] animate-pulse"></div>
            </div>
            <div class="h-2 w-12 rounded bg-[#313244] animate-pulse shrink-0"></div>
        </div>
        <?php endfor; ?>
    </div>
</div>
