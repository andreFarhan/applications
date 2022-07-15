<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">UNPAM BLOG</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'HOME' ? 'active' : '') }}" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'ABOUT' ? 'active' : '') }}" href="/about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'POSTS' ? 'active' : '') }}" href="/blog">BLOG</a>
        </li>
      </ul>
    </div>
  </div>
</nav>