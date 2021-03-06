<div class="container p-1">

	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		<a href="<?=$this->url("") ?>" class="navbar-brand"><?=$this->getData('site_title') ?></a>

		<ul class="navbar-nav mr-auto">
			<a class="nav-link" href="<?=$this->url("test") ?>">Test</a>
			<a class="nav-link" href="<?=$this->url("admin") ?>">Admin</a>
		</ul>

		<ul class="navbar-nav">
			<?php
				if ($this->isCustAuth()) {
					?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="customerDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?=$this->getCustomer()->getLabel() ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="customerDropdown">
								<a class="dropdown-item" href="<?=$this->url("profile") ?>"><?=$this->t('User Profile') ?></a>
								<a class="dropdown-item log-out-menu-item" href="<?=$this->url("logout") ?>"><?=$this->t('Log Out') ?></a>
							</div>
						</li>
					<?php
				} else {
					?>
						<a class="nav-link" href="<?=$this->url("login") ?>"><?=$this->t('Sign In') ?></a>
					<?php
				}
			?>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?=$this->z->i18n->selected_language->val('language_name') ?>
				</a>

				<div class="dropdown-menu" aria-labelledby="languageDropdown">
					<?php
						foreach ($this->z->i18n->available_languages as $language) {
							?>
								<a class="dropdown-item <?=($this->z->i18n->selected_language === $language) ? 'active' : ''; ?>" href="#" onclick="javascript:changeLanguage(event, <?=$language->val('language_id'); ?>);return false;"><?=$this->t($language->val('language_name')) ?></a>
							<?php
						}
					?>
				</div>
			</li>
		</ul>

	</nav>

	<main role="main" class="p-1">
		<h1 class="main-title"><?=$this->getData('page_title') ?></h1>
		<?php
			$this->renderMessages();
			$this->renderPageView();
		?>
	</main>

</div>
