<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-02.php');
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
                &lt;Ching Chen Zhang Lung Chih Rock&gt; 70X10X190cm, mixed media, 2019
            </h2>

            <img src="../../include/images/2019_06_01.jpg" alt="Sungsil Ryu, Ching Chen Zhang Lung Chih Rock image1" class="vertical">
            <img src="../../include/images/2019_06_02.jpg" alt="Sungsil Ryu, Ching Chen Zhang Lung Chih Rock image2" class="vertical">
            <img src="../../include/images/2019_06_03.jpg" alt="BigKing Travel Ching-Chen Tour exhibition display">
            <p class="txt_work bottom">
              《BigKing Travel Ching-Chen Tour》 exhibition display (Post Territory Ujeongguk)
            </p>

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
