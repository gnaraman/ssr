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
                &lt;대왕트래블 2020&gt;, 15분, 유저 인터렉션이 있는 단채널 비디오, 2020<br>
                <p class="tit_eng">&lt;Bigking Travel 2020&gt;, 15min, single channel video with user interaction, 2020</p>
            </h2>

            <p class="link_go"><a href="http://www.bigkingtravel.com" target="_blank">감상 바로가기 &nearr; </a></p>

            <img src="../../include/images/2020_01_01.jpg" alt="류성실, 대왕트래블 2020 상세 이미지1" class="vertical">
            <img src="../../include/images/2020_01_02.jpg" alt="류성실, 대왕트래블 2020 상세 이미지2" class="vertical">
            <img src="../../include/images/2020_01_03.jpg" alt="류성실, 대왕트래블 2020 상세 이미지3" class="vertical">
            <img src="../../include/images/2020_01_04.jpg" alt="류성실, 대왕트래블 2020 상세 이미지4" class="vertical">
            <img src="../../include/images/2020_01_05.jpg" alt="류성실, 대왕트래블 2020 상세 이미지5" class="vertical">
          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
