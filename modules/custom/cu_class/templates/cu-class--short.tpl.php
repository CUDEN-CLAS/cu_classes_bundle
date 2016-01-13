<?php dpm($content); ?>
<div class="class-view-mode-short class-entity-wrapper">
  <div class="class-wrapper">
    <div class="class-title-wrapper">
      <h2 class="class-format"><?php print $format; ?></h2>
    </div>
    <div class="class-content">
      <div class="row clearfix">
        <div class="class-meta class-section-parent col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="class-section">
                <h3>Section</h3>
                <?php print $content['field_class_class_section'][0]['#markup']; ?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="class-section">
                <h3>Session</h3>
                <?php print $session; ?>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="class-section">
                <h3>Class No.</h3>
                <?php print render($content['field_class_class_nbr']); ?>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <?php if (!empty($course_requirements)): ?>
                <div class="class-section">
                  <h3>Core Requirements</h3>
                  <?php print $course_requirements; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="class-date-instructor col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="class-section">
            <h3>Course Dates</h3>
            <?php print $start_date; ?> - <?php print $end_date; ?>
          </div>
          <?php if(!empty($content['field_class_ssr_instr_long'][0]['#markup'])): ?>
            <div class="class-section">
              <h3>Instructor</h3>
              <?php print render($content['field_class_ssr_instr_long']); ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($content['field_class_ssr_mtg_loc_long'][0]['#markup'])): ?>
            <div class="class-section">
              <h3>Location</h3>
              <?php print render($content['field_class_ssr_mtg_loc_long']); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="class-availabilitycol-lg-3 col-md-3 col-sm-3 col-xs-12">
          <div class="class-section">
            <h3>Availability</h3>
            <?php print $available; ?>
            <div class="updated">
              <?php print $updated; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
