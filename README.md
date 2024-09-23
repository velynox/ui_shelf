# ui_shelf

A PHP-based UI component browser. Browse, preview, and copy clean components
built with TailwindCSS and Catppuccin Mocha. No database, no build step.

## Stack

- **PHP 8.2+** — server-side rendering, no framework
- **TailwindCSS** — via Play CDN, no build step required
- **Catppuccin Mocha** — the only color palette
- **JetBrains Mono** — the only font
- **Heroicons** — inline SVGs, no icon font

## Getting started

```bash
git clone https://github.com/velynox/ui_shelf
cd ui_shelf
php -S localhost:8000
```

Open `http://localhost:8000` in your browser.

## Project structure

```
ui_shelf/
├── index.php               # Entry point — sidebar + viewer shell
├── component.php           # Preview and source tab renderer
├── config/
│   └── components.php      # Central component registry
├── components/
│   ├── alerts/
│   ├── badges/
│   ├── buttons/
│   ├── cards/
│   ├── data/
│   ├── feedback/
│   ├── forms/
│   ├── layout/
│   ├── media/
│   ├── navigation/
│   └── profile/
├── public/
│   └── app.js              # Tab switching + copy-to-clipboard
└── thoughts/
    └── project-setup.md    # Architecture notes
```

## Adding a component

1. Create a `.php` file under `components/<category>/`.
2. Register it in `config/components.php`:

```php
[
    'slug'        => 'my-component',
    'name'        => 'My Component',
    'category'    => 'Category',
    'description' => 'One sentence description.',
    'file'        => 'components/category/my_component.php',
],
```

3. Done. The sidebar updates automatically.

## Design rules

- No emojis in the UI — use inline SVGs (Heroicons, stroke-width 1.5).
- Catppuccin Mocha palette only — no custom colors outside the defined set.
- JetBrains Mono everywhere — no sans-serif fonts.
- Flat and sharp — 1px borders, no heavy shadows.

## License

MIT — velynox
