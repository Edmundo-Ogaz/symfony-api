build:
	docker build -t prueba/symfony-api:latest .

run:
	docker run -p 8001:80 -v `pwd`:/var/www prueba/symfony-api:latest

show-routers:
	php bin/console debug:router

build-entities:
	php bin/console doctrine:mapping:import App\\EntityCarga annotation --path=src/EntityCarga

build-entities-set-get:
	php bin/console make:entity --regenerate App\\EntityCarga