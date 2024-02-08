<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2017-01.php');

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
                &lt;나 안 죽었다!&gt; 230X330X200cm, 모터, 혼합매체 설치, 2017<br>
                <p class="tit_eng">&lt;I’m Not Dead!&gt; 230X330X200cm, motor, mixed media, 2017</p>
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://player.vimeo.com/video/252023215" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2017-14.jpg" alt="류성실, 나 안 죽었다! 작품 상세 이미지1">
            <img src="../../include/images/2017-15.jpg" alt="류성실, 나 안 죽었다! 작품 상세 이미지2">
            <img src="../../include/images/2017-16.jpg" alt="류성실, 나 안 죽었다! 작품 상세 이미지3">
            <img src="../../include/images/2017-17.jpg" alt="류성실, 나 안 죽었다! 작품 상세 이미지4">

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
