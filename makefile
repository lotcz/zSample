APP_DIR = $(shell pwd)
Z_VERSION = v3
Z_DIR = $(APP_DIR)/../zEngine

perms:
	chown -R www-data:www-data $(APP_DIR)

pull:
	cd $(APP_DIR) && git pull

checkout:
	cd $(APP_DIR) && git checkout $(version)

z_update:
	cd $(Z_DIR) && make update

update: z_update pull perms

upgrade: pull checkout perms

install_z:
	git clone --depth 1 -b $(Z_VERSION) --single-branch https://github.com/lotcz/zEngine.git $(Z_DIR)

app_config:
	cp -R $(APP_DIR)/app/config/examples/. $(APP_DIR)/app/config

app_apache_install:
	cp $(APP_DIR)/install/zSample.conf /etc/apache2/sites-available
	sudo a2ensite zSample

install_app: app_config app_apache_install

install_db:
	cd $(APP_DIR)/install && php install.php

install_files: install_z install_app

adduser:
	cd $(APP_DIR)/install && php adduser.php --visitor_email="$(visitor_email)" --visitor_password="$(visitor_password)" --admin_email="$(admin_email)" --admin_password="$(admin_password)"

unit_test:
	phpunit --bootstrap tests/unit/autoload.php --testdox tests/unit

process_test:
	phpunit --bootstrap tests/process/autoload.php  --testdox tests/process

test: unit_test process_test
