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
