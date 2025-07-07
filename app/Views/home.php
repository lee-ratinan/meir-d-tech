<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 content-col aos-init aos-animate" data-aos="fade-up">
                    <div class="content">
                        <div class="agency-name">
                            <h4>บริษัทผู้นำ</h4>
                        </div>
                        <div class="main-heading">
                            <h1>สินค้าอุตสาหกรรม<br>ครบวงจร</h1>
                        </div>
                        <div class="divider"></div>
                        <div class="description">
                            <p><b>บริษัท เมียร์ ดี-เทค จำกัด</b>คือผู้เชี่ยวชาญในการจัดหาและให้บริการด้านระบบอุตสาหกรรม โดยเฉพาะในกลุ่ม <b>ปั๊มอุตสาหกรรม</b> และ <b>ระบบบำบัดน้ำเสีย-น้ำดี</b> เราคัดสรรสินค้าคุณภาพจากผู้ผลิตชั้นนำระดับโลก พร้อมให้บริการแบบครบวงจร ตั้งแต่การ <b>ออกแบบระบบ, ติดตั้ง, ให้คำปรึกษา</b>, ไปจนถึง <b>ดูแลบำรุงรักษา (PM)</b> อย่างต่อเนื่อง</p>
                        </div>
                        <div class="cta-button">
                            <a href="<?= base_url('services') ?>" class="btn">
                                <span>รู้จักบริการของเรา</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 aos-init aos-animate" data-aos="zoom-out">
                    <div class="visual-content">
                        <div class="fluid-shape">
                            <img src="<?= base_url('img/hero-img.png') ?>" alt="สินค้าอุตสาหกรรม" class="fluid-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>