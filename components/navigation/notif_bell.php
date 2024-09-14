<div class="flex flex-wrap gap-6 items-center">
    <!-- Bell with badge -->
    <div class="relative inline-flex">
        <button type="button"
                aria-label="Notifications (3 unread)"
                class="w-9 h-9 rounded-md border border-[#313244] bg-[#181825]
                       flex items-center justify-center text-[#a6adc8]
                       hover:text-[#cdd6f4] hover:border-[#45475a]
                       transition-colors duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0
                         0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312
                         6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255
                         0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
            </svg>
        </button>
        <!-- Badge -->
        <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-[#f38ba8]
                     text-[#1e1e2e] text-[10px] font-bold flex items-center
                     justify-center border-2 border-[#1e1e2e]">
            3
        </span>
    </div>

    <!-- Bell — no badge -->
    <button type="button"
            aria-label="Notifications"
            class="w-9 h-9 rounded-md border border-[#313244] bg-[#181825]
                   flex items-center justify-center text-[#a6adc8]
                   hover:text-[#cdd6f4] hover:border-[#45475a]
                   transition-colors duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0
                     0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312
                     6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255
                     0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
        </svg>
    </button>

    <!-- Bell with pulsing dot -->
    <div class="relative inline-flex">
        <button type="button"
                aria-label="New notifications"
                class="w-9 h-9 rounded-md border border-[#313244] bg-[#181825]
                       flex items-center justify-center text-[#a6adc8]
                       hover:text-[#cdd6f4] hover:border-[#45475a]
                       transition-colors duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0
                         0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312
                         6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255
                         0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/>
            </svg>
        </button>
        <span class="absolute top-1 right-1 flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full
                         bg-[#cba6f7] opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#cba6f7]"></span>
        </span>
    </div>
</div>
