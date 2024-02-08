<?php include_once __DIR__."/../header.php"; ?>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){
    $('html, #header, .sub_gnb').addClass('sub');
    $('.sub_gnb, .works').addClass('active');
    $('.go_next').attr('href','2021-01.php');

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
                &lt;BJ 체리장 선생 생전 육성&gt; 1분 50초, 단채널 비디오, 2021<br>
                <p class="tit_eng">&lt;BJ Cherry Jang's voice before her death&gt; 1min 50sec, single channel video, 2021</p>
            </h2>

            <div class="iframeWrapper">    
                <iframe src="https://www.youtube.com/embed/A7VZGPYZIjE" title="YouTube video player" frameborder="0" allow="autoplay;" allowfullscreen></iframe>  
            </div> 
            
            <img src="../../include/images/2021_03_01.jpg" alt="류성실, BJ 체리장 선생 생전 육성 상세 이미지1">          
          </div>
      </div>

      <!-- //content -->

    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
