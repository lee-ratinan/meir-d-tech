<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="about" class="about section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= lang('Theme.pages.' . $slug) ?></h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-image position-relative">
                        <img src="<?= base_url('img/about-us.png') ?>" class="img-fluid rounded-4 shadow-sm" alt="About Image" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <h3>บริษัท เมียร์ ดี-เทค จำกัด (Meir D-Tech Co., Ltd.)</h3>
                        <p class="lead">เราคือผู้เชี่ยวชาญด้านโซลูชันสำหรับระบบอุตสาหกรรมครบวงจร ด้วยประสบการณ์และความเชี่ยวชาญเฉพาะทาง บริษัท เมียร์ ดี-เทค จำกัด ดำเนินธุรกิจนำเข้าและจัดจำหน่าย<strong>ปั๊มอุตสาหกรรม</strong>คุณภาพสูงจากต่างประเทศ รวมถึงสินค้าชั้นนำในภาคอุตสาหกรรมหลากหลายประเภท ครอบคลุมหลายแบรนด์ที่ได้รับการยอมรับในระดับสากล</p>
                        <p>นอกจากการเป็นผู้นำเข้าและผู้จัดจำหน่าย เรายังให้บริการ <strong>ออกแบบ ให้คำปรึกษา และติดตั้งระบบบำบัดน้ำเสียและน้ำดี</strong> สำหรับโรงงานอุตสาหกรรม อาคารพาณิชย์ และโครงการขนาดใหญ่ พร้อมบริการ <strong>PM (Preventive Maintenance)</strong> และดูแลระบบอย่างต่อเนื่องเพื่อให้มั่นใจว่าอุปกรณ์และระบบของลูกค้า ดำเนินงานได้อย่างมีประสิทธิภาพสูงสุด</p>
                        <div class="row g-4 mt-3">
                            <div class="col aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                                <div class="feature-item">
                                    <i class="fa-solid fa-circle-check fa-2x mb-3"></i>
                                    <h4>วิสัยทัศน์</h4>
                                    <p>เป็นผู้นำด้านการจัดหาโซลูชันระบบน้ำและเครื่องจักรอุตสาหกรรมในประเทศไทย ที่ตอบโจทย์ทั้งด้านคุณภาพ ประสิทธิภาพ ความรวดเร็วและความยั่งยืน</p>
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-5">พันธกิจ</h4>
                        <ul>
                            <li>คัดสรรสินค้าคุณภาพระดับสากล เพื่อตอบสนองความต้องการของลูกค้าในทุกอุตสาหกรรม</li>
                            <li>พัฒนาโซลูชันด้านระบบน้ำ และให้บริการหลังการขายที่น่าเชื่อถือ</li>
                            <li>มุ่งมั่นในความพึงพอใจสูงสุดของลูกค้า พร้อมให้คำปรึกษาเชิงวิศวกรรมที่ตอบโจทย์จริง</li>
                        </ul>
                        <a href="<?= base_url('services') ?>" class="btn btn-primary mt-4">รู้จักบริการของเรา <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>