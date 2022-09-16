    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('') ? 'active' : '' }}" aria-current="page" href="">
              
              <h2>Menu <br></h2>
              ----------------
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('') ? 'active' : '' }}" aria-current="page" href="/admin/surat">
              <span data-feather="star"></span>
              Arsip
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('') ? 'active' : '' }}" aria-current="page" href="/admin/surat/about">
              <span data-feather="alert-circle"></span>
              About
            </a>
          </li>
        </ul>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
      </div>
    </nav>