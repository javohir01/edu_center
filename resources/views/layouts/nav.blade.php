<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Asosiy sahifa</a>
      <a class="nav-link" href="#">yangiliklar</a>
      <a class="nav-link" href="#">o`quv markazlari</a>
      <a class="nav-link" href="#">sayt haqida</a>
      <a class="nav-link" href="/login">Kirish</a>
      @if (Auth::check())
        <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
      @endif
    </nav>
  </div>
</div>