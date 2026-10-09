# Product Catalog CMS (Drupal 11)

A Drupal 11 product catalog built as a technical assignment project. The site supports product search and listing by brand and attributes, CSV import/export, and SEO-friendly filter URLs on top of the Bootstrap 5 theme.

## Features

- **Bootstrap 5 theme** — site UI based on the Drupal Bootstrap 5 theme
- **Product content model** — `Product` node type with brand (taxonomy) and up to five attributes (RAM, storage, display size, camera, processor), plus product images
- **CSV import** — Feeds-based import from a semicolon-delimited CSV file
- **Catalog page** — product listing at `/catalog` with Search API facets
- **Brand pages** — selecting a brand opens `/catalog/{BrandName}` (Pathauto aliases for brand taxonomy terms)
- **Dynamic filter URLs** — Facets Pretty Paths for multi-filter URLs such as `/catalog/brand/Apple/ram/8`
- **CSV export** — downloadable product export at `/catalog-export` (Views Data Export)

## Tech stack

| Layer | Technology |
| --- | --- |
| CMS | Drupal 11.2 |
| Theme | Bootstrap 5 |
| Local environment | DDEV (Docker) |
| Search & facets | Search API, Facets, Facets Pretty Paths |
| Import | Feeds |
| Export | Views Data Export, CSV Serialization |
| URL aliases | Pathauto, Token |

## Content model

**Product** (`product`) fields:

| Field | Purpose |
| --- | --- |
| Title | Product name |
| Brand | Taxonomy term (`brands`) |
| RAM / Storage / Display size / Camera / Processor | Filterable attributes |
| Image | Product image (not treated as a filter attribute) |

Sample catalog brands: Apple, Samsung, Xiaomi.

## Key URLs

| URL | Description |
| --- | --- |
| `/` | Homepage with brand shortcuts into the catalog |
| `/catalog` | Full product catalog with facet filters |
| `/catalog/{BrandName}` | Brand landing page (e.g. `/catalog/Apple`) |
| `/catalog/brand/{value}/ram/{value}/…` | Catalog filtered via pretty facet paths (multiple filters supported) |
| `/catalog-export` | CSV export of products |

## Local setup (DDEV)

**Requirements:** [Docker](https://www.docker.com/products/docker-desktop/), [DDEV](https://docs.ddev.com/en/stable/). On Windows, use [WSL](https://learn.microsoft.com/en-us/windows/wsl/install) and install DDEV inside WSL.

```bash
git clone <repository-url>
cd Test-site   # or your local project folder

ddev config
ddev start
ddev import-db --file=./backups/db-20251012-220858.sql.gz
ddev launch
```

**Admin credentials:** `admin` / `admin`

## CSV import format

Expected columns (semicolon-delimited), matching the Feeds type **Товары**:

```text
title;field_brand;field_ram;field_storage;field_display_size;field_camera;field_processor;field_image
```

Import is managed in the admin UI via Feeds (`/admin/content/feed`).

## What this demonstrates

- Drupal site building with contrib modules instead of heavy custom code
- Search API–driven catalog with faceted navigation and pretty URLs
- Taxonomy-driven brand pages and Pathauto patterns
- Operational product data flows (CSV import via Feeds, CSV export via Views)
- Local Drupal development with Composer and DDEV
