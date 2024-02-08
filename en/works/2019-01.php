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
                &lt;Ching-Chen Matbogi Tour&gt; 40min, video and OBS based performance, 2019 (2/8-2/10 4 sessions)
            </h2>

            <div class="iframeWrapper">
              <iframe src="https://player.vimeo.com/video/327856380" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
              <!-- <p><a href="https://vimeo.com/299623804">BJ 체리 장 2018.9</a> from <a href="https://vimeo.com/sungsilryu">Sungsil Ryu</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
            </div>

            <img src="../../include/images/2019-02.jpg" alt="Sungsil Ryu, Ching-Chen Matbogi Tour image1">
            <img src="../../include/images/2019-03.jpg" alt="Sungsil Ryu, Ching-Chen Matbogi Tour image2">

            <ul class="thumb">
              <li class="thumb_li">
                <a href="https://www.instagram.com/p/BtVJzLwg-iv/" target="_blank">
                  <div class="thumb_img">
                    <img src="../../include/images/2019-02-01.jpg" alt="Ching-Chen Matbogi Tour poster thumnail">
                  </div>
                  <p>Poster &nearr;&#xFE0E; </p>
                </a>
              </li>
              <li class="thumb_li">
                <a href="https://www.instagram.com/p/BuTCbWaAF0q/" target="_blank">
                  <div class="thumb_img">
                    <img src="../../include/images/2019-02-02.jpg" alt="Ching-Chen Matbogi Tour review thumnail">
                  </div>
                  <p>Program Review &nearr;&#xFE0E; </p>
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
