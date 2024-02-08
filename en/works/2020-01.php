<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-06.php');

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
                &lt;Bigking Travel 2020&gt;, 15min, single channel video with user interaction, 2020
            </h2>

            <p class="link_go"><a href="http://www.bigkingtravel.com" target="_blank">Go link &nearr;&#xFE0E; </a></p>

            <img src="../../include/images/2020_01_01.jpg" alt="Sungsil Ryu, Bigking Travel 2020 image1" class="vertical">
            <img src="../../include/images/2020_01_02.jpg" alt="Sungsil Ryu, Bigking Travel 2020 image2" class="vertical">
            <img src="../../include/images/2020_01_03.jpg" alt="Sungsil Ryu, Bigking Travel 2020 image3" class="vertical">
            <img src="../../include/images/2020_01_04.jpg" alt="Sungsil Ryu, Bigking Travel 2020 image4" class="vertical">
            <img src="../../include/images/2020_01_05.jpg" alt="Sungsil Ryu, Bigking Travel 2020 image5" class="vertical">
          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
