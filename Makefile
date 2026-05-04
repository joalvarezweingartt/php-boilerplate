.PHONY: setup test stan lint fix clean docker-build

setup:
	composer install

test:
	vendor/bin/pest

stan:
	vendor/bin/phpstan analyse --level=max src tests

lint:
	vendor/bin/php-cs-fixer fix --dry-run --diff

fix:
	vendor/bin/php-cs-fixer fix

clean:
	rm -rf vendor .phpunit.cache

docker-build:
	docker compose build

docker-test:
	docker compose run --rm php make test
