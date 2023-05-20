vendor-install:
	docker exec -it fibo-be-php sh -c "composer install && composer dump-autoload"

vendor-update:
	docker exec -it fibo-be-php sh -c "composer update && composer dump-autoload"

test:
	docker exec -it fibo-be-php sh -c "cd /var/www/ && composer run test"

sh-fibo-be-php:
	docker exec -it fibo-be-php sh

build-no-cache:
	docker-compose build --no-cache

up-d:
	docker-compose up -d

# Using it in the first build is enough.
init: build-no-cache up-d vendor-install


app-logs:
	docker exec -it fibo-be-php sh -c "tail -f /tmp/app.log"

logs:
	docker-compose logs -f

vendor-clean:
	sudo rm -R vendor/*
				
coverage-clean:
	sudo rm -R tests/_output/coverage*


#prune is good way of cleaning all images builds before doing it again
prune:
	docker system prune -a -f && docker volume prune -f

##  docker rmi -f $(docker images -aq)
	