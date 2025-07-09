<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="blog" class="blog section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <p><a href="<?= base_url('blog') ?>"><?= lang('Theme.pages.blog') ?></a> / <?= $post['title'] ?> /</p>
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= $post['title'] ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row">
                <div class="col col-md-10 col-lg-8">
                    <?php if (!empty($post['media'])) : ?>
                        <img src="<?= $post['media']['media_details']['sizes']['full']['source_url'] ?>" alt="<?= $post['title'] ?>" class="img-fluid mb-5" />
                    <?php endif; ?>
                    <p>
                        <?= lang('Blog.published', [format_post_date($post['post_data']['date'], $locale)]) ?> |
                        <?= (isset($post['author']['name']) ? lang('Blog.by', [$post['author']['name']]) : '') ?>
                        <?php if (!empty($post['post_data']['tags'])) : ?>
                            | <?= lang('Blog.tags') ?>
                            <?php foreach ($post['tags'] as $tag_data) : ?>
                                <a href="<?= base_url('blog?tag=' . $tag_data['id']) ?>" class="badge bg-warning"><?= urldecode($tag_data['name']) ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </p>
                    <hr />
                    <article>
                        <?= $post['post_data']['content']['rendered'] ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>