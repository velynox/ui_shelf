<div class="flex flex-col gap-4">
    <label class="text-xs font-bold tracking-widest uppercase text-[#a6adc8]">
        Verification code
    </label>

    <!-- 6-digit PIN input -->
    <div class="flex gap-2" id="pin-group">
        <?php for ($i = 0; $i < 6; $i++): ?>
        <input type="text"
               inputmode="numeric"
               maxlength="1"
               pattern="[0-9]"
               aria-label="Digit <?= $i + 1 ?>"
               class="w-10 h-12 rounded-md border border-[#313244] bg-[#181825]
                      text-center text-lg font-bold text-[#cdd6f4]
                      focus:outline-none focus:ring-2 focus:ring-[#cba6f7]
                      focus:border-transparent transition duration-150
                      caret-transparent" />
        <?php endfor; ?>
    </div>

    <p class="text-[#585b70] text-xs">Enter the 6-digit code sent to your device.</p>
</div>

<script>
(function () {
    const group  = document.getElementById('pin-group');
    if (!group) return;
    const inputs = Array.from(group.querySelectorAll('input'));

    inputs.forEach(function (input, idx) {
        input.addEventListener('input', function () {
            if (input.value.length === 1 && idx < inputs.length - 1) {
                inputs[idx + 1].focus();
            }
        });
        input.addEventListener('keydown', function (e) {
            if (e.key === 'Backspace' && !input.value && idx > 0) {
                inputs[idx - 1].focus();
            }
        });
    });
})();
</script>
