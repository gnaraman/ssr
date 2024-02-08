<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2017-03.php');

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
                &lt;김첨지 리바이벌&gt; 10분 7초 , CRT 4채널 영상, 2017 <br>
                <p class="tit_eng">&lt;Mr. Kim’s Revival&gt; 10min 7sec, CRT 4-channel video, 2017 </p>
            </h2>

            <img src="../../include/images/2017-02.jpg" alt="류성실, 김첨지 리바이벌 영상 스틸컷1">
            <img src="../../include/images/2017-01.jpg" alt="류성실, 김첨지 리바이벌 영상 스틸컷2">
            <img src="../../include/images/2017-03.jpg" alt="류성실, 김첨지 리바이벌 영상 스틸컷3">
            <img src="../../include/images/2017-04.jpg" alt="류성실, 김첨지 리바이벌 영상 스틸컷4">

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
