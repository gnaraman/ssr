<?php include_once __DIR__."/../header.php"; ?>
<style>

@media screen and (max-width: 890px){
  #header h1 {
    position: fixed;
    padding-top: 25px;
    top:0;
    transition:all .2s ease-out;
  }
  #header {
    padding: 54px 10px 30px 15px;
  }
  .gnb {
     margin-top: 51px;
  }
}
</style>
<script language="javascript" type="text/javascript">

  $(document).ready(function(){

    $('.header_mobile').addClass('is_main');
    $('#wrap').addClass('sub_index');
    $('#footer, .gnb li .slide-left').hide();

    $('.sub_gnb a').on('click',function(){
      var pageNum=$(this).attr('href')
      var dir='../works/'
      $(this).attr('href', dir+pageNum);
    });

    var prev = 0;
    var view = $(window);
    var mast = $(' #header h1');

    view.on('scroll', function(){
      var scrollTop = view.scrollTop();
      if($('.gnb .works').hasClass('active')==false){

        if(scrollTop > prev){
            mast.addClass('hidden');
        }else{
          mast.removeClass('hidden');
        }
      };
    });
  });

</script>
    <!-- container -->
    <div id="container">
      <!-- sub_gnb -->
        <?php include_once __DIR__."/../gnb_work.php"; ?>
      <!-- //sub_gnb -->

      <!-- content -->
      <div id="content" class=" cv_c">
        <div class="text cv">
          <h2>CV</h2>

          <p class="txt_cv">
            <!-- <span class="blind">류성실 작가</span> -->
            Sungsil Ryu (b.1993)<br>
            Based in Seoul<br>
          </p>
          <p class="txt_cv">
            ryusungsil@gmail.com<br>
            <p class="link_go"><a href="https://www.instagram.com/sungsilryu/" target="_blank">@sungsilryu &nearr;&#xFE0E; </a></p>
          </p>

            <h3>Education</h3>
            <p class="txt_cv">
            <!-- 2021<span class="blank"></span>MFA, Seoul National University (Sculpture), Seoul, South Korea<br> -->
            2018<span class="blank"></span>BFA, Seoul National University (Sculpture), Seoul, South Korea
            </p>

            <h3>Awards & Grants</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                  <li>Art Change Up Grant, Arts Council Korea (ARKO)</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2021</p>
              <ul>
                  <li>19th Hermès Foundation Missulsang</li>
                  <!-- <li>Art Change Up Grant, Arts Council Korea (ARKO)</li> -->
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2020</p>
              <ul>
                  <li>Art Support Program, Seoul foundation for Art and Culture (SFAC)</li>
              </ul>
            </div>
            <!-- <div class="cv_box mt0">
              <p class="cv_year">2018</p>
              <ul>
                  <li>First Art Support Program, Seoul foundation for Art and Culture (SFAC)</li>
              </ul>
            </div> -->

            <h3>Residencies</h3>
            <div class="cv_box">
              <p class="cv_year">2024</p>
              <ul>
                  <li>DOOSAN Gallery International Residency Program – ISCP, New York</li>
                  <li>Eaton HK Residency, Hong Kong</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2023</p>
              <ul>
                  <li>Singapore Art Museum Residency(SAM), Singapore.</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2022</p>
              <ul>
                  <li>The Seoul Art Space Geumcheon(SASG), Seoul</li>
              </ul>
            </div>


            <h3>Solo Exhibition</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li>《Big King Air New Engine Fundraising Drive》 CYLINDER TWO, Seoul</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2022</p>
              <ul>
                <li>《The Burning Love Song》 Atelier Hermès, Seoul</li>
              </ul>
            </div>
            <!-- <div class="cv_box mt0">
              <p class="cv_year">2020</p>
              <ul>
                <li class="link_go no_line"><a href="http://www.bigkingtravel.com" target="_blank">《Big King Travel 2020》 &nearr;&#xFE0E;</a></li>
              </ul>
            </div> -->
            <div class="cv_box mt0">
              <p class="cv_year">2019</p>
              <ul>
                <li>《BigKing Travel Ching-Chen Tour》 Post Territory Ujeongguk, korea</li>
              </ul>
            </div>

            <h3>Selected Group Exhibition</h3>
            <div class="cv_box">
              <p class="cv_year">2024</p>
              <ul>
                <li>《Rhizome – Network Without Center Point》 Kunstal Aarhus, Aarhus</li>
                <li>《AFTER HUMAN: MARKS OF THE BEASTS》 Tomorrow Maybe, Hong Kong</li>
                <li>《Wake Up! It’s 2024》 Nam June Paik Art Center, Yongin</li>
                <li>《Singapore Art Week 2024》, Singapore Art Museum, Singapore</li>
                <li>《Transmediale 2024 : this is perfect, perfect, perfect》 Kunstraum Kreuzberg/Bethanien, Berlin</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li>《Natural Born Odds》 Salihara Art Center, Jakarta</li>
                <li>《Kunsthal Charlottenborg Biennale》 Denmark</li>
                <li>《GHOSTING》 Arthur Boskamp-Stiftung M.1 kuratieren, Germany</li>
                <li>《On Collecting Time》 Nam June Paik Art Center, Yongin</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2022</p>
              <ul>
                <li>《VIBRATION INPOLYHEDRAL LABYRINTH》 ACC, Kwangju</li>
                <!-- <li>《Funky-Functions》 Daegu Art Museum, Daegu</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2021</p>
              <ul>
                <li>《21st Song Eun Art Award Exhibition》 Song Eun, Seoul</li>
                <!-- <li>《Sunset, Sunrise》 Gyeongnam Art Museum, Changwon</li>
                <li>《I’m Okay Too》 Gwangju Museum of Art, Gwangju</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2020</p>
              <ul>
                <li>《No Space, Just a Place, Eterotopia》 Daelim Museum, Seoul</li>
                <li>《The Society of Individuals》 Museum of Contemporary Art Busan, Busan</li>
                <li>《Follow, Flow, Feed》 Arko Museum, Seoul</li>
                <!-- <li>《Artist Survival》 Sewha Museum, Seoul</li>
                <li>《New Tempo_Screentime》 CAN-foundation, Seoul</li> -->
                <li>《나메 Name》 Museum Head, Seoul</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2019</p>
              <ul>
                <!-- <li>《Psychedelic Nature》 ART SPACE BOAN, Korea</li> -->
                <li>《CHERRY-GO-ROUND》 Nam June Paik Art Center, Yongin (Sungsil Ryu X Eobchae)</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2018</p>
              <ul>
                <li>《NEWS, DEAR MR. RIPLEY》 Buk-Seoul Museum of Art (Sungsil Ryu X Eobchae), Seoul</li>
                <!-- <li>《DATAPACK》 Ilmin Museum of Art, Korea</li>
                <li>《LAPSES》 Platform-L, Korea</li>
                <li>《PACK2018》 Space 413, Korea</li> -->
                <li>《Mirrors of Mirrors of Mirrors》 Hapjungjigu (Sungsil Ryu X Eobchae), Seoul</li>
              </ul>
            </div>

            <h3>Performance</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li class="link_go no_line"><a href="https://youtu.be/IsTbIOlk0Ss?si=lbDggvqe2Ols3eah" target="_blank">《Skill Futures : A Lifestyle of Casual Scamming》 SAM(online performance), Singapore &nearr;&#xFE0E;</a></li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2019</p>
              <ul>
                <li>《PERFORM 2019》 Ilmin Museum of Art, Seoul</li>
                <!-- <li>《Ching-Chen Matbogi Tour》 Osisun X Theatrebase, Korea</li> -->
              </ul>
            </div>

            <!-- <h3>Screening</h3>
            <div class="cv_box">
              <p class="cv_year">2019</p>
              <ul>
                <li>《8&8》 Seokchon Lake Park, Korea</li>
              </ul>
            </div> -->

            <h3>Selected Articles & Interviews</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li class="link_go no_line"><a href="https://ocula.com/magazine/insights/korean-artist-sungsil-ryu-rises-up-from-tragedy/" target="_blank">Ocula Magazine (Misong Kim) - Sep &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://www.artsy.net/article/artsy-editorial-ryu-sungsils-expansive-satirical-universe-captivating-internet-art" target="_blank">Artsy (Hayoung Chung) - Jul &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://youtu.be/dyGBmU9lh08?si=4Ko2jzp8y7vDm1Gw" target="_blank">마이너 리뷰 갤러리 (YouTube Channel / Turn on the subtitles) &nearr;&#xFE0E;</a></li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2022</p>
              <ul>
                  <!-- <li class="link_go no_line"><a href="https://esquirekorea.co.kr/article/69054" target="_blank">Esquire - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://harpersbazaar.co.kr/article/70371" target="_blank">HARPERS & BAZAAR - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="http://www.artinculture.kr/online/3454" target="_blank">Art in Culture - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://www.elle.co.kr/article/70433" target="_blank">ELLE - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="http://www.dazedkorea.com/fashion/article/1826/detail.do" target="_blank">DAZED KOREA - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://www.fnnews.com/news/202209121857436973" target="_blank">Financial News &nearr;&#xFE0E;</a></li> -->
                  <li class="link_go no_line"><a href="https://www.frieze.com/video/sungsil-ryu-you-face-all-kinds-human-beings-online-its-jungle" target="_blank">Frieze &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://www.koreatimes.co.kr/www/art/2022/08/690_334878.html" target="_blank">The Korea Times - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://www.artsy.net/article/artsy-editorial-7-best-booths-frieze-seoul-2022" target="_blank">Artsy - Sep &nearr;&#xFE0E;</a></li>
                  <li class="link_go no_line"><a href="https://koreajoongangdaily.joins.com/2022/08/02/culture/artsDesign/koreahermes-sungsil-ryu/20220802154339541.html" target="_blank">Korea JoongAng Daily - Aug &nearr;&#xFE0E;</a></li>
                  <!-- <li>Vogue Korea - Feb</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2021</p>
              <ul>
                <!-- <li class="link_go no_line"><a href="http://www.wkorea.com/2021/01/27/who-me-%ED%98%84%EC%9A%B0%EC%84%9D-%EB%A5%98%EC%84%B1%EC%8B%A4-%EA%B9%80%EB%AF%BC%EC%B2%A0-%EC%86%A1%EC%98%88%ED%99%98-%EC%9D%B4%EC%9D%B4%EC%8A%AC/" target="_blank">W Korea - Feb &nearr;&#xFE0E;</a></li> -->
                <li class="link_go no_line"><a href="https://hypebeast.kr/2021/11/g-dragon-peaceminusone-nike-kwondo-1-interview-cherry-jang-sungsil-ryu-ghootree-kim-ra-kyung-military-barber-shop" target="_blank">Hypebeast - Nov &nearr;&#xFE0E;</a></li>
                <!-- <li class="link_go no_line"><a href="http://www.noblesse.com/home/news/magazine/detail.php?no=10817" target="_blank">Nobless - April &nearr;&#xFE0E;</a></li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2020</p>
              <ul>
                <!-- <li>Monthly Photo - Dec</li>
                <li>Monthly Art Magazine - Feb</li> -->
                <li class="link_go no_line"><a href="https://terms.naver.com/entry.nhn?docId=5917527&amp;cid=59154&amp;categoryId=59154" target="_blank">NAVER hello! ARTIST - Feb &nearr;&#xFE0E;</a></li>
              </ul>
            </div>

            <h3>Collection</h3>
            <p class="txt_cv">
                MMCA (National Museum of Modern and Contemporary Art), Seoul <br>
                SeMA (Seoul Museum of Art), Seoul <br>
                Nam June Paik Art Center, Yongin
            </p>

        </div>
      </div>
      <!-- //content -->
    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
