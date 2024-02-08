<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2019-03.php');
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
                &lt;나도 안 죽었다!&gt; 20X20X40cm, 앰프스피커, 혼합매체, 2019<br>
                <p class="tit_eng">&lt;I’m Not Dead, Too!&gt; 20X20X40cm, amp speaker, mixed media, 2019</p>
            </h2>

            <img src="../../include/images/2019_05_01.jpg" alt="류성실, 나도 안 죽었다! 작품 상세 이미지1" class="vertical">
            <img src="../../include/images/2019_05_02.jpg" alt="류성실, 나도 안 죽었다! 작품 상세 이미지2" class="vertical">


          </div>
      </div>
      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
