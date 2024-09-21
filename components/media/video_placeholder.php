<div class="max-w-sm flex flex-col gap-3">
    <!-- 16:9 video placeholder -->
    <div class="relative w-full rounded-lg border border-[#313244] bg-[#11111b]
                overflow-hidden group cursor-pointer"
         style="aspect-ratio:16/9">
        <!-- Thumbnail gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#cba6f7]/10 to-[#89b4fa]/5"></div>

        <!-- Play button -->
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-14 h-14 rounded-full bg-[#1e1e2e]/80 border border-[#45475a]
                        flex items-center justify-center
                        group-hover:bg-[#cba6f7]/20 group-hover:border-[#cba6f7]/50
                        transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 text-[#cdd6f4] ml-0.5" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </div>
        </div>

        <!-- Duration badge -->
        <div class="absolute bottom-2 right-2 px-1.5 py-0.5 rounded bg-[#11111b]/80
                    text-[#cdd6f4] text-[10px] font-bold">
            12:34
        </div>
    </div>

    <!-- Caption -->
    <div class="flex flex-col gap-0.5">
        <p class="text-[#cdd6f4] text-sm font-bold">Building ui_shelf from scratch</p>
        <p class="text-[#585b70] text-xs">velynox · 1.2k views · 3 days ago</p>
    </div>
</div>
