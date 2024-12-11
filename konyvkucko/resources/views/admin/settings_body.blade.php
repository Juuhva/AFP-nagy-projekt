<div class="grid-container">
    <header class="header">
      @include('admin.settings_header')
    </header>
    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <span class="material-icons-outlined">inventory</span> Könyvkuckó Admin felület
        </div>
        <span class="material-icons-outlined">close</span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">dashboard</span> Főoldal
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="{{url('view_book')}}" target="_blank">
            <span class="material-icons-outlined">inventory_2</span> Könyvek
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="{{url('view_newbook')}}" target="_blank">
            <span class="material-icons-outlined">fact_check</span> Új könyv hozzáadása
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="{{url('view_orders')}}" target="_blank">
            <span class="material-icons-outlined">shopping_cart</span> Rendelések
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="{{url('view_statistic')}}" target="_blank">
            <span class="material-icons-outlined">poll</span> Statisztika
          </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{url('view_users')}}" target="_blank">
              <span class="material-icons-outlined">user</span> Felhasználók kezelése
            </a>
          </li>
        <li class="sidebar-list-item">
          <a href="{{ulr('view_settings')}}" target="_blank">
            <span class="material-icons-outlined">settings</span> Beállítások
          </a>
        </li>
      </ul>
    </aside>
    <main class="main-container">
      <div class="main-title">
        <p class="font-weight-bold">Beállítások</p>
      </div>

      
    </main>
  </div>