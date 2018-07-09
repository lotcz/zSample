WWW_DIR = /var/www
Z_VERSION = v2
Z_DIR = $(WWW_DIR)/zEngine
APP_DIR = $(WWW_DIR)/zSample

perms:
	chown -R www-data:www-data $(APP_DIR)

pull:
	cd $(APP_DIR)
	git pull

checkout:
	cd $(APP_DIR)
	git checkout $1

z_update:
	cd $(Z_DIR)
	./make update

update: pull perms

upgrade: pull checkout perms

z_install:
	git clone --depth 1 -b $(Z_VERSION) --single-branch https://github.com/lotcz/zEngine.git $(Z_DIR)

app_install:
	cd $(APP_DIR)/app/config
	cp examples/* .

install: z_install app_install