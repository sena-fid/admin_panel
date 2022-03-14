<!DOCTYPE html>
<html lang="">
<head>
@include('frontend.template.head')
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('frontend/assets/images/demo/slider.jpg');">
  <header id="header" class="hoc clear">
    <div id="logo" class="one_quarter first">
      {{-- <a href="#"><img src="frontend/assets/images/demo/logo2.png" alt=""></a> --}}
      <p>Sena Fidan</p>
    </div>
    {{-- @php
        $address = iletisim_adresleri()->first();
    @endphp
   <div class="three_quarter">
    <ul class="nospace clear">
    <li class="one_third first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Telefon:</strong>{{ $address->localeData->first_phone ?? null }}</span></div>
    </li>
    <li class="one_third">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>E-posta:</strong>{{ $address->localeData->first_email ?? null }}</span></div>
    </li>
    <li class="one_third">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong>{{ $address->work_days ?? null }}</strong>{{ $address->work_time ?? null }}</span></div>
    </li>
    </ul> --}}
</div>
  </header>
  <section id="navwrapper" class="hoc clear">
    <nav id="mainav">
      <ul class="clear">
        {{-- <li class=""><a href="{{ route('frontend.home') }}">Ana Sayfa</a></li>
        <li><a href="{{ route('frontend.about') }}">Hakkımda</a></li>
        <li><a href="{{ route('frontend.blog') }}">Blog</a></li> --}}
        <li><a href="{{ route('frontend.contact') }}">İletişim</a></li>
      </ul>
    </nav>
  </section>
  <div id="breadcrumb" class="hoc clear">
    <ul>
      {{-- <li><a href="{{ route('frontend.home') }}">Ana Sayfa</a></li>
      <li><a href="{{ route('frontend.blog') }}">Blog</a></li> --}}
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear">
    <section id="introblocks">
      <ul class="nospace group">
        {{-- @foreach ( $posts as $item )
        <li class="one_third">
          <figure><a class="imgover" href="{{ route('frontend.post.detail', $item->localeData->slug) }}">{!! kapak_resim($item, 'custom', 'blog_pc', 'class="img-fluid"') !!}</a>
            <figcaption>
                <a href="{{ route('frontend.post.detail', $item->localeData->slug) }}"><h6 class="heading">{{ $item->localeData->title }}</h6></a>
                <p>{!! $item->localeData->summary !!}</p>
            </figcaption>
          </figure>
        </li>
        @endforeach --}}
      </ul>
    </section>
    <div class="clear"></div>
  </main>
</div>
<div class="bgded overlay row4" style="background-image:url('assets/images/demo/black.jpeg');">
  {{-- <footer id="footer" class="hoc clear">
    <div class="center btmspace-50">
      <h6 class="heading">Sosyal Medya</h6>
      <ul class="faico clear">
        @foreach (sosyal_medya() as $socialKey => $social)
        @if (!empty($social['link'] ?? ''))
            <li>
                <a href="{{ $social['link'] ?? '#' }}" target="_blank" class="faicon-dribble"><i class="fab fa-{{ $socialKey }}"></i></a>
            </li>
        @endif
        @endforeach
        </ul>
    </div>
    <hr class="btmspace-50">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="https://www.linkedin.com/in/sena-fidan-992313196/" target="_blank">Sena Fidan</a></p>
  </footer> --}}
</div>
@include('frontend.template.footerScript')>
</body>
</html>
