<div class="flex flex-col gap-6 max-w-xs">
    <!-- Basic range -->
    <div class="flex flex-col gap-2">
        <div class="flex justify-between items-center">
            <label for="range-basic"
                   class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
                Opacity
            </label>
            <span id="range-basic-val" class="text-xs font-bold text-[#cdd6f4]">75%</span>
        </div>
        <input type="range" id="range-basic" min="0" max="100" value="75"
               class="w-full h-1.5 rounded-full appearance-none cursor-pointer
                      bg-[#313244] accent-[#cba6f7]"
               oninput="document.getElementById('range-basic-val').textContent = this.value + '%'" />
        <div class="flex justify-between text-[10px] text-[#45475a]">
            <span>0%</span><span>100%</span>
        </div>
    </div>

    <!-- Range with steps -->
    <div class="flex flex-col gap-2">
        <div class="flex justify-between items-center">
            <label for="range-step"
                   class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
                Font size
            </label>
            <span id="range-step-val" class="text-xs font-bold text-[#cdd6f4]">14px</span>
        </div>
        <input type="range" id="range-step" min="10" max="24" step="2" value="14"
               class="w-full h-1.5 rounded-full appearance-none cursor-pointer
                      bg-[#313244] accent-[#89b4fa]"
               oninput="document.getElementById('range-step-val').textContent = this.value + 'px'" />
        <div class="flex justify-between text-[10px] text-[#45475a]">
            <span>10px</span><span>24px</span>
        </div>
    </div>
</div>
