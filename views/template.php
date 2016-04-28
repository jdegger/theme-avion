<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js', ['uikit-sticky',  'uikit-lightbox',  'uikit-parallax']) ?>
    </head>
    <body>

    <?php if (($params['header_layout'] == 'alt') && ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar'))) : ?>
        <?= $view->position('navbar', 'header-alt.php') ?>
    <?php endif ?>

    <div class="uk-container uk-container-center">

        <?php if (($params['header_layout'] == 'default') && ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar'))) : ?>
            <?= $view->position('navbar', 'header-default.php') ?>
        <?php endif ?>

        <?php if ($view->position()->exists('top')) : ?>
        <div id="tm-top" class="tm-top uk-block <?= $params['top_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('top', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_b')) : ?>
        <div id="tm-top" class="tm-top-b uk-block <?= $params['top_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('top_b', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_c')) : ?>
        <div id="tm-top" class="tm-top-c uk-block <?= $params['top_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('top_c', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('top_d')) : ?>
        <div id="tm-top" class="tm-top-d uk-block <?= $params['top_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('top_d', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <div id="tm-main" class="tm-main uk-block <?= $params['main_style'] ?>">

            <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">
                    <?= $view->render('content') ?>
                </main>

                <?php if ($view->position()->exists('sidebar')) : ?>
                <aside class="uk-width-medium-1-4 <?= $params['sidebar_first'] ? 'uk-flex-order-first-medium' : ''; ?>">
                    <?= $view->position('sidebar', 'position-panel.php') ?>
                </aside>
                <?php endif ?>

            </div>

        </div>

        <?php if ($view->position()->exists('bottom')) : ?>
        <div id="tm-bottom" class="tm-bottom uk-block <?= $params['bottom_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('bottom', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_b')) : ?>
        <div id="tm-bottom" class="tm-bottom-b uk-block <?= $params['bottom_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('bottom-b', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_c')) : ?>
        <div id="tm-bottom" class="tm-bottom-c uk-block <?= $params['bottom_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('bottom-c', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('bottom_d')) : ?>
        <div id="tm-bottom" class="tm-bottom-d uk-block <?= $params['bottom_style'] ?>">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('bottom-d', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

        <?php if ($view->position()->exists('footer')) : ?>
        <div id="tm-footer" class="tm-footer uk-block uk-block-secondary uk-contrast">

            <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                <?= $view->position('footer', 'position-grid.php') ?>
            </section>

        </div>
        <?php endif; ?>

    </div>

        <?php if ($view->position()->exists('offcanvas') || $view->menu()->exists('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">

                <?php if ($params['logo_offcanvas']) : ?>
                <div class="uk-panel uk-text-center">
                    <a href="<?= $view->url()->get() ?>">
                        <img src="<?= $this->escape($params['logo_offcanvas']) ?>" alt="">
                    </a>
                </div>
                <?php endif ?>

                <?php if ($view->menu()->exists('offcanvas')) : ?>
                    <?= $view->menu('offcanvas', ['class' => 'uk-nav-offcanvas']) ?>
                <?php endif ?>

                <?php if ($view->position()->exists('offcanvas')) : ?>
                    <?= $view->position('offcanvas', 'position-panel.php') ?>
                <?php endif ?>

            </div>
        </div>
        <?php endif ?>

        <?= $view->render('footer') ?>

    </body>
</html>
