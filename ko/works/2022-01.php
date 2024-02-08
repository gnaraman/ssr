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
                &lt;미스터 비하인드&gt; 혼합재료, 가변설치, 2022<br>
                <p class="tit_eng">&lt;Mr. Behind&gt; mixed media, variable installation, 2022</p>
            </h2>

            <p class="txt_work mb20">
              (LG 디스플레이 커미션)
            </p>

            <img src="../../include/images/2022_01_01.jpg" alt="미스터 비하인드 상세 이미지1">
            <img src="../../include/images/2022_01_02.jpg" alt="미스터 비하인드 상세 이미지2">
            <img src="../../include/images/2022_01_03.jpg" alt="미스터 비하인드 상세 이미지3">
            <img src="../../include/images/2022_01_04.jpg" alt="미스터 비하인드 상세 이미지4" class="vertical">
            <p class="txt_work bottom vertical">
              《네버얼론》 전시 전경 (성수동 센느/2022)
            </p>

          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
