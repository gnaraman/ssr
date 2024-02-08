<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2021-02.php');

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
                &lt;Mr. Behind&gt; mixed media, variable installation, 2022
            </h2>

            <p class="txt_work mb20">
              (Sponsored By LG Display)
            </p>

            <img src="../../include/images/2022_01_01.jpg" alt="Mr. Behind, image1">
            <img src="../../include/images/2022_01_02.jpg" alt="Mr. Behind, image2">
            <img src="../../include/images/2022_01_03.jpg" alt="Mr. Behind, image3">
            <img src="../../include/images/2022_01_04.jpg" alt="Mr. Behind, image4" class="vertical">
            <p class="txt_work bottom vertical">
              《Never Alone》 exhibition display (Scene/2022)
            </p>

          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
