<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2020-01.php');

  });

</script>
    <!-- container -->
    <div id="container">

      <!-- sub_gnb -->
        <?php include_once __DIR__."/../gnb_work.php"; ?>
      <!-- //sub_gnb -->

      <!-- content -->
      <div id="content">
          <div class="text">
            <h2>
                &lt;Never Ending Family&gt; 2min, single channel video, 2020
            </h2>

            <p class="link_go"><a href="http://www.you-never-die.site" target="_blank">Go link &nearr;&#xFE0E; </a></p>

            <img src="../../include/images/2020_02_01.jpg" alt="Sungsil Ryu, Never Ending Family image1" class="vertical">
            <img src="../../include/images/2020_02_02.jpg" alt="Sungsil Ryu, Never Ending Family image2" class="vertical">
            <img src="../../include/images/2020_02_03.jpg" alt="Sungsil Ryu, Never Ending Family image3">
            <p class="txt_work bottom">
                《NAME나메》 exhibition display (Museumhead/2021)
            </p>

            <img src="../../include/images/2020_02_04.jpg" alt="Sungsil Ryu, Never Ending Family image4">
            <p class="txt_work bottom">
                《Exclusive Santa》 exhibition display (GCS/2022)
            </p>
          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
