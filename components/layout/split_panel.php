<div class="max-w-2xl rounded-lg border border-[#313244] overflow-hidden flex">
    <!-- Left panel -->
    <div class="flex-1 bg-[#181825] p-6 flex flex-col gap-3 border-r border-[#313244]">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">Input</p>
        <textarea rows="6"
                  placeholder="Paste your PHP snippet here..."
                  class="flex-1 w-full bg-[#11111b] border border-[#313244] rounded-md
                         px-3 py-2 text-xs text-[#cdd6f4] placeholder-[#585b70]
                         leading-relaxed resize-none
                         focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                         focus:border-transparent transition duration-150"></textarea>
    </div>

    <!-- Right panel -->
    <div class="flex-1 bg-[#11111b] p-6 flex flex-col gap-3">
        <p class="text-[#585b70] text-xs tracking-widest uppercase font-bold">Preview</p>
        <div class="flex-1 rounded-md border border-[#313244] bg-[#1e1e2e]
                    flex items-center justify-center">
            <p class="text-[#45475a] text-xs">Output renders here</p>
        </div>
    </div>
</div>
