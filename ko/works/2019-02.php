<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-01.php');
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
                &lt;굿바이 체리장&gt; 30분, 영상 및 OBS 기반 퍼포먼스, 2019<br>
                <p class="tit_eng">&lt;Goodbye Cherry Jang&gt; 30min, video and OBS based performance, 2019 </p>
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://www.youtube.com/embed/ZEcvQOWrPh8" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>  
            </div>

            <img src="../../include/images/2019-01.jpg" alt="굿바이 체리장 영상 스틸컷">
            <img src="../../include/images/2019-01-02.jpg" alt="굿바이 체리장 전시 퍼포먼스">
            <p class="txt_work bottom">
              &lt;PERFORM 2019&gt; 퍼포먼스 스틸컷 (일민미술관)
            </p>

          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
