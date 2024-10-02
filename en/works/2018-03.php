<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2018-02.php');

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
                &lt;BJ Cherry Jang 2018.9&gt; 11min, single channel video, 2018
            </h2>

            <div class="iframeWrapper">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JRLUwQOEQ8k?si=AyObz7NXPo711-bX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <!-- <p class="link_go mb35"><a href="https://vimeo.com/329967556/69874be6fd" target="_blank">English ver. &nearr;&#xFE0E; </a></p> -->

            <img src="../../include/images/2018_09_01.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.9 video image1">
            <img src="../../include/images/2018_09_03.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.9 video image2">
            <img src="../../include/images/2018_09_04.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.9 video image3">
            <img src="../../include/images/2018_09_02.jpg" alt="Sungsil Ryu, BJ Cherry Jang 2018.9 video image4">
          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
