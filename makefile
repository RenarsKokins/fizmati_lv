run-local:
	sudo systemctl start docker
	vendor/bin/sail up
down-local:
	vendor/bin/sail down
build-local:
	vendor/bin/sail artisan cache:clear
	vendor/bin/sail artisan view:clear
	vendor/bin/sail artisan route:clear
	vendor/bin/sail artisan config:clear
	vendor/bin/sail artisan migrate
	vendor/bin/sail artisan queue:restart
	vendor/bin/sail artisan storage:link
test:
	vendor/bin/sail artisan test
compile-css:
	npx mix watch