  <main id="main">
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>History Pendididkan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sekolah Dasar</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsd as $sd) {
              ?>
                <h4><?= $sd['nama_sd']; ?></h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $sd['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $sd['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $sd['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
            <h3 class="resume-title">Sekolah Menengah Pertama</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsmp as $smp) {
              ?>
                <h4><?= $smp['nama_smp']; ?></h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $smp['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $smp['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $smp['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sekolah Menengah Akhir</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Allsmk as $smk) {
              ?>
                <h4><?= $smk['nama_smk']; ?></h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $smk['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Jurusan:</strong> <span><?= $smk['jurusan']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $smk['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $smk['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
            <h3 class="resume-title">Perguruan Tinggi</h3>
            <div class="resume-item pb-0">
              <?php
              foreach ($Alluniv as $univ) {
              ?>
                <h4><?= $univ['nama_univ']; ?></h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $univ['alamat']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Prodi:</strong> <span><?= $univ['prodi']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Masuk:</strong> <span><?= $univ['tahun_masuk']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tahun Lulus:</strong> <span><?= $univ['tahun_lulus']; ?></span></li>
                </ul>
              <?php } ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->