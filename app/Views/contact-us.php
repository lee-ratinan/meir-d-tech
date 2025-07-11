<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="contact" class="contact section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= lang('Theme.pages.' . $slug) ?></h2>
        </div><!-- End Section Title -->
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 mb-5">
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="info-content">
                            <h4>ที่อยู่</h4>
                            <p><?= getenv('CONTACT_ADDRESS') ?><br><?= getenv('CONTACT_PROVINCE') ?> <?= getenv('CONTACT_POSTAL_CODE') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>ข้อมูลติดต่อ</h4>
                            <p><a href="mailto:<?= getenv('CONTACT_EMAIL') ?>"><?= getenv('CONTACT_EMAIL') ?></a></p>
                            <p><a href="tel:<?= getenv('CONTACT_PHONE_E164') ?>"><?= getenv('CONTACT_PHONE_NUMBER') ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>เวลาทำการ</h4>
                            <p>จันทร์-ศุกร์: <?= getenv('CONTACT_HOURS_WEEKDAY') ?></p>
                            <p>เสาร์: <?= getenv('CONTACT_HOURS_SATURDAY') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps (Full Width) -->
        <div class="map-section aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1738.4347524620994!2d100.70927099083987!3d14.004851932058523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDAwJzE3LjQiTiAxMDDCsDQyJzMzLjMiRQ!5e0!3m2!1sen!2ssg!4v1752243712258!5m2!1sen!2ssg" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Form Section (Overlapping) -->
        <div class="container form-container-overlap">
            <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-10">
                    <div class="contact-form-wrapper">
                        <h2 class="text-center mb-4"><?= lang('Contact.form.title') ?></h2>
                        <form action="<?= base_url('contact-us') ?>" method="post" class="php-email-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="d-none"><?= lang('Contact.form.name') ?></label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-user message-icon"></i>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="<?= lang('Contact.form.name') ?>" required="" style="text-indent:25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="d-none"><?= lang('Contact.form.email') ?></label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-envelope message-icon"></i>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="<?= lang('Contact.form.email') ?>" required="" style="text-indent:25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone" class="d-none"><?= lang('Contact.form.phone') ?></label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-phone message-icon"></i>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="<?= lang('Contact.form.phone') ?>" required="" style="text-indent:25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="d-none"><?= lang('Contact.form.message') ?></label>
                                        <div class="input-with-icon">
                                            <i class="fa-solid fa-comment-dots message-icon"></i>
                                            <textarea class="form-control" name="message" id="message" placeholder="<?= lang('Contact.form.message') ?>" style="text-indent:25px;height:180px" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="loading">กำลังโหลด</div>
                                    <div class="error-message"><?= lang('Contact.form.responses.error') ?></div>
                                    <div class="sent-message"><?= lang('Contact.form.responses.success') ?></div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-submit"><?= lang('Contact.form.send') ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>