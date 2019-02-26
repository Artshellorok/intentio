<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #007bff;" >
    <div class="container" >
      <a class="navbar-brand" href="/">Intentio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/projects">
              Проекты
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/developments">Разработки</a>
          </li>
          @if(auth()->guard('employer')->check())
          
          <li class="nav-item active">
            <a class="nav-link" href="/project_create">Добавить проект</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/contact">Связаться с исполнителями</a>
          </li>
          @else
          <li class="nav-item">
              <a class="nav-link" href="/login_business">Войти как работодатель</a>
            </li>
          @endif
          @if(auth()->guard('web')->check())
          <li class="nav-item">
              <a class="nav-link" href="/contact">Связаться с работодателем</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="/developments/create">Добавить разработку</a>
          </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="/login_scientists">Войти как исполнитель</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>