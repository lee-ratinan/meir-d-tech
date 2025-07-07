<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="blog" class="blog section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <p><a href="<?= base_url('products') ?>"><?= lang('Theme.pages.products') ?></a> / <?= $title ?> /</p>
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= $title ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row mb-3">
                <div class="d-none d-md-block col-md-6 col-lg-8">&nbsp;</div>
                <div class="col-md-6 col-lg-4">
                    <form method="get">
                        <label for="q" class="d-none"><?= lang('Blog.buttons.search') ?></label>
                        <div class="input-group">
                            <input class="form-control" id="q" name="q" placeholder="<?= lang('Blog.buttons.search') ?>" required />
                            <button class="btn btn-primary" type="submit"><?= lang('Blog.buttons.search') ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-10 col-lg-8">
                    แสดงหน้าที่ <?= $page ?> จาก <?= $products['total_pages'] ?> หน้า | สินค้าทั้งหมด: <?= $products['total_posts'] ?>
                    <?php if (!empty($query)) : ?>
                        <br>แสดงผลการค้นหาคำว่า: <?= $query ?> | <a href="<?= base_url('products/category/' . $category_slug) ?>"><?= lang('Blog.buttons.clear') ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php if (empty($products['posts'])) : ?>
                        <div class="alert alert-warning" role="alert">
                            ไม่พบสินค้าภายใต้ประเภทนี้
                        </div>
                    <?php else : ?>
                        <div class="row">
                        <?php foreach ($products['posts'] as $product) : ?>
                            <div class="col-6 col-md-4 col-lg-3 mb-3">
                                <h2 class="mb-3"><a href="<?= base_url('products/view/' . $product['slug']) ?>"><?= $product['title'] ?></a></h2>
                                <?php if (0 < $product['featured_image'] && isset($products['media'][$product['featured_image']])) : ?>
                                    <a href="<?= base_url('products/view/' . $product['slug']) ?>"><img src="<?= $products['media'][$product['featured_image']] ?>" alt="<?= $product['title'] ?>" class="img-fluid img-thumbnail img-blog-thumbnail" /></a>
                                <?php endif; ?>
                                <div class="blog-excerpt my-2"><?= $product['excerpt'] ?></div>
                                <div class="my-2"><a href="<?= base_url('products/view/' . $product['slug']) ?>"><?= lang('Blog.read-more') ?></a></div>
                                <hr class="my-3" />
                            </div>
                        <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <!-- PREV -->
                    <?php if (1 == $page) : ?>
                        <?= lang('Blog.buttons.previous') ?>
                    <?php else : ?>
                        <a href="?p=<?= $page - 1 ?>"><i class="fa-solid fa-caret-left"></i> <?= lang('Blog.buttons.previous') ?></a>
                    <?php endif; ?>
                    <!-- CURRENT PAGE -->
                    | <?= lang('Blog.page', [$page]) ?> |
                    <!-- NEXT -->
                    <?php if ($products['total_pages'] >= $page + 1) : ?>
                        <a href="?&p=<?= $page + 1 ?>"><?= lang('Blog.buttons.next') ?> <i class="fa-solid fa-caret-right"></i></a>
                    <?php else: ?>
                        <?= lang('Blog.buttons.next') ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>