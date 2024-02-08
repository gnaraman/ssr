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
            <span class="blind">류성실 작가</span>
            류성실 (b.1993)<br>
            Based in Seoul<br>
          </p>
          <p class="txt_cv">
            ryusungsil@gmail.com<br>
            <p class="link_go"><a href="https://www.instagram.com/sungsilryu/" target="_blank">@sungsilryu &nearr; </a></p>
          </p>

            <h3 class="mt">Education</h3>
            <div class="cv_box">
              <p class="cv_year">2018</p>
              <ul>
                  <li>서울대학교 조소과 학사 졸업</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2021</p>
              <ul>
                  <li>서울대학교 조소과 석사 수료</li>
              </ul>
            </div>

            <h3>Awards & Grants</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                  <li>아트 체인지 업, 한국문화예술위원회 (ARKO)</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2021</p>
              <ul>
                  <li>제19회 에르메스재단 미술상, 에르메스재단</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2020</p>
              <ul>
                  <li>창작활동지원, 서울문화재단 (SFAC)</li>
              </ul>
            </div>
            <!-- <div class="cv_box mt0">
              <p class="cv_year">2019</p>
              <ul>
                  <li>서울청년예술단, 서울문화재단(다모객)</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2018</p>
              <ul>
                  <li>최초예술지원, 서울문화재단</li>
              </ul>
            </div> -->

            <h3>Residencies</h3>
            <div class="cv_box">
              <p class="cv_year">2024</p>
              <ul>
                  <li>두산갤러리 해외 레지던시 프로그램 선정- ISCP, 뉴욕</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2023</p>
              <ul>
                  <li>싱가포르 아트 뮤지엄 레지던시(SAM), 싱가포르</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2022</p>
              <ul>
                  <li>금천예술공장, 서울</li>
              </ul>
            </div>

            <h3>Solo Exhibition</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li>《대왕에어 엔진 복구기금 마련전》 실린더 2, 서울</li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2022</p>
              <ul>
                <li>《불타는 사랑의 노래》 아뜰리에 에르메스, 서울</li>
              </ul>
            </div>
            <!-- <div class="cv_box mt0">
              <p class="cv_year">2020</p>
              <ul>
                <li class="link_go no_line"><a href="http://www.bigkingtravel.com" target="_blank">《대왕트래블 2020》 웹전시 &nearr;</a></li>
              </ul>
            </div> -->
            <div class="cv_box mt0">
              <p class="cv_year">2019</p>
              <ul>
                <li>《대왕트래블 칭쳰투어》 탈영역우정국, 서울</li>
              </ul>
            </div>

            <h3>Selected Group Exhibition</h3>
            <div class="cv_box">
              <p class="cv_year">2024</p>
              <ul>
                <li>《this is perfect, perfect, perfect》 Kunstraum Kreuzberg/Bethanien, 베를린</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li>《Natural Born Odds》 Salihara Art Center, 자카르타</li>
                <li>《Kunsthal Charlottenborg Biennale》, 덴마크 전역</li>
                <li>《GHOSTING》 Arthur Boskamp-Stiftung M.1 kuratieren, 독일</li>
                <li>《시간을 소장하는 일에 대하여》 백남준아트센터, 용인</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2022</p>
              <ul>
                <li>《VIBRATION INPOLYHEDRAL LABYRINTH》 국립아시아문화전당, 광주</li>
                <!-- <li>《펑키-펑션》 대구미술관, 대구</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2021</p>
              <ul>
                <li>《21회 송은미술대상전》 송은, 서울</li>
                <!-- <li>《황혜홀혜》 경남도립미술관, 창원</li>
                <li>《나도 잘 지냅니다》 광주시립미술관, 광주</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2020</p>
              <ul>
                <li>《이 공간, 그 장소, 헤테로토피아》 대림미술관, 서울</li>
                <!-- <li>《개인들의 사회》 부산현대미술관, 부산</li> -->
                <li>《Follow, Flow, Feed, 내가 사는 피드》 아르코미술관, 서울</li>
                <!-- <li>《아티스트로 살아가기》 세화미술관, 서울</li>
                <li>《뉴 템포_스크린타임》 캔파운데이션, 서울</li> -->
                <li>《나메 Name》 뮤지엄헤드, 서울</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2019</p>
              <ul>
                <!-- <li>《싸이키델릭 네이처》 보안여관, 서울</li> -->
                <li>《CHERRY-GO-ROUND》 백남준아트센터 (류성실 X 업체eobchae), 용인</li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2018</p>
              <ul>
                <li>《NEWS, DEAR MR. RIPLEY》 북서울미술관 (류성실 X 업체eobchae), 서울</li>
                <!-- <li>《DATAPACK》 일민미술관, 서울</li>
                <li>《LAPSES》 플랫폼 엘, 서울</li>
                <li>《PACK2018》 공간사일삼, 서울</li> -->
                <li>《미러의미러의미러》 합정지구 (류성실 X 업체eobchae), 서울</li>
              </ul>
            </div>

            <h3>Performance</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li class="link_go no_line"><a href="https://youtu.be/IsTbIOlk0Ss?si=lbDggvqe2Ols3eah" target="_blank">《Skill Futures : A Lifestyle of Casual Scamming》 싱가포르 아트 뮤지엄 (온라인), 싱가포르 &nearr;&#xFE0E;</a></li>
              </ul>
            </div>
            <div class="cv_box mt0">
              <p class="cv_year">2019</p>
              <ul>
                <li>《PERFORM 2019》 일민미술관, 서울</li>
                <!-- <li>《칭쳰 맛보기투어》 오시선 X 지하극장, 서울</li> -->
              </ul>
            </div>

            <!-- <h3>Screening</h3>
            <div class="cv_box">
              <p class="cv_year">2019</p>
              <ul>
                <li>《8&8》 석촌호수 서호변, 서울</li>
              </ul>
            </div> -->

            <h3>Selected Articles & Interviews</h3>
            <div class="cv_box">
              <p class="cv_year">2023</p>
              <ul>
                <li class="link_go no_line"><a href="https://dailian.co.kr/news/view/1309847" target="_blank">데일리안 (대왕트래블 왕사장 인터뷰) &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://ocula.com/magazine/insights/korean-artist-sungsil-ryu-rises-up-from-tragedy/" target="_blank">Ocula Magazine - Sep &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://www.artsy.net/article/artsy-editorial-ryu-sungsils-expansive-satirical-universe-captivating-internet-art" target="_blank">Artsy - Jul &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://youtu.be/dyGBmU9lh08?si=4Ko2jzp8y7vDm1Gw" target="_blank">마이너 리뷰 갤러리 &nearr;&#xFE0E;</a></li>
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2022</p>
              <ul>
                <!-- <li class="link_go no_line"><a href="https://esquirekorea.co.kr/article/69054" target="_blank">에스콰이어 9월호  &nearr;</a></li>
                <li class="link_go no_line"><a href="https://harpersbazaar.co.kr/article/70371" target="_blank">하퍼스 바자 9월호 &nearr;</a></li>
                <li class="link_go no_line"><a href="https://www.elle.co.kr/article/70433" target="_blank">엘르 9월호 &nearr;</a></li>
                <li class="link_go no_line"><a href="http://www.dazedkorea.com/fashion/article/1826/detail.do" target="_blank">데이즈드 코리아 9월호 &nearr;</a></li>
                <li class="link_go no_line"><a href="https://www.fnnews.com/news/202209121857436973" target="_blank">파이낸셜 뉴스 &nearr;</a></li> -->
                <li class="link_go no_line"><a href="https://www.frieze.com/video/sungsil-ryu-you-face-all-kinds-human-beings-online-its-jungle" target="_blank">Frieze &nearr;&#xFE0E;</a></li>
                <li class="link_go no_line"><a href="https://www.koreatimes.co.kr/www/art/2022/08/690_334878.html" target="_blank">The Korea Times - Sep &nearr;</a></li>
                <li class="link_go no_line"><a href="https://www.artsy.net/article/artsy-editorial-7-best-booths-frieze-seoul-2022" target="_blank">Artsy - Sep &nearr;</a></li>
                <li class="link_go no_line"><a href="http://www.artinculture.kr/online/3454" target="_blank">Artinculture - Sep &nearr;</a></li>
                <li class="link_go no_line"><a href="https://koreajoongangdaily.joins.com/2022/08/02/culture/artsDesign/koreahermes-sungsil-ryu/20220802154339541.html" target="_blank">Korea JoongAng Daily - Aug &nearr;</a></li>
                <!-- <li>보그 코리아 2월호</li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2021</p>
              <ul>
                <li class="link_go no_line"><a href="https://hypebeast.kr/2021/11/g-dragon-peaceminusone-nike-kwondo-1-interview-cherry-jang-sungsil-ryu-ghootree-kim-ra-kyung-military-barber-shop" target="_blank">Hypebeast - Nov &nearr;</a></li>
                <!-- <li class="link_go no_line"><a href="http://www.noblesse.com/home/news/magazine/detail.php?no=10817" target="_blank">노블레스 &nearr;</a></li>
                <li class="link_go no_line"><a href="http://www.wkorea.com/2021/01/27/who-me-%ED%98%84%EC%9A%B0%EC%84%9D-%EB%A5%98%EC%84%B1%EC%8B%A4-%EA%B9%80%EB%AF%BC%EC%B2%A0-%EC%86%A1%EC%98%88%ED%99%98-%EC%9D%B4%EC%9D%B4%EC%8A%AC/" target="_blank">더블유 코리아 &nearr;</a></li> -->
              </ul>
            </div>
            <div class="cv_box">
              <p class="cv_year">2020</p>
              <ul>
                <!-- <li>월간사진 12월호</li>
                <li>월간미술 2월호</li> -->
                <li class="link_go no_line"><a href="https://terms.naver.com/entry.nhn?docId=5917527&amp;cid=59154&amp;categoryId=59154" target="_blank">NAVER hello! ARTIST - Feb &nearr;</a></li>
              </ul>
            </div>

            <h3>Collection</h3>
            <p class="txt_cv">
                백남준아트센터, 용인
            </p>

        </div>
      </div>
      <!-- //content -->
    </div>
    <!-- //container -->

    <!-- footer -->
    <?php include_once __DIR__."/../footer.php"; ?>
    <!-- //footer -->
