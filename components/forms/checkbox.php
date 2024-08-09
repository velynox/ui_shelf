<fieldset class="flex flex-col gap-3 max-w-xs">
    <legend class="text-xs font-bold tracking-widest uppercase text-[#a6adc8] mb-1">
        Notifications
    </legend>

    <?php
    $options = [
        ['id' => 'chk-email',  'label' => 'Email digest',      'sub' => 'Daily summary at 08:00', 'checked' => true],
        ['id' => 'chk-push',   'label' => 'Push notifications', 'sub' => 'Instant, on all devices', 'checked' => true],
        ['id' => 'chk-sms',    'label' => 'SMS alerts',         'sub' => 'Critical errors only',   'checked' => false],
    ];
    foreach ($options as $opt):
    ?>
    <label for="<?= $opt['id'] ?>"
           class="flex items-start gap-3 cursor-pointer group">
        <div class="relative mt-0.5 shrink-0">
            <input type="checkbox"
                   id="<?= $opt['id'] ?>"
                   <?= $opt['checked'] ? 'checked' : '' ?>
                   class="peer sr-only" />
            <div class="w-4 h-4 rounded border border-[#45475a] bg-[#181825]
                        peer-checked:bg-[#cba6f7] peer-checked:border-[#cba6f7]
                        peer-focus:ring-2 peer-focus:ring-[#cba6f7]
                        peer-focus:ring-offset-1 peer-focus:ring-offset-[#1e1e2e]
                        transition-colors duration-150 flex items-center justify-center">
                <svg class="w-2.5 h-2.5 text-[#1e1e2e] hidden peer-checked:block"
                     xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
        </div>
        <div>
            <p class="text-[#cdd6f4] text-sm"><?= htmlspecialchars($opt['label']) ?></p>
            <p class="text-[#585b70] text-xs"><?= htmlspecialchars($opt['sub']) ?></p>
        </div>
    </label>
    <?php endforeach; ?>
</fieldset>
