<header class="banner banner-wrapper">
    <div class="banner container d-flex align-items-center justify-content-between">
        <a class="brand" style="transform: scale(.97)" href="{{ home_url('/') }}">
            <svg width="112" height="112" viewBox="0 0 159 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M119.25 119.25C141.203 97.2967 141.203 61.7033 119.25 39.75C97.2967 17.7967 61.7033 17.7967 39.75 39.75C17.7967 61.7033 17.7967 97.2967 39.75 119.25C61.7033 141.203 97.2967 141.203 119.25 119.25Z"
                    stroke="#404D52" stroke-width="4" stroke-miterlimit="22.9256" />
                <path
                    d="M48 85V55H51.545L63.9984 73.3653L76.5151 55H80V85H76.2273V61.5767L63.9984 79.3228L51.7727 61.5767V85H48Z"
                    fill="#404D52" />
                <path
                    d="M71 96.2095H74.7731V100.919C74.7731 102.861 75.4959 104.282 76.9322 105.151C78.3685 106.029 80.7146 106.469 83.9518 106.469C87.1422 106.469 89.32 105.917 90.4822 104.825C91.6443 103.733 92.2269 101.648 92.2269 98.5643V79H96V99.5726C96 103.292 95.0154 105.964 93.0526 107.58C91.0928 109.196 87.837 110 83.2663 110C79.1101 110 76.0224 109.262 74.016 107.785C72.0095 106.308 71.0031 104.046 71.0031 101.021V96.2095H71Z"
                    fill="#404D52" />
                <path d="M105 110L104 55" stroke="#404D52" stroke-width="4.252" stroke-miterlimit="22.9256" />
            </svg>

        </a>
        <nav class="nav-primary">
            @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav' , 'menu_id' => 'menu']) !!}
            @endif
        </nav>
    </div>
</header>