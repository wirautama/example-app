<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('/*') ? 'active' : '' }}">
      <a href="/"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="{{ Request::is('/data-master*') ? 'active' : '' }}">
      <a href="/data-master"><i class="glyphicon glyphicon-education"></i><span>Data Master</span></a>
    </li>
    <li class="{{ Request::is('/data-transaksi*') ? 'active' : '' }}">
      <a href="/data-transaksi"><i class="glyphicon glyphicon-transfer"></i><span>Data Transaksi</span></a>
    </li>
    <li class="{{ Request::is('/data-mahasiswa*') ? 'active' : '' }}">
      <a href="/data-mahasiswa"><i class="glyphicon glyphicon-transfer"></i><span>Data mahasiswa</span></a>
    </li>
  </ul>