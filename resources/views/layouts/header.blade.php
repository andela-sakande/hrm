<section class="hero is-info is-large">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <nav class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item" href="{{ route('home') }}">
            <!-- <img src="images/bulma-type-white.png" alt="Logo"> -->
            <b>SiroladHRM</b>
          </a>
        </div>
        <label for="menu-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
      </label>
      <input type="checkbox" id="menu-toggle" class="is-hidden"/>
        <div class="nav-right nav-menu">
          <!-- <a class="nav-item is-active">
            Home
          </a>
          <a class="nav-item">
            Examples
          </a> -->
          <!-- <a class="nav-item">
            Login
          </a> -->
          <span class="nav-item">
            <a class="button is-info is-inverted" href="{{ route('login.view') }}">
              <span class="icon">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </span>
              <span>Login</span>
            </a>
          </span>
        </div>
      </div>
    </nav>
  </div>