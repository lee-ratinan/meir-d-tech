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
                'fa-solid fa-arrow-up-from-water-pump',
                'จำหน่ายปั๊มอุตสาหกรรมคุณภาพสูง',
                'เราคัดเลือกแบรนด์ปั๊มที่ได้รับการยอมรับทั่วโลก เพื่อให้คุณมั่นใจในประสิทธิภาพและความทนทาน ไม่ว่าจะเป็นปั๊มสำหรับสารเคมี oil & gas น้ำเสีย น้ำดี หรือระบบสูบจ่ายในอุตสาหกรรมหนัก'
            ],
            [
                'fa-solid fa-cog',
                'ออกแบบและติดตั้งระบบบำบัดน้ำเสียและน้ำดี',
                'ครบถ้วนทั้งระบบบำบัดน้ำในโรงงาน, อาคารพาณิชย์, โรงแรม, ห้างสรรพสินค้า และระบบควบคุมอัตโนมัติ พร้อมแบบวิศวกรรมที่ผ่านการตรวจสอบอย่างละเอียด'
            ],
            [
                'fa-solid fa-handshake',
                'บริการ PM และดูแลระบบระยะยาว',
                'ดูแลระบบของคุณให้ทำงานได้เต็มประสิทธิภาพ ลดความเสี่ยงในการหยุดงาน พร้อมรายงานและคำแนะนำจากวิศวกรมืออาชีพ'
            ],
            [
                'fa-solid fa-thumbs-up',
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
                                <i class="<?= $service[0] ?> fa-2x"></i>
                            </div>
                            <h3><?= $service[1] ?></h3>
                            <p><?= $service[2] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="steps" class="steps section">
        <?php
        $why = [
            ['fa-solid fa-screwdriver-wrench', 'ประสบการณ์จริงในภาคสนาม'],
            ['fa-solid fa-user-tie', 'ให้คำปรึกษาโดยทีมวิศวกรผู้เชี่ยวชาญ'],
            ['fa-solid fa-stopwatch-20', 'สะดวกและรวดเร็ว ในการประสานงาน'],
            ['fa-solid fa-tree', 'โซลูชันที่เป็นมิตรต่อสิ่งแวดล้อม'],
            ['fa-solid fa-list-check', 'สต็อกสินค้าและอะไหล่พร้อมส่ง'],
            ['fa-solid fa-hand-holding-heart', 'บริการหลังการขายที่ใส่ใจเสมอ']
        ];
        ?>
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h1><?= lang('Theme.website-name') ?></h1>
            <h2>ทำไมต้องเลือก Meir D-Tech?</h2>
        </div><!-- End Section Title -->
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="steps-wrapper">
                <?php foreach ($why as $i => $item) : ?>
                    <div class="step-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="<?= ($i+1)*200 ?>">
                        <div class="step-content">
                            <div class="step-icon">
                                <i class="<?= $item[0] ?> fa-2x"></i>
                            </div>
                            <div class="step-info">
                                <span class="step-number"><i class="fa-solid fa-caret-right"></i><i class="fa-solid fa-caret-right"></i> <?= ($i+1) ?></span>
                                <h3><?= $item[1] ?></h3>
                            </div>
                        </div>
                    </div><!-- End Step Item -->
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container">
            <div class="row my-5 py-5">
                <div class="col text-center">
                    <i class="fa-solid fa-quote-left fa-2x"></i>
                    <h3 class="my-5">เราคือพาร์ทเนอร์ที่คุณวางใจได้ในระบบน้ำและอุตสาหกรรม</h3>
                </div>
            </div>
        </div>
    </section>
<?php
$this->endSection();
?>