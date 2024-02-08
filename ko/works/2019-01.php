<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2018-04.php');
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
                &lt;칭쳰 맛보기 투어&gt; 40분, 영상 및 OBS 기반 퍼포먼스, 2019 (2/8-2/10 4회차 진행) <br>
                <p class="tit_eng">&lt;Ching-Chen Matbogi Tour&gt; 40min, video and OBS based performance, 2019 (2/8-2/10 4 sessions)</p>
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://player.vimeo.com/video/327856380" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              <!-- <p><a href="https://vimeo.com/299623804">BJ 체리 장 2018.9</a> from <a href="https://vimeo.com/sungsilryu">Sungsil Ryu</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
            </div>

            <img src="../../include/images/2019-02.jpg" alt="류성실, 칭쳰 맛보기 투어 영상 스틸컷1">
            <img src="../../include/images/2019-03.jpg" alt="류성실, 칭쳰 맛보기 투어 영상 스틸컷2">

            <ul class="thumb">
              <li class="thumb_li">
                <a href="https://www.instagram.com/p/BtVJzLwg-iv/" target="_blank">
                  <div class="thumb_img">
                    <img src="../../include/images/2019-02-01.jpg" alt="칭쳰 맛보기 투어 포스터 썸네일">
                  </div>
                  <p>포스터 &nearr; </p>
                </a>
              </li>
              <li class="thumb_li">
                <a href="https://www.instagram.com/p/BuTCbWaAF0q/" target="_blank">
                  <div class="thumb_img">
                    <img src="../../include/images/2019-02-02.jpg" alt="칭쳰 맛보기 투어 프로그램 리뷰 썸네일">
                  </div>
                  <p>프로그램 리뷰 &nearr; </p>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
