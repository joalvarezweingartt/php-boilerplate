# PHP Boilerplate

![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=flat&logo=php)
![PHPStan](https://img.shields.io/badge/PHPStan-max-brightgreen)
![Pest](https://img.shields.io/badge/Pest-Tested-red)
![Docker](https://img.shields.io/badge/Docker-Multi--stage-2496ED?logo=docker)

A professional PHP project template with modern tooling.

## Features

- **PHP 8.3** with strict types
- **Docker multi-stage builds** (composer + php runtime)
- **Pest** for beautiful testing
- **PHPStan** at max level for static analysis
- **PHP-CS-Fixer** for coding standards
- **Makefile** for common tasks
- **PSR-4 autoloading**

## Quick Start

```bash
make setup
make test
```

## Commands

| Command       | Description                     |
|---------------|---------------------------------|
| `make setup`  | Install dependencies            |
| `make test`   | Run Pest tests                  |
| `make stan`   | Run PHPStan analysis            |
| `make lint`   | Check coding standards          |
| `make fix`    | Auto-fix coding standards       |
| `make clean`  | Remove vendor and cache         |

## Docker

```bash
docker compose build
docker compose run --rm php make test
```

## License

MIT
