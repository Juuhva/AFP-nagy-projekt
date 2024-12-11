<div class="grid-container">
    <header class="header">
      @include('admin.header')
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
          <a href="{{ulr('view_settings')}}" target="_blank">
            <span class="material-icons-outlined">settings</span> Beállítások
          </a>
        </li>
      </ul>
    </aside>
    <main class="main-container">
      <div class="main-title">
        <p class="font-weight-bold">Admin felület</p>
      </div>

      <div class="main-cards">

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Könyvek</p>
            <span class="material-icons-outlined text-blue">inventory_2</span>
          </div>
          <span class="text-primary font-weight-bold">0</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Rendelések</p>
            <span class="material-icons-outlined text-green">shopping_cart</span>
          </div>
          <span class="text-primary font-weight-bold">0</span>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Készlet változások</p>
            <span class="material-icons-outlined text-red">notification_important</span>
          </div>
          <span class="text-primary font-weight-bold">0</span>
        </div>

      </div>
    </main>
  </div>