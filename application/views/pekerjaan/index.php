  <main id="main">
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Pengalaman Pekerjaan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title"></h3>
            <div class="resume-item">
              <?php
              foreach ($Allpekerjaan1 as $pekerjaan1) {
              ?>
                <h4><?= $pekerjaan1['nama_pekerjaan']; ?></h4>
                <h5><?= $pekerjaan1['lama_kerja']; ?></h5>
                <p><em>
                    <td><?= $pekerjaan1['nama_perusahaan']; ?>
                  </em></p>
              <?php } ?>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>

          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title"></h3>
            <div class="resume-item">
              <?php
              foreach ($Allpekerjaan2 as $pekerjaan2) {
              ?>
                <h4><?= $pekerjaan2['nama_pekerjaan']; ?></h4>
                <h5><?= $pekerjaan2['lama_kerja']; ?></h5>
                <p><em>
                    <td><?= $pekerjaan2['nama_perusahaan']; ?>
                  </em></p>
              <?php } ?>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->