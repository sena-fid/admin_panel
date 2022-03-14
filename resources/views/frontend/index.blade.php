@extends('frontend.template.template')
@section('content')


<div class="wrapper row3">
    <main class="hoc container clear">
      <section id="introblocks">
        <ul class="nospace group">

        @foreach ( $getPostBlog as $item )
          <li class="one_third">
            <figure><a class="imgover" href=""></a>
              <figcaption>
               <a href=""><h6 class="heading">{{ $item->title }}</h6></a>
                <p>{!! Str::limit($item->content, 150) !!}</p>
                <a href="{{ route('frontend.blog.detail', $item->slug) }}">devamını gör</a>
              </figcaption>
            </figure>
          </li>
        @endforeach

        </ul>
      </section>
      <div class="clear"></div>
    </main>
  </div>

  <div class="wrapper row2">
    <section class="hoc container clear">
      <div class="sectiontitle">
        <h6 class="heading">Pratik Bilgiler</h6>
      </div>
      <ul class="nospace group center">
        <li class="one_third first">
          <article><a href="#"><i class="fas fa-eraser fa-5x btmspace-50"></i></a>
            <h6 class="heading">HTML</h6>
            <p class="btmspace-30">Hypertext Markup Language</p>
            <footer><a class="btn" href="#">Öğrenmeye Başla</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-chess-bishop fa-5x btmspace-50"></i></a>
            <h6 class="heading">CSS</h6>
            <p class="btmspace-30">Cascading Style Sheets</p>
            <footer><a class="btn" href="#">Öğrenmeye Başla</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-coins fa-5x btmspace-50"></i></a>
            <h6 class="heading">JavaScript</h6>
            <p class="btmspace-30">JavaScript</p>
            <footer><a class="btn" href="#">Öğrenmeye Başla</a></footer>
          </article>
        </li>
      </ul>
    </section>
  </div>
@endsection
