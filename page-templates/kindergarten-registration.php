<?php
/*
Template Name: Kindergarten Registration
*/
?>
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <?php $has_left = FALSE; ?>
    <?php $has_right = FALSE; ?>
    <?php if (is_active_sidebar('sidebar-left')) {$has_left = TRUE;} ?>
    <?php if (is_active_sidebar('sidebar-right')) {$has_right = TRUE;} ?>

    <?php
    # Both sidebars
    if (($has_left == TRUE) and ($has_right == TRUE)):
      echo '<div class="col-sm-3 col-md-2 col-lg-2">';
      get_sidebar('left');
      echo '</div>';

    # Just left sidebar
    elseif (($has_left == TRUE) and ($has_right == FALSE)):
      echo '<div class="col-sm-3 col-lg-3">';
      get_sidebar('left');
      echo '</div>';

    # Just right sidebar
      # Nothing to do

    # No sidebars
      # Nothing to do
    endif;
    ?>

    <?php
    # Both sidebars
    # content area
    if (($has_left == TRUE) and ($has_right == TRUE)):
      echo '<div class="col-sm-6 col-md-8 col-lg-8">';

    # Just left sidebar
    elseif (($has_left == TRUE) and ($has_right == FALSE)):
      echo '<div class="col-sm-9 col-lg-9">';

    # Just right sidebar
    elseif (($has_left == FALSE) and ($has_right == TRUE)):
      echo '<div class="col-sm-8">';

    # No sidebars
    elseif (($has_left == FALSE) and ($has_right == FALSE)):
      echo '<div class="col-sm-12 col-lg-12">';

    endif;
    ?>

    <?php // check if the post has a Post Thumbnail assigned to it.
      if ( has_post_thumbnail() ) {
        if (($has_left == TRUE) and ($has_right == TRUE)):
          the_post_thumbnail('wrdsb-two-sidebars');
        elseif (($has_left == TRUE) and ($has_right == FALSE)):
          the_post_thumbnail('wrdsb-one-sidebar');
        elseif (($has_left == FALSE) and ($has_right == TRUE)):
          the_post_thumbnail('wrdsb-one-sidebar');
        elseif (($has_left == FALSE) and ($has_right == FALSE)):
          the_post_thumbnail('wrdsb-full-width');
        endif;
      }
    ?>

<h1>How to Register for Kindergarten</h1>
<p>
  We are pleased to provide new Kindergarten parents with an opportunity 
  to access the forms required for student registration and review 
  pertinent information online. Links to the forms and a list of documents 
  you will need to bring to your registration appointment can be 
  found on this page.
</p>
<p>
  How to Register:
</p>
<ol>
  <li>
    <p>Determine which school your child should attend.</p>
    <p><a target="_blank" href="https://bpweb.stswr.ca/">Which school do I attend?</a>.</p>
  </li>
  <li>
    <p>Contact your child’s school to set up an appointment for registration.</p>
    <p><a target="_blank" href="http://www.wrdsb.ca/our-schools/schools/">WRDSB Schools</a></p>
  </li>
  <li>
    <p>You may download, print and complete the form(s) below in preparation for your registration appointment.</p>
    <p><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Student_Reg.pdf">Student Registration Form (IS-09-H)</a> – be sure to complete both sides and provide your signature at the bottom of the second page.</p>
    <p><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/FS-09-ESL.pdf">Confirmation of Pupil Eligibility for ESL Funding - (FS-09-ESL)</a> – this form is only to be completed if your child was born in a country outside of Canada.</p>
    <p><a target="_blank" href="https://e-immunization.regionofwaterloo.ca/">Student Immunization Information</a> - submit your child's immunization information online</a> directly to the Region of Waterloo Public Health.</p>
    <p><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Transportation-Do-Not-Ride-Form-final.pdf">Do Not Ride Form</a> - This form is to be completed by parents whose children qualify for bussing but who will not ride because the parent has made alternative arrangements.</p>
    <p>For families unable to submit the immunization information electronically, a paper copy of the form may be obtained from your school office at the time of registration</p>
    <p>Families unable to complete the above forms electronically may obtain paper copies from their school office at time of registration.</p>
  </li>
  <li>
    <p>In addition to the above forms please bring the following documentation to your registration appointment.</p>
    <p>Proof of Birth – You are required to bring <strong>one</strong> of the following documents:</p>
    <ul>
      <li>Canadian Birth Certificate</li>
      <li>Baptismal Certificate</li>
      <li>Statement of Live Birth</li>
      <li>Canadian Passport</li>
    </ul>
    <p>Proof of Address – You are required to bring <strong>one</strong> of the following documents:</p>
    <ul>
      <li>Lease/Rental Agreement</li>
      <li>Real Estate Document</li>
      <li>Driver's License</li>
      <li>Utility Bill (gas, hydro, water, etc.)</li>
      <li>Bank Statement</li>
      <li>Credit Card Statement</li>
    </ul>
    <p>Canadian Citizenship or Immigration Status - If your child was born outside of Canada, you are required to bring <strong>one</strong> of the following documents:</p>
    <ul>
      <li>Canadian Passport</li>
      <li>Certificate of Canadian Citizenship</li>
      <li>Confirmation of Permanent Residence</li>
      <li>Permanent Resident Card</li>
      <li>Certificate of Indian Status Card</li>
      <li>Letter of Admission assigned by the WRDSB enrolment officer, 519-570-0003 ext. 4350</li>
    </ul>
  </li>
  <li>
    <p>For more information about kindergarten parents are encouraged to review the following:</p>
    <ul>
      <li><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Off-to-School-Booklet.pdf">Off to School Booklet</a></li>
      <li><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Before_After-Programs-2015-web.pdf">Before and After School Programs</a></li>
      <li><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Kindergarten_Library_Flyer.pdf">Welcome to your School Library</a></li>
      <li><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Referral-List-2014-15.pdf">Region of Waterloo Referral List</a></li>
      <li><a target="_blank" href="">Public health letter regarding Nipissing Screen</a></li>
      <li><a target="_blank" href="">Nutri-eStep program information</a></li>
      <li><a target="_blank" href="http://www.wrdsb.ca/wp-content/uploads/Eye-See-Eye-Learn.pdf">Eye See.....Eye Learn</a></li>
    </ul>
  </li>
  <li>
    <p>Spring Family Orientation Event - schools will offer an opportunity for families to be welcomed and learn more about the Kindergarten experience. Be sure to ask for these details at the time of your registration appointment.</p>
  </li>
  <li>
    <p>To receive ongoing communications throughout the school year:</p>
    <ul>
      <li>Subscribe by email on your school's website</li>
      <li>Register for School-Day if your school uses School-Day</li>
    </ul>
  </li>
</ol>

    <?php
      // Start the Loop.
      while ( have_posts() ) : the_post();
        if ($post->post_content != "") {
          the_title('<h1>', '</h1>');
          the_content();
        }
        edit_post_link('Edit');
        $igc=0;
        foreach((get_the_category()) as $category) {
          if (strtolower($category->cat_name) != 'uncategorized') {
            $igc = 1;
          }
        }
        if ($igc == 1) {
          echo '<p>Categories: ';
          the_category(',');
          echo '</p>';
        }
        $number_of_tags = count(get_terms('post_tags'));
        if ($number_of_tags > 0) {
          the_tags();
        }
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
      endwhile;
    ?>

    </div> <!-- end content area -->

    <?php
    # Both sidebars
    # right column
    if (($has_left == TRUE) and ($has_right == TRUE)):
      echo '<div class="col-sm-3 col-md-2 col-lg-2">';
      get_sidebar('right');
      echo '</div>';

    # Just left sidebar
      # Nothing to do

    # Just right sidebar
    elseif (($has_left == FALSE) and ($has_right == TRUE)):
      echo '<div class="col-sm-4"">';
      get_sidebar('right');
      echo '</div>';

    # No sidebars
      # Nothing to do

    endif;
    ?>

  </div>
</div>

<?php get_footer(); ?>
