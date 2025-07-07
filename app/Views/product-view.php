<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="blog" class="blog section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <p>
                <a href="<?= base_url('products') ?>"><?= lang('Theme.pages.products') ?></a> /
                <a href="<?= base_url('products/category/' . $product['categories'][0]['slug']) ?>"><?= $product['categories'][0]['name'] ?></a> /
                <?= $title ?> /
            </p>
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= $product['title'] ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col col-md-10 col-lg-8">
                    <?php if (!empty($product['media'])) : ?>
                        <img src="<?= $product['media']['media_details']['sizes']['full']['source_url'] ?>" alt="<?= $product['title'] ?>" class="img-fluid mb-5" />
                    <?php endif; ?>
                    <article>
                        <?= $product['post_data']['content']['rendered'] ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>