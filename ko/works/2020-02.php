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
                &lt;죽지 않는 가문&gt; 2분, 단채널 비디오, 2020<br>
                <p class="tit_eng">&lt;Never Ending Family&gt; 2min, single channel video, 2020</p>
            </h2>

            <p class="link_go"><a href="http://www.you-never-die.site" target="_blank">감상 바로가기 &nearr; </a></p>

            <img src="../../include/images/2020_02_01.jpg" alt="류성실, 죽지 않는 가문 상세 이미지1" class="vertical">
            <img src="../../include/images/2020_02_02.jpg" alt="류성실, 죽지 않는 가문 상세 이미지2" class="vertical">
            <img src="../../include/images/2020_02_03.jpg" alt="류성실, 죽지 않는 가문 상세 이미지3">
            <p class="txt_work bottom">
              뮤지엄헤드 《NAME나메》 전시 전경 (2021)
            </p>

            <img src="../../include/images/2020_02_04.jpg" alt="류성실, 죽지 않는 가문 상세 이미지4">
            <p class="txt_work bottom">
              GCS 《익스클루시브 산타》 전시 전경 (2022)
            </p>
          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
