# PHP Boilerplate

![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php)
![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=for-the-badge&logo=docker)
![PHPStan](https://img.shields.io/badge/PHPStan-Level_Max-6C5CE7?style=for-the-badge)
![Pest](https://img.shields.io/badge/Pest-Tested-CC3534?style=for-the-badge)
![GitHub Actions](https://img.shields.io/badge/CI%2FCD-GitHub_Actions-2088FF?style=for-the-badge&logo=githubactions)

## 🚀 Production-Ready PHP Project Template

A **battle-tested starting point** for professional PHP applications. Every project I build starts here — Docker-optimized, fully tested, CI/CD-ready, and configured with strict quality gates.

```bash
# Start a new project in seconds
composer create-project neuraldev/php-boilerplate my-project
cd my-project && make setup
```

## ✨ Features

| Feature | Status |
|---|---|
| 🐳 **Docker** — PHP 8.3 + Nginx + MySQL + Redis | ✅ Optimized multi-stage |
| 🧪 **Pest Testing** — Feature & Unit tests | ✅ Pre-configured |
| 🔍 **PHPStan Max** — Static analysis at level max | ✅ Strict mode |
| 🎨 **PHP-CS-Fixer** — PSR-12 coding standards | ✅ Automated |
| 🔄 **GitHub Actions** — CI pipeline | ✅ Tests + Stan + CS |
| 📦 **Makefile** — Common commands shortcut | ✅ setup/test/lint/stan |
| 📁 **PSR-4** — Neuraldev namespace | ✅ Autoloading ready |
| 🐘 **PHP 8.3** — Enums, readonly, attributes | ✅ Latest stable |

## 🏗️ Architecture

```
src/
├── Domain/          # Business logic, entities, value objects
│   ├── Entity/
│   ├── ValueObject/
│   └── Repository/  # Interfaces only
├── Application/     # Use cases, DTOs
│   ├── UseCase/
│   └── DTO/
├── Infrastructure/  # Framework adapters, DB, external services
│   ├── Persistence/
│   └── Symfony/
└── UI/              # Controllers, CLI commands
    ├── Controller/
    └── Command/
```

## 🚦 Quick Start

```bash
# Clone and set up
git clone https://github.com/joalvarezweingartt/php-boilerplate.git
cd php-boilerplate

# Start Docker environment
make setup

# Run tests
make test

# Static analysis
make stan

# Code style check
make cs-check
make cs-fix

# Enter container
make shell
```

## 🧪 Quality Gates

Every push runs through:
1. ✅ **Pest** — All feature and unit tests
2. ✅ **PHPStan (max)** — Zero errors allowed
3. ✅ **PHP-CS-Fixer** — PSR-12 compliance
4. ✅ **Docker build** — Image must compile

## 📦 Makefile Commands

```bash
make setup      # Install deps + Docker build + DB setup
make test       # Run Pest test suite
make stan       # PHPStan static analysis (max level)
make cs-check   # Check coding standards
make cs-fix     # Auto-fix coding standards
make shell      # Enter PHP container
make clean      # Clean up containers and volumes
```

## 📄 License

MIT — Use freely for any project.

---

**Built by [José Antonio Álvarez](https://github.com/joalvarezweingartt)** · Neuraldev LLC
