<div class="max-w-lg flex flex-col gap-3">
    <!-- Success -->
    <div class="flex items-start gap-3 rounded-lg border border-[#a6e3a1]/30
                bg-[#a6e3a1]/5 px-4 py-3">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-[#a6e3a1] shrink-0 mt-0.5"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <div>
            <p class="text-[#a6e3a1] text-sm font-bold tracking-wide">Deployed successfully</p>
            <p class="text-[#a6adc8] text-sm leading-relaxed mt-0.5">
                Your changes are live at <span class="text-[#89b4fa]">velynox.de</span>.
            </p>
        </div>
    </div>

    <!-- Info -->
    <div class="flex items-start gap-3 rounded-lg border border-[#89b4fa]/30
                bg-[#89b4fa]/5 px-4 py-3">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-[#89b4fa] shrink-0 mt-0.5"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75
                     0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>
        <div>
            <p class="text-[#89b4fa] text-sm font-bold tracking-wide">New version available</p>
            <p class="text-[#a6adc8] text-sm leading-relaxed mt-0.5">
                PHP 8.4 is out. Run <code class="text-[#cba6f7]">composer update</code> to upgrade.
            </p>
        </div>
    </div>

    <!-- Error -->
    <div class="flex items-start gap-3 rounded-lg border border-[#f38ba8]/30
                bg-[#f38ba8]/5 px-4 py-3">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-5 h-5 text-[#f38ba8] shrink-0 mt-0.5"
             fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73
                     0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898
                     0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
        </svg>
        <div>
            <p class="text-[#f38ba8] text-sm font-bold tracking-wide">Build failed</p>
            <p class="text-[#a6adc8] text-sm leading-relaxed mt-0.5">
                Exit code 1 — check the deploy log for details.
            </p>
        </div>
    </div>
</div>
