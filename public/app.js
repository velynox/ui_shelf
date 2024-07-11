/**
 * app.js — ui_shelf
 *
 * Handles:
 *  - Tab switching between "Preview" and "Source" views.
 *  - Copy-to-clipboard for the source code block.
 */

(function () {
    'use strict';

    // ── Tab switching ─────────────────────────────────────────────────────────

    /**
     * Activate a tab by its name ('preview' or 'source').
     * @param {string} tab
     */
    function activateTab(tab) {
        const tabs    = document.querySelectorAll('[data-tab]');
        const panels  = document.querySelectorAll('[data-panel]');

        tabs.forEach(function (btn) {
            const isActive = btn.dataset.tab === tab;
            btn.setAttribute('aria-selected', isActive ? 'true' : 'false');
            btn.classList.toggle('tab-active', isActive);
            btn.classList.toggle('tab-inactive', !isActive);
        });

        panels.forEach(function (panel) {
            panel.hidden = panel.dataset.panel !== tab;
        });
    }

    document.addEventListener('click', function (e) {
        const btn = e.target.closest('[data-tab]');
        if (btn) {
            activateTab(btn.dataset.tab);
        }
    });

    // Activate the first tab on load.
    const firstTab = document.querySelector('[data-tab]');
    if (firstTab) {
        activateTab(firstTab.dataset.tab);
    }

    // ── Copy to clipboard ─────────────────────────────────────────────────────

    const copyBtn  = document.getElementById('copy-btn');
    const copyIcon = document.getElementById('copy-icon');
    const checkIcon = document.getElementById('check-icon');

    if (copyBtn) {
        copyBtn.addEventListener('click', function () {
            const code = document.getElementById('source-code');
            if (!code) return;

            navigator.clipboard.writeText(code.textContent).then(function () {
                // Show checkmark for 1.5 s then revert.
                if (copyIcon)  copyIcon.hidden  = true;
                if (checkIcon) checkIcon.hidden = false;

                setTimeout(function () {
                    if (copyIcon)  copyIcon.hidden  = false;
                    if (checkIcon) checkIcon.hidden = true;
                }, 1500);
            }).catch(function () {
                // Fallback for older browsers / non-secure contexts.
                const range = document.createRange();
                range.selectNodeContents(code);
                const sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
            });
        });
    }
})();
