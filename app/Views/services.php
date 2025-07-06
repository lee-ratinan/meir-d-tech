<?php
$this->extend('_layout.php');
$this->section('content');
?>
    <section id="services" class="services section" style="margin-top:100px !important;">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2><?= lang('Theme.pages.' . $slug) ?></h2>
        </div><!-- End Section Title -->
        <?php
        $services = [
            [
                'bi bi-arrow-up-right',
                'จำหน่ายปั๊มอุตสาหกรรมคุณภาพสูง',
                'เราคัดเลือกแบรนด์ปั๊มที่ได้รับการยอมรับทั่วโลก เพื่อให้คุณมั่นใจในประสิทธิภาพและความทนทาน ไม่ว่าจะเป็นปั๊มสำหรับสารเคมี oil & gas น้ำเสีย น้ำดี หรือระบบสูบจ่ายในอุตสาหกรรมหนัก'
            ],
            [
                'bi bi-arrow-up-right',
                'ออกแบบและติดตั้งระบบบำบัดน้ำเสียและน้ำดี',
                'ครบถ้วนทั้งระบบบำบัดน้ำในโรงงาน, อาคารพาณิชย์, โรงแรม, ห้างสรรพสินค้า และระบบควบคุมอัตโนมัติ พร้อมแบบวิศวกรรมที่ผ่านการตรวจสอบอย่างละเอียด'
            ],
            [
                'bi bi-arrow-up-right',
                'บริการ PM และดูแลระบบระยะยาว',
                'ดูแลระบบของคุณให้ทำงานได้เต็มประสิทธิภาพ ลดความเสี่ยงในการหยุดงาน พร้อมรายงานและคำแนะนำจากวิศวกรมืออาชีพ'
            ],
            [
                'bi bi-arrow-up-right',
                'จำหน่ายอุปกรณ์อุตสาหกรรมชั้นนำหลากหลายรายการ',
                'เรามีเครือข่ายสินค้ากลุ่มอุตสาหกรรมจากแบรนด์ชั้นนำหลากหลายประเภท ให้คุณเลือกใช้งานอย่างมั่นใจ'
            ]
        ];
        ?>
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <?php foreach ($services as $i => $service) : ?>
                    <div class="col-lg-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="<?= ($i+1) * 100 ?>">
                        <div class="service-card position-relative z-1">
                            <div class="service-icon">
                                <i class="<?= $service[0] ?>"></i>
                            </div>
                            <h3><?= $service[1] ?></h3>
                            <p><?= $service[2] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>