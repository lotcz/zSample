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

z_install:
	git clone --depth 1 -b $(Z_VERSION) --single-branch https://github.com/lotcz/zEngine.git $(Z_DIR)

app_config:
	cp -R $(APP_DIR)/app/config/examples/. $(APP_DIR)/app/config

app_apache_install:
	cp $(APP_DIR)/zSample.conf /etc/apache2/sites-available

app_install: app_config app_apache_install

install: z_install app_install

init:
	cd $(APP_DIR) && php init.php $(root_name) $(root_pass)

unit_test:
	phpunit --bootstrap tests/unit/autoload.php --testdox tests/unit

process_test:
	cd $(APP_DIR)/tests/process && mvn test

test: unit_test process_test
