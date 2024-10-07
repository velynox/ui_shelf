<div class="flex flex-col gap-4">
    <!-- Interactive star rating -->
    <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Rate this component
        </label>
        <div class="flex items-center gap-1" id="star-rating" role="radiogroup">
            <?php for ($i = 1; $i <= 5; $i++): ?>
            <label class="cursor-pointer group">
                <input type="radio" name="rating" value="<?= $i ?>"
                       <?= $i === 4 ? 'checked' : '' ?> class="sr-only peer" />
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-7 h-7 transition-colors duration-100
                            peer-checked:text-[#f9e2af] text-[#313244]
                            group-hover:text-[#f9e2af]/60"
                     fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12
                             17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
            </label>
            <?php endfor; ?>
        </div>
        <p class="text-[#585b70] text-xs">4 out of 5 stars</p>
    </div>

    <!-- Read-only display -->
    <div class="flex flex-col gap-1.5">
        <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
            Community rating
        </label>
        <div class="flex items-center gap-2">
            <div class="flex items-center gap-0.5">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                     fill="<?= $i <= 4 ? '#f9e2af' : '#313244' ?>"
                     viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12
                             17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                <?php endfor; ?>
            </div>
            <span class="text-[#cdd6f4] text-sm font-bold">4.2</span>
            <span class="text-[#585b70] text-xs">(128 ratings)</span>
        </div>
    </div>
</div>
