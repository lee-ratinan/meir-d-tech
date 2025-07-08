<section id="portfolio" class="portfolio section" style="margin-top: 100px">
    <!-- Section Title -->
    <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h1><?= lang('Theme.website-name') ?></h1>
        <h2><?= $categories_title ?? lang('Theme.pages.' . $slug) ?></h2>
    </div><!-- End Section Title -->
    <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters aos-init aos-animate d-none" data-aos="fade-up" data-aos-delay="200">
                <li data-filter="*" class="filter-active">
                    <i class="fa-solid fa-border-all"></i> ประเภทสินค้าทั้งหมด
                </li>
            </ul>
            <div class="row g-4 isotope-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" style="position: relative; height: 545.624px;">
                <?php foreach ($categories as $category): ?>
                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui" style="position: absolute; left: 0px; top: 0px;">
                    <article class="portfolio-entry">
                        <figure class="entry-image">
                            <img src="<?= base_url('img/product-categories/' . $category['slug'] . '.png') ?>" class="img-fluid" alt="<?= $category['name'] ?>" loading="lazy">
                            <div class="entry-overlay">
                                <div class="overlay-content">
                                    <h3 class="entry-title"><?= $category['name'] ?></h3>
                                    <div class="entry-links">
                                        <a href="<?= base_url('products/category/' .  $category['slug']) ?>">
                                            <i class="fa-solid fa-circle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                </div><!-- End Portfolio Item -->
                <?php endforeach; ?>
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section>