<?php

/**
 * Central component registry.
 *
 * Each entry describes one UI component. The 'file' key is relative to the
 * project root. The 'slug' is used in query strings and must be unique.
 *
 * @return array<int, array{slug: string, name: string, category: string, description: string, file: string}>
 */
function get_components(): array
{
    return [
        // ── Buttons ──────────────────────────────────────────────────────────
        [
            'slug'        => 'button-primary',
            'name'        => 'Primary Button',
            'category'    => 'Buttons',
            'description' => 'Solid accent-colored button with hover and focus states.',
            'file'        => 'components/buttons/primary.php',
        ],
        [
            'slug'        => 'button-ghost',
            'name'        => 'Ghost Button',
            'category'    => 'Buttons',
            'description' => 'Transparent button with a border, ideal for secondary actions.',
            'file'        => 'components/buttons/ghost.php',
        ],

        // ── Badges ───────────────────────────────────────────────────────────
        [
            'slug'        => 'badge-status',
            'name'        => 'Status Badge',
            'category'    => 'Badges',
            'description' => 'Small inline badge for online / offline / pending states.',
            'file'        => 'components/badges/status.php',
        ],

        // ── Cards ────────────────────────────────────────────────────────────
        [
            'slug'        => 'card-info',
            'name'        => 'Info Card',
            'category'    => 'Cards',
            'description' => 'Surface card with a title, body text, and an action link.',
            'file'        => 'components/cards/info.php',
        ],

        // ── Alerts ───────────────────────────────────────────────────────────
        [
            'slug'        => 'alert-warning',
            'name'        => 'Warning Alert',
            'category'    => 'Alerts',
            'description' => 'Dismissible inline alert for warning messages.',
            'file'        => 'components/alerts/warning.php',
        ],

        // ── Forms ────────────────────────────────────────────────────────────
        [
            'slug'        => 'form-input-group',
            'name'        => 'Input Group',
            'category'    => 'Forms',
            'description' => 'Label + text input + helper text, with error state variant.',
            'file'        => 'components/forms/input_group.php',
        ],
        [
            'slug'        => 'form-textarea',
            'name'        => 'Textarea',
            'category'    => 'Forms',
            'description' => 'Resizable textarea with character counter and helper text.',
            'file'        => 'components/forms/textarea.php',
        ],
        [
            'slug'        => 'form-toggle',
            'name'        => 'Toggle Switch',
            'category'    => 'Forms',
            'description' => 'On/off toggle with label, description, and disabled state.',
            'file'        => 'components/forms/toggle.php',
        ],
        [
            'slug'        => 'form-select',
            'name'        => 'Select',
            'category'    => 'Forms',
            'description' => 'Styled native select with a custom SVG chevron.',
            'file'        => 'components/forms/select.php',
        ],

        // ── Buttons (extended) ───────────────────────────────────────────────
        [
            'slug'        => 'button-icon',
            'name'        => 'Icon Button',
            'category'    => 'Buttons',
            'description' => 'Square and round icon-only buttons with SVG icons.',
            'file'        => 'components/buttons/icon_button.php',
        ],
        [
            'slug'        => 'button-loading',
            'name'        => 'Loading Button',
            'category'    => 'Buttons',
            'description' => 'Button with an animated spinner for async actions.',
            'file'        => 'components/buttons/loading.php',
        ],

        // ── Cards (extended) ─────────────────────────────────────────────────
        [
            'slug'        => 'card-profile',
            'name'        => 'Profile Card',
            'category'    => 'Cards',
            'description' => 'User profile card with avatar, bio, and stats row.',
            'file'        => 'components/cards/profile.php',
        ],
        [
            'slug'        => 'card-stat',
            'name'        => 'Stat Card',
            'category'    => 'Cards',
            'description' => '2×2 grid of metric cards with SVG icons and values.',
            'file'        => 'components/cards/stat.php',
        ],

        // ── Media ────────────────────────────────────────────────────────────
        [
            'slug'        => 'media-avatar',
            'name'        => 'Avatar',
            'category'    => 'Media',
            'description' => 'Avatar in five sizes — icon, initials, and online indicator variants.',
            'file'        => 'components/media/avatar.php',
        ],
        [
            'slug'        => 'media-image-figure',
            'name'        => 'Image Figure',
            'category'    => 'Media',
            'description' => 'Figure + figcaption with a hover overlay caption variant.',
            'file'        => 'components/media/image_figure.php',
        ],

        // ── Navigation ───────────────────────────────────────────────────────
        [
            'slug'        => 'nav-breadcrumb',
            'name'        => 'Breadcrumb',
            'category'    => 'Navigation',
            'description' => 'Accessible breadcrumb trail with SVG chevron separators.',
            'file'        => 'components/navigation/breadcrumb.php',
        ],
        [
            'slug'        => 'nav-tabs',
            'name'        => 'Tabs',
            'category'    => 'Navigation',
            'description' => 'Horizontal tab bar with active underline indicator.',
            'file'        => 'components/navigation/tabs.php',
        ],

        // ── Data ─────────────────────────────────────────────────────────────
        [
            'slug'        => 'data-kbd',
            'name'        => 'Keyboard Shortcut',
            'category'    => 'Data',
            'description' => 'Styled <kbd> elements for single keys and combo shortcuts.',
            'file'        => 'components/data/kbd.php',
        ],
        [
            'slug'        => 'data-sparkline',
            'name'        => 'Sparkline',
            'category'    => 'Data',
            'description' => 'Inline SVG sparkline with gradient fill, rendered server-side in PHP.',
            'file'        => 'components/data/sparkline.php',
        ],
    ];
}

/**
 * Find a single component by its slug. Returns null if not found.
 *
 * @param string $slug
 * @return array|null
 */
function find_component(string $slug): ?array
{
    foreach (get_components() as $component) {
        if ($component['slug'] === $slug) {
            return $component;
        }
    }
    return null;
}

/**
 * Group components by category.
 *
 * @return array<string, array>
 */
function components_by_category(): array
{
    $grouped = [];
    foreach (get_components() as $component) {
        $grouped[$component['category']][] = $component;
    }
    return $grouped;
}
