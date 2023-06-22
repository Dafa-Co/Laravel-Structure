# Laravel project name

laravel project Description.

## Requirements
| Name  | Version |
|:------|:--------|
| PHP   | 8.1+    |
| MySQL | ANY     |

---

## Configuration

1. Create a `.env` file
    - Copy [.env.example](.env.example) file to `.env`.
   ```shell
   cp .env.example .env
   ```
    - Edit [.env](.env) file.
   ```shell
   nano .env
   ```

---

## Installation

```shell
composer install
php artisan migrate:fresh --seed
php artisan admin
```

---

### Test

```shell

```

---

## Copyright and license
Licensed under the **MIT License** [LICENSE](LICENSE) license.

Copyright © 2023 [Dafa](https://github.com/Dafa-Co) <a href="https://www.dafa.sa/" target="blank">
<img src="https://static.wixstatic.com/media/8b2439_37f48f90ad054b39b4ae46a70af9bebb~mv2.png/v1/fill/w_115,h_69,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Dafe-logo-01.png" width="48" alt="Dafa Logo" border="0" />
</a>

<!-- Remove the lines bellow before go live -->

---

##### For developers:
###### - Project structure documentation: [STRUCTURE.md](STRUCTURE.md).
