<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').hide();

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
                2016년 이전 작업<br>
                <p class="tit_eng">Works before 2016</p>
            </h2>

            <img src="../../include/images/2016-1.jpg" class="long" alt="류성실, 2016년 이전 작업 이미지1">
            <img src="../../include/images/2016-2.jpg" class="long" alt="류성실, 2016년 이전 작업 이미지2">
            <img src="../../include/images/2016-3.jpg" class="long" alt="류성실, 2016년 이전 작업 이미지3">
            <img src="../../include/images/2016-4.jpg" class="long" alt="류성실, 2016년 이전 작업 이미지4">
            <img src="../../include/images/2016-5.jpg" alt="2016년 이전 작업 전시 전경1">
            <img src="../../include/images/2016-6.jpg" alt="2016년 이전 작업 전시 전경2">

            <div class="iframeWrapper">
              <iframe src="https://player.vimeo.com/video/178886991" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
