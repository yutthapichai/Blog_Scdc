@extends('layouts.frontend')
@section('content')
<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $title }}</h1>
    </div>
</div>
<div class="container">
    <div class="medium-padding120">
        <main class="main">
          <div class="heading text-center">
              <h1 class="heading-title">Gallery</h1>
              <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
              </div>
          </div>
          <div class="row">
            @for($i = 1;$i < 13;$i++)
            @if($i == 9)
              continue;
            @endif
              <div class="col-lg-3">
                <div class="hentry post post-standard">
                  <div class="post-thumb">
                      <img src="{{ asset('image/'.$i.'.jpg') }}" alt="{{ asset('image/'.$i.'.jpg') }}">
                      <div class="overlay"></div>
                      <a href="{{ asset('image/'.$i.'.jpg') }}" class="link-image js-zoom-image">
                          <i class="seoicon-zoom"></i>
                      </a>
                  </div>
                  <div class="post__content">
                      <div class="post__content-info">
                      <h2 class="post__title entry-title ">
                          <span>{{ $data[$i]['name'] }}</spam>
                      </h2>
                      <div class="post-additional-info">
                        {{ $data[$i]['content'] }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
          </div>

          <div class="heading text-center">
            <br>
              <h1 class="heading-title">Partner</h1>
              <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
              </div>
          </div>
          <h6>
            <b>Company name :</b>	Yan Way Co., Ltd (construction)<br>
            <b>Country :</b>	The republic of the union of Myanmar<br>
            <b>Managing Director :</b>	U Sithu Win Maung<br>
            <b>Directors :</b>	1) Daw Seim Seim Su<br>
            <b>Address :</b>	No.53B, Bayint Naung Road, No.3 Main Road, Pale 1 Ward,
            Mingalardon Township, Yangon Division.
          </h6><br>
          <div class="row">
            <div class="col-lg-6">
              <div class="hentry post post-standard">
                <div class="post-thumb">
                    <img src="{{ asset('image/M1.JPG') }}" alt="{{ asset('image/'.$i.'.jpg') }}">
                    <div class="overlay"></div>
                    <a href="{{ asset('image/M1.JPG') }}" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hentry post post-standard">
                <div class="post-thumb">
                    <img src="{{ asset('image/M2.JPG') }}" alt="{{ asset('image/'.$i.'.jpg') }}">
                    <div class="overlay"></div>
                    <a href="{{ asset('image/M2.JPG') }}" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                </div>
              </div>
            </div>
          </div>

          <div class="heading text-center">
            <br>
              <h1 class="heading-title">Subsidiary</h1>
              <div class="heading-line">
                  <span class="short-line"></span>
                  <span class="long-line"></span>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <img src="{{ asset('image/wsr.png') }}" alt="wsr" width="100%">
            </div>
            <div class="col-lg-10">
              <h5>WONGSAROJ SURVEYING AND CONSTRUCTION CO.,LTD.</h5>
                  17/1 MOO 18 LUMLUKKA ROAD, BUNGTHONGLHANG, LUMLUKKA, PATHUMTHANI 12150 THAILAND
                  Tel : (66)02-9952448, (66)02-9952143, (66)02-9952319
                  Email : wsrsc60@gmail.com
                  MANAGEMENT :
                  <hr>
                  <div class="row">
                      <div class="col-lg-4">
                        MR.MANOP  PUMKHEM (สย.1808)
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 081-6483307
                      </div>
                      <div class="col-lg-4">
                        Email : pumkhem@gmail.com
                      </div>
                      <div class="col-lg-4">
                        MR.DANAI  WONGSAROJ
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 089-8117412
                      </div>
                      <div class="col-lg-4">
                        Email : danai.wsr@gmail.com
                      </div>
                      <div class="col-lg-4">
                        MS.SAOWANEE  NINTRANON
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 089-8117380
                      </div>
                      <div class="col-lg-4">
                        Email : wsrsc60@gmail.com
                      </div>
                  </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
              <img src="{{ asset('image/md.png') }}" alt="md" width="100%">
            </div>
            <div class="col-lg-10">
              <h5>M.D. SURVEYING AND CONSTRUCTION CO.,LTD.</h5>
              17/1 MOO 18 LUMLUKKA ROAD, BUNGTHONGLHANG, LUMLUKKA, PATHUMTHANI 12150 THAILAND
              Tel : (66)02-9952448, (66)02-9952143, (66)02-9952319
              Email : wsrsc60@gmail.com
                  <hr>
                  <div class="row">
                      <div class="col-lg-4">
                        MR.MANOP  PUMKHEM (สย.1808)
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 081-6483307
                      </div>
                      <div class="col-lg-4">
                        Email : pumkhem@gmail.com
                      </div>
                      <div class="col-lg-4">
                        MR.DANAI  WONGSAROJ
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 089-8117412
                      </div>
                      <div class="col-lg-4">
                        Email : danai.wsr@gmail.com
                      </div>
                      <div class="col-lg-4">
                        MS.SAOWANEE  NINTRANON
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 089-8117380
                      </div>
                      <div class="col-lg-4">
                        Email : wsrsc60@gmail.com
                      </div>
                  </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-2">
              <img src="{{ asset('image/tjj.png') }}" alt="tjj" width="100%">
            </div>
            <div class="col-lg-10">
              <h5>THONG JING JING COMPANY LIMITED</h5>
              38 MOO 16 BUNGTHONGLHANG, LUMLUKKA, PATHUMTHANI 12150 THAILAND
              Tel : (66) 0923899944, (66) 0923891122
              Email : tjj@thongjingjing.com
                  <hr>
                  <div class="row">
                      <div class="col-lg-4">
                        MR.MANOP  PUMKHEM (สย.1808)
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 081-6483307
                      </div>
                      <div class="col-lg-4">
                        Email : pumkhem@gmail.com
                      </div>
                      <div class="col-lg-4">
                        MR.DANAI  WONGSAROJ
                      </div>
                      <div class="col-lg-4">
                        Tel : (66) 089-8117412
                      </div>
                      <div class="col-lg-12">
                        Mr.Zhao Xin
                      </div>
                      <div class="col-lg-12">
                        Mr.Zhang Xin Jie
                      </div>
                  </div>
            </div>
          </div>
          <br><br>
          <div style="margin:0 auto;">
            <div class="heading text-center">
              <br><br>
                <h1 class="heading-title">Location</h1>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>
    				<h4>Map Thailand</h4>
    				<p>ตำบล มาบตาพุด อำเภอเมืองระยอง ระยอง 21150 ประเทศไทย</p>
    				<hr>
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.5143366310076!2d101.17388510938882!3d12.745074816418906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDQ0JzQxLjYiTiAxMDHCsDEwJzM2LjciRQ!5e0!3m2!1sen!2skh!4v1527234522497" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>
    			<div style="margin:0 auto;">
    				<h4>Map Cambodia</h4>
    				<p>PK.16 RN.4 Trapaeng Tuol Village, Kambol Commune, Ang Snuol, Kandal Province, Cambodia.</p>
    				<hr>
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1954.651949916762!2d104.79478336746907!3d11.530043892355772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094f0afe653ef3%3A0xa26eae1ee1eda527!2sthe+seaboard+constructions+development+company!5e0!3m2!1sth!2skh!4v1527241682818" width="1150" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    			</div>
          <br><br>
          <div class="col-lg-12">
              <aside aria-label="sidebar" class="sidebar sidebar-right">
                  <div  class="widget w-tags">
                      <div class="heading text-center">
                        <br><br>
                          <h1 class="heading-title">Scope of services</h1>
                          <div class="heading-line">
                              <span class="short-line"></span>
                              <span class="long-line"></span>
                          </div>
                      </div>

                      <div class="tags-wrap">
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Basic and Detail design in all Civil Engineering</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Piling design and Driving</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Project Management</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> General Civil and Foundation</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Site Preparation and Grading</a>

                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Highways & Roadworks</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Drainage, Waste Water Treatment System</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Water Supply System</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Office Building</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Hotel Building</a>

                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> arehouse & Workshop</a>
                          <a href="" class="w-tags-item"><i class="fa fa-cogs"></i> Industrial & Factory</a>
                      </div>
                  </div>
              </aside>
          </div>

        </main>
    </div>
</div>
@endsection
