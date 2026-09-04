# AGENTS.md

## Quick Reference

| Task | Command |
|------|---------|
| Full setup | `composer setup` |
| Dev server | `composer dev` (starts artisan serve + queue + vite concurrently) |
| Run all tests | `composer test` |
| Run single test file | `vendor/bin/pest tests/Feature/ExampleTest.php` |
| Run single test | `vendor/bin/pest --filter="test name"` |
| Lint (Pint) | `vendor/bin/pint` |
| Build assets | `npm run build` |

## Stack

- **PHP 8.3+**, **Laravel 13**, **Vite 8**, **Tailwind CSS 4** (via `@tailwindcss/vite`)
- **SQLite** database (default); `database/database.sqlite` file
- **Pest 5** for tests (not PHPUnit-style; uses `test()` / `it()` functions)
- **Laravel Vite Plugin 3** with Bunny font loading (Instrument Sans)
- **Laravel Boost** (`boost.json`) with skills: `infer-conventions`, `laravel-best-practices`, `testing-best-practices`, `tailwindcss-development`

## Project State

Early-stage skeleton. No controllers, no custom models (only default `User`), no custom routes beyond `GET /`. The database has the default users, cache, and jobs migrations.

## Conventions

- Tailwind CSS imported in `resources/css/app.css` via `@import 'tailwindcss'` (v4 syntax, no `tailwind.config.js`)
- Font `--font-sans` theme override is in `resources/css/app.css`
- `@source` directives in `resources/css/app.css` scan vendor pagination views and compiled Blade cache
- Vite ignores `storage/framework/views/**` in its file watcher
- Tests use Pest syntax (`test()`, `it()`, `expect()`); base test case is `Tests\TestCase`
- `.npmrc` has `ignore-scripts=true`

## Test Setup

PHPUnit config (`phpunit.xml`) sets env vars: tests run against an **in-memory SQLite** database, array cache/mail/session, sync queue. `RefreshDatabase` trait is **commented out** in `tests/Pest.php` — uncomment it when adding database-dependent Feature tests.

## Laravel Boost

`AGENTS.md` and `CLAUDE.md` are managed by Boost. If you run `php artisan boost:install`, it regenerates these files. After generation, re-read `AGENTS.md` for updated instructions.
