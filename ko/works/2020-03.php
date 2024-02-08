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
                &lt;2020.12 일등석 타고 달리는 기분&gt; 4분, 단채널 비디오, 2020<br>
                <p class="tit_eng">&lt;2020.12 First Class Carol&gt; 4min, single channel video, 2020</p>
            </h2>

            <div class="iframeWrapper">    
                <iframe src="https://www.youtube.com/embed/w9Gw8CrrpHM" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>  
            </div> 
            
            <img src="../../include/images/2020_03_01.jpg" alt="류성실, 2020.12 일등석 타고 달리는 기분 상세 이미지1">
            <img src="../../include/images/2020_03_02.jpg" alt="류성실, 2020.12 일등석 타고 달리는 기분 상세 이미지2">
            <img src="../../include/images/2020_03_03.jpg" alt="류성실, 2020.12 일등석 타고 달리는 기분 상세 이미지3">
            <img src="../../include/images/2020_03_04.jpg" alt="류성실, 2020.12 일등석 타고 달리는 기분 상세 이미지4">
            <img src="../../include/images/2020_03_05.jpg" alt="류성실, 2020.12 일등석 타고 달리는 기분 상세 이미지5" class="vertical">
            <p class="txt_work bottom vertical">
              각종 음원사이트에서 음악을 확인해보세요. <a href="https://melon.com/album/detail.htm?albumId=10805097" class="link_go" target="_blank">바로가기 &nearr;</a> 
            </p>
          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
