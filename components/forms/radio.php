<fieldset class="flex flex-col gap-3 max-w-xs">
    <legend class="text-xs font-bold tracking-widest uppercase text-[#a6adc8] mb-1">
        Deploy target
    </legend>

    <?php
    $options = [
        ['id' => 'r-prod',    'label' => 'Production',  'sub' => 'velynox.de',         'checked' => true],
        ['id' => 'r-staging', 'label' => 'Staging',     'sub' => 'staging.velynox.de', 'checked' => false],
        ['id' => 'r-local',   'label' => 'Local',       'sub' => 'localhost:8000',      'checked' => false],
    ];
    foreach ($options as $opt):
    ?>
    <label for="<?= $opt['id'] ?>"
           class="flex items-start gap-3 cursor-pointer group">
        <div class="relative mt-0.5 shrink-0">
            <input type="radio"
                   id="<?= $opt['id'] ?>"
                   name="deploy-target"
                   <?= $opt['checked'] ? 'checked' : '' ?>
                   class="peer sr-only" />
            <div class="w-4 h-4 rounded-full border border-[#45475a] bg-[#181825]
                        peer-checked:border-[#cba6f7]
                        peer-focus:ring-2 peer-focus:ring-[#cba6f7]
                        peer-focus:ring-offset-1 peer-focus:ring-offset-[#1e1e2e]
                        transition-colors duration-150 flex items-center justify-center">
                <span class="w-2 h-2 rounded-full bg-[#cba6f7] opacity-0
                             peer-checked:opacity-100 transition-opacity duration-150"></span>
            </div>
        </div>
        <div>
            <p class="text-[#cdd6f4] text-sm"><?= htmlspecialchars($opt['label']) ?></p>
            <p class="text-[#585b70] text-xs"><?= htmlspecialchars($opt['sub']) ?></p>
        </div>
    </label>
    <?php endforeach; ?>
</fieldset>
