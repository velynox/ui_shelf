<div class="max-w-md rounded-xl border border-[#313244] bg-[#11111b]
            overflow-hidden shadow-2xl shadow-[#11111b]/60">
    <!-- Title bar -->
    <div class="flex items-center gap-3 px-4 py-3 bg-[#181825] border-b border-[#313244]
                select-none">
        <!-- Traffic lights -->
        <div class="flex items-center gap-1.5">
            <span class="w-3 h-3 rounded-full bg-[#f38ba8] hover:brightness-110
                         transition-all cursor-pointer"></span>
            <span class="w-3 h-3 rounded-full bg-[#f9e2af] hover:brightness-110
                         transition-all cursor-pointer"></span>
            <span class="w-3 h-3 rounded-full bg-[#a6e3a1] hover:brightness-110
                         transition-all cursor-pointer"></span>
        </div>
        <!-- Title -->
        <div class="flex-1 flex justify-center">
            <span class="text-[#585b70] text-xs">index.php — ui_shelf</span>
        </div>
        <!-- Spacer to balance traffic lights -->
        <div class="w-12"></div>
    </div>

    <!-- Tab bar -->
    <div class="flex items-center border-b border-[#313244] bg-[#181825]/60 px-2 pt-1.5">
        <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-t-md
                    bg-[#11111b] border border-b-0 border-[#313244] text-xs text-[#cdd6f4]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-[#cba6f7]"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
            </svg>
            index.php
        </div>
        <div class="px-3 py-1.5 text-xs text-[#585b70] hover:text-[#a6adc8]
                    transition-colors cursor-pointer">
            component.php
        </div>
    </div>

    <!-- Editor content -->
    <div class="p-4 font-mono text-xs leading-relaxed">
        <div><span class="text-[#6c7086]">1  </span><span class="text-[#cba6f7]">&lt;?php</span></div>
        <div><span class="text-[#6c7086]">2  </span></div>
        <div><span class="text-[#6c7086]">3  </span><span class="text-[#89b4fa]">require_once</span> <span class="text-[#a6e3a1]">'config/components.php'</span><span class="text-[#cdd6f4]">;</span></div>
        <div><span class="text-[#6c7086]">4  </span></div>
        <div><span class="text-[#6c7086]">5  </span><span class="text-[#585b70]">// Resolve active component from query string</span></div>
        <div><span class="text-[#6c7086]">6  </span><span class="text-[#cba6f7]">$active_slug</span> <span class="text-[#cdd6f4]">=</span> <span class="text-[#89b4fa]">isset</span><span class="text-[#cdd6f4]">(</span><span class="text-[#cba6f7]">$_GET</span><span class="text-[#cdd6f4]">[</span><span class="text-[#a6e3a1]">'c'</span><span class="text-[#cdd6f4]">])</span></div>
        <div><span class="text-[#6c7086]">7  </span><span class="text-[#cdd6f4]">    ?</span> <span class="text-[#89b4fa]">trim</span><span class="text-[#cdd6f4]">(</span><span class="text-[#89b4fa]">strip_tags</span><span class="text-[#cdd6f4]">(</span><span class="text-[#cba6f7]">$_GET</span><span class="text-[#cdd6f4]">[</span><span class="text-[#a6e3a1]">'c'</span><span class="text-[#cdd6f4]">]))</span></div>
        <div><span class="text-[#6c7086]">8  </span><span class="text-[#cdd6f4]">    :</span> <span class="text-[#89b4fa]">null</span><span class="text-[#cdd6f4]">;</span></div>
        <!-- Cursor line -->
        <div class="flex items-center bg-[#cba6f7]/5 -mx-4 px-4">
            <span class="text-[#6c7086]">9  </span>
            <span class="ml-1 inline-block w-2 h-3.5 bg-[#cba6f7] animate-pulse align-middle ml-1"></span>
        </div>
    </div>

    <!-- Status bar -->
    <div class="flex items-center justify-between px-4 py-1.5 bg-[#cba6f7]/10
                border-t border-[#313244] text-[10px] text-[#585b70]">
        <div class="flex items-center gap-3">
            <span class="text-[#cba6f7]">master</span>
            <span>PHP</span>
            <span>UTF-8</span>
        </div>
        <div class="flex items-center gap-3">
            <span>Ln 9, Col 1</span>
            <span>Spaces: 4</span>
        </div>
    </div>
</div>
