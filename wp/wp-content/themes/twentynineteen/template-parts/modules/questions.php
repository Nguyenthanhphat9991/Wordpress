 <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">
        <?php 
          $q_title = get_field('q_title');
          $q_content = get_field('q_content');
          $ask_1 = get_field('ask_1');
          $ans_1 = get_field('ans_1');
          $ask_2 = get_field('ask_2');
          $ans_2 = get_field('ans_2');
          $ask_3 = get_field('ask_3');
          $ans_3 = get_field('ans_3');
        ?>
        <div class="section-title">
          <h2><?php echo $q_title ?></h2>
          <p><?php echo $q_content ?></p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"><?php echo $ask_1 ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  <?php echo $ans_1 ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed"><?php echo $ask_2 ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  <?php echo $ans_2 ?>
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed"><?php echo $ask_3 ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  <?php echo $ans_3 ?>
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->