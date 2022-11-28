<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('front.index')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Accueil</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('front.nfts.show', ['nft' => $nft->id ?? null])}}">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title"> Detail</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('front.collection')}}">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Collection</span>
        </a>
      </li>
      
    </ul>
  </nav>
