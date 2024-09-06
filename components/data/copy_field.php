<div class="flex flex-col gap-3 max-w-sm">
    <!-- Copy field -->
    <div class="flex items-center rounded-md border border-[#313244] bg-[#181825]
                overflow-hidden">
        <span class="flex-1 px-3 py-2 text-sm text-[#a6adc8] truncate select-all">
            php -S localhost:8000
        </span>
        <button type="button"
                id="copy-field-btn"
                aria-label="Copy to clipboard"
                class="shrink-0 px-3 py-2 border-l border-[#313244]
                       text-[#585b70] hover:text-[#cba6f7] hover:bg-[#cba6f7]/5
                       transition-colors duration-150">
            <svg id="cf-copy" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125
                         1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75
                         a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504
                         1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0
                         00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5
                         4.625l-7.5-7.5"/>
            </svg>
            <svg id="cf-check" xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4 text-[#a6e3a1] hidden"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
        </button>
    </div>

    <!-- With label -->
    <div class="flex flex-col gap-1">
        <label class="text-xs font-bold tracking-widest uppercase text-[#585b70]">
            Install
        </label>
        <div class="flex items-center rounded-md border border-[#313244] bg-[#181825]
                    overflow-hidden">
            <span class="text-[#cba6f7] px-3 py-2 text-sm shrink-0 border-r border-[#313244]">$</span>
            <span class="flex-1 px-3 py-2 text-sm text-[#a6adc8] truncate select-all">
                git clone https://github.com/velynox/ui_shelf
            </span>
        </div>
    </div>
</div>

<script>
(function () {
    const btn   = document.getElementById('copy-field-btn');
    const copy  = document.getElementById('cf-copy');
    const check = document.getElementById('cf-check');
    if (!btn) return;
    btn.addEventListener('click', function () {
        navigator.clipboard.writeText('php -S localhost:8000').then(function () {
            copy.classList.add('hidden');
            check.classList.remove('hidden');
            setTimeout(function () {
                copy.classList.remove('hidden');
                check.classList.add('hidden');
            }, 1500);
        });
    });
})();
</script>
