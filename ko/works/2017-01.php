<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    // $('.go_next').attr('href','2016.php');
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
                &lt;감동의 눈물의 하늘에 계신 사랑합니다&gt; 3분 5초, 싱글채널 영상, 2017<br>
                <p class="tit_eng">&lt;The Letter for You&gt; 3min 5sec, television broadcast audio clip, single channel video, 2017</p>
            </h2>

            <img src="../../include/images/2017-18.jpg" alt="류성실, 감동의 눈물의 하늘에 계신 사랑합니다 영상 스틸컷">

            <p class="txt_work">
              영상 스틸컷
            </p>
          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
