@php
    use Illuminate\Support\Facades\Auth;
    $role = Auth::user()->role;
    $status = Auth::user()->status;
@endphp

<<<<<<< HEAD
=======

>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend_assets')}}/images/laptop-1928.png" class="logo-icon" alt="logo icon">
        </div>
<<<<<<< HEAD
        <div>
            <h4 class="logo-text">TechRevive</h4>
=======
        
        <div class="header__logo">
            <a href="{{url('/')}}"class="logo-text" style="font-family: 'Merriweather', serif"><span id="span1">T</span>Ech<span>Revive</span></a>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i></div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Utilisateur</li>
        <li>
            <a href="{{route('vendor-profile')}}" aria-expanded="false">
                <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title">Profil</div>
            </a>
        </li>
        <li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <a href="{{route('logout')}}" aria-expanded="false" onclick="event.preventDefault(); this.closest('form').submit();">
                    <div class="parent-icon"><i class="bx bx-log-out-circle"></i></div>
                    <div class="menu-title">Déconnexion</div>
                </a>
            </form>
        </li>
        <li class="menu-label"></li>
        @if($role === 'admin')
            <li>
<<<<<<< HEAD
                <a href="{{route('admin-vendor-list')}}" style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-world'></i></div>
                    <div class="menu-title">Fournisseurs</div>
=======
                <a  href="{{route('admin-vendor-list')}}" style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-world'></i>
                    </div>
                    <div class="menu-title">Users</div>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
                </a>
            </li>
        @endif
<<<<<<< HEAD

        @if($status)
            <li class="has-submenu">
                <a style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-checkmark-circle'></i></div>
                    <div class="menu-title">Marques</div>
                    <div class="submenu-arrow"><i class="bx bx-chevron-right"></i></div>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('brand')}}"><i class="bx bx-right-arrow-alt"></i>Voir Tout</a></li>
                    <li><a href="{{route('brand-add')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Marque</a></li>
=======
    
        @if($status && $role != 'Fabricant' && $role != 'client')
            <li>
                <a class="has-arrow" style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-checkmark-circle'></i>
                    </div>
                    <div class="menu-title">Brands</div>
                </a>
                <ul>
                    @if($role === 'admin')
                    <li> <a href="{{route('brand')}}"><i class="bx bx-right-arrow-alt"></i>Show All</a>
                    </li>
                    @endif
                    <li> <a href="{{route('brand-add')}}"><i class="bx bx-right-arrow-alt"></i>Add Brand</a>
                    </li>
                </ul>

            </li>
            <li>
                <a class="has-arrow" style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-folder'></i>
                    </div>
                    <div class="menu-title">Categories</div>
                </a>
                <ul>
                    @if($role === 'admin')
                    <li> <a href="{{route('category')}}"><i class="bx bx-right-arrow-alt"></i>Show All</a>
                    </li>
                    @endif
                    <li> <a href="{{route('category-add')}}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                    </li>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
                </ul>
            </li>
          </li>
        </ul>
        <ul class="metismenu" id="menu">
            <li class="has-submenu">
                <a style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-folder'></i></div>
                    <div class="menu-title">Catégories</div>
                    <div class="submenu-arrow"><i class="bx bx-chevron-right"></i></div>
                </a>
<<<<<<< HEAD
                <ul class="submenu">
                    <li><a href="{{route('category')}}"><i class="bx bx-right-arrow-alt"></i>Voir Tout</a></li>
                    <li><a href="{{route('category-add')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Catégorie</a></li>
                </ul>
                @if($role === 'vendor')
                <li>
                    <a href="{{ route('listepannes') }}" aria-expanded="false">
                        <div class="parent-icon"><i class='bx bx-list-ul'></i></div>
                        <div class="menu-title">Liste des Pannes</div>
                    </a>
                </li>
              
                @endif
            </li>
            <li class="has-submenu">
                <a style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-grid-alt'></i></div>
                    <div class="menu-title">Sous-catégories</div>
                    <div class="submenu-arrow"><i class="bx bx-chevron-right"></i></div>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('sub-category')}}"><i class="bx bx-right-arrow-alt"></i>Voir Tout</a></li>
                    <li><a href="{{route('sub-category-add')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Sous-catégorie</a></li>
=======
                <ul>
                    @if($role === 'admin')
                    <li> <a href="{{route('sub-category')}}"><i class="bx bx-right-arrow-alt"></i>Show All</a>
                    </li>
                    @endif
                    <li> <a href="{{route('sub-category-add')}}"><i class="bx bx-right-arrow-alt"></i>Add Sub
                            Category</a>
                    </li>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
                </ul>
            </li>
            <li class="has-submenu">
                <a style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-graph'></i></div>
                    <div class="menu-title">Produits</div>
                    <div class="submenu-arrow"><i class="bx bx-chevron-right"></i></div>
                </a>
<<<<<<< HEAD
                <ul class="submenu">
                    <li><a href="{{route('vendor-product')}}"><i class="bx bx-right-arrow-alt"></i>Voir Tout</a></li>
                    <li><a href="{{route('vendor-product-add')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Produit</a></li>
=======
                <ul>
                    <li> <a href="{{route($role . '-product')}}"><i class="bx bx-right-arrow-alt"></i>Show All</a>
                    </li>
                    <li> <a href="{{route($role . '-product-add')}}"><i class="bx bx-right-arrow-alt"></i>Add
                            Product</a>
                    </li>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
                </ul>
            </li>
            <li class="has-submenu">
                <a style="cursor: pointer">
                    <div class="parent-icon"><i class='lni lni-wallet'></i></div>
                    <div class="menu-title">Coupons</div>
                    <div class="submenu-arrow"><i class="bx bx-chevron-right"></i></div>
                </a>
<<<<<<< HEAD
                <ul class="submenu">
                    <li><a href="{{route('vendor-coupon')}}"><i class="bx bx-right-arrow-alt"></i>Voir Tout</a></li>
                    <li><a href="{{route('vendor-coupon-add')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Coupon</a></li>
=======
                <ul>
                    <li> <a href="{{route('vendor-coupon')}}"><i class="bx bx-right-arrow-alt"></i>Show All</a>
                    </li>
                    <li> <a href="{{route('vendor-coupon-add')}}"><i class="bx bx-right-arrow-alt"></i>Add
                            Coupon</a>
                    </li>
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
                </ul>
            </li>
            <!-- Autres éléments de la barre latérale... -->
        @endif
    </ul>
    <!--end navigation-->
</div>

<script>
    const submenuItems = document.querySelectorAll('.has-submenu');
    submenuItems.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('submenu-open');
            const submenu = item.querySelector('.submenu');
            const submenuArrow = item.querySelector('.submenu-arrow i');
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
                submenuArrow.classList.remove('bx-chevron-down');
                submenuArrow.classList.add('bx-chevron-right');
            } else {
                submenu.style.display = 'block';
                submenuArrow.classList.remove('bx-chevron-right');
                submenuArrow.classList.add('bx-chevron-down');
            }
        });
    });
</script>
<script>
  const submenuItems = document.querySelectorAll('.has-submenu');
  submenuItems.forEach(item => {
      const submenu = item.querySelector('.submenu');
      const submenuArrow = item.querySelector('.submenu-arrow i');
      
      item.addEventListener('click', () => {
          submenu.classList.toggle('submenu-open');
          submenuArrow.classList.toggle('bx-chevron-down');
          submenuArrow.classList.toggle('bx-chevron-right');
      });
      
      // Masquer les sous-menus par défaut
      submenu.style.display = 'none';
  });
</script>

