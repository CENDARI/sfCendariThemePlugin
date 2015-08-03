<?php echo get_component('default', 'updateCheck') ?>

<?php if ($sf_user->isAdministrator() && (string)QubitSetting::getByName('siteBaseUrl') === ''): ?>
    <div id="update-check">
        <?php echo link_to('Please configure your site base URL', 'settings/siteInformation', array('rel' => 'home', 'title' => __('Home'))) ?>
    </div>
<?php endif; ?>

<header>
    <div class="row" id="top-bar">
        <div id="account-controls-container">
            <?php echo get_component('menu', 'userMenu') ?>
        </div>
        <div id="logo-container">
            <?php echo link_to(image_tag('/plugins/sfCendariThemePlugin/images/cendari_logo.png'), '@homepage', array('id' => 'logo', 'rel' => 'home')) ?>
        </div>
        <div id="search-controls-container">
            <div id="search-bar">
                <?php echo get_component('search', 'box') ?>

                <?php echo get_component('menu', 'browseMenu', array('sf_cache_key' => $sf_user->getCulture() . $sf_user->getUserID())) ?>
            </div>
        </div>
    </div>
</header>

<nav id="menu-bar">
    <?php echo get_component('menu', 'quickLinksMenu') ?>

    <?php echo get_component('menu', 'changeLanguageMenu') ?>

    <?php echo get_component('menu', 'mainMenu', array('sf_cache_key' => $sf_user->getCulture() . $sf_user->getUserID())) ?>

    <?php echo get_component_slot('header') ?>
</nav>
