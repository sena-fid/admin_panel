
<div class="bgded overlay" style="background-image:url('{{ asset('frontend/assets/images/demo/blog-slider.jpg')}}');">
    <header id="header" class="hoc clear">
      <div id="logo" class="one_quarter first">
        <a href="{{ route('frontend.index') }}"><img src="{{ asset('frontend/assets/images/demo/logo2.png')}}" alt=""></a>
        <p>Sena Fidan</p>
      </div>
      <div class="three_quarter">
            <ul class="nospace clear">
                <li class="one_third first">
                    <div class="block clear"><a href="https://github.com/sena-fid" target="_blank"><i class="fab fa-github"></i></a> <span><strong>GitHub:</strong>{{ $settings->phone }}</span></div>
                </li>
                <li class="one_third">
                    <div class="block clear"><a href="mailto:{{ $settings->email }}"><i class="fas fa-envelope"></i></a> <span><strong>E-posta:</strong>{{ $settings->email }}</span></div>
                </li>
                <li class="one_third">
                    <div class="block clear"><a href="{!! $settings->facebook !!}" target="_blank"><i class="fab fa-linkedin"></i></a> <span><strong></strong>LinkedIn ile ulaşın</span></div>
                </li>
            </ul>
      </div>
    </header>


    {{--<section id="navwrapper" class="hoc clear">
      <nav id="mainav">
        <ul class="clear">
            @if(count($menus) > 0)
                @foreach ($menus as $menu)
                    <li
                        class="">
                        <a href="#"
                            class="">{{ $menu->title ?? null }}</a>
                    </li>
                @endforeach
            @endif
        </ul>

      </nav>
    </section>--}}


    <div id="pageintro" class="hoc clear">
      <article>
        <h3 class="heading">Software Developer</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <footer><a class="btn" href="mailto:{{ $settings->email }}">İletişim</a></footer>
      </article>
    </div>
  </div>
