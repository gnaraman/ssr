<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2020-02.php');

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
                &lt;2020.12 First Class Carol&gt; 4min, single channel video, 2020
            </h2>

            <div class="iframeWrapper">
                <iframe src="https://www.youtube.com/embed/w9Gw8CrrpHM" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
            </div>

            <img src="../../include/images/2020_03_01.jpg" alt="Sungsil Ryu, 2020.12 First Class Carol image1">
            <img src="../../include/images/2020_03_02.jpg" alt="Sungsil Ryu, 2020.12 First Class Carol image2">
            <img src="../../include/images/2020_03_03.jpg" alt="Sungsil Ryu, 2020.12 First Class Carol image3">
            <img src="../../include/images/2020_03_04.jpg" alt="Sungsil Ryu, 2020.12 First Class Carol image4">
            <p class="txt_work bottom italic">
                ‘After death, I realized that heaven was better than Korea.’
            </p>

            <img src="../../include/images/2020_03_05.jpg" alt="Sungsil Ryu, 2020.12 First Class Carol image5" class="vertical">
            <p class="txt_work bottom vertical">
              Check it out on various music streaming service, such as <a href="https://open.spotify.com/album/3nycFrQEozL65ELmeN0V5q" class="link_go" target="_blank">Spotify</a>, 
              <a href="https://music.apple.com/kr/album/big-king-travel-christmas-carol-single/1575187597" class="link_go" target="_blank">Apple Music</a>, and <a href="https://music.youtube.com/playlist?list=OLAK5uy_n1MSpyz2ioXFIxfjMrT29O3zJvH54_mes&si=gSu788de7jLCxGC-" class="link_go" target="_blank">YouTube Music</a> 
            </p>

          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
