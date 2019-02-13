@extends('layouts.app')

@section('content')
<section class="hero is-link is-medium">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        @if (Auth::check()) <!-- check if user is logged in, if not authed logged in -->
        <div class="hero-head">
        <nav class="navbar">
        <div class="container">
        <div class="navbar-brand">
                <a href="/" class="is-size-4"><strong>Plymouth </strong> Drunks</a>
                <div class="navbar-burger burger" data-target="#menu-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
          <div id="navbarMenuHeroB" class="navbar-menu">
            <div class="navbar-end">
                <a href="/login" class="navbar-item has-text-weight-semibold">
                  My Events
                </a>
                <a href="/profile" class="navbar-item has-text-weight-semibold">
                  My Profile
                </a>
                <!-- this checks if the user has the status role of admin from user table
                  then displays a admin panel link -->
                @if(Auth::user()->isAdmin())
                <a href="/admin" class="navbar-item has-text-weight-semibold">
                  Admin Panel
                </a>
                @endif
              <span class="navbar-item">
                <!--We need to use a hidden form here to prevent cross-site request forgery, 
                since our key is generated at page load, only we have the correct key to hit 
                the csrf method, which if it isn't valid other users will just be redirected
                to our auth route -->
                  <a class="button is-info is-inverted is-outlined is-rounded has-text-weight-semibold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                      Logout
                  </a>    
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </span>
            </div>
        </div>
        </div>
        </nav>
        </div>
        @else <!-- if user isn't logged in display this -->
        <div class="hero-head">
          <nav class="navbar">
            <div class="container">
                    <div class="navbar-brand">
                        <a href="/" class="is-size-4"><strong>Plymouth </strong> Drunks</a>
                        <div class="navbar-burger burger" data-target="#menu-mobile">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                      </div>
                <div id="navbarMenuHeroB" class="navbar-menu">
                  <div class="navbar-end">
                  <a href="/login" class="navbar-item has-text-weight-bold">
                    SIGN IN
                  </a>
                  <span class="navbar-item">
                    <a href="/register" class="button is-info is-inverted is-outlined is-rounded has-text-weight-semibold">GET STARTED</a>
                  </span>
               </div>
              </div>
            </div>
          </nav>
        </div>
        @endif
    </div>
  
    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          The Smart Password API
        </h1>
        <h2 class="subtitle">
          Smart Dynamic Passwords
        </h2>
      </div>
    </div>
  
    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
      <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
          <ul>
            <li class="is-active"><a>Overview</a></li>
            <li><a href="/modifiers">Modifiers</a></li>
            <li><a>Grid</a></li>
            <li><a>Elements</a></li>
            <li><a>Components</a></li>
            <li><a>Layout</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>

  <div class="section">
  <div class="container has-text-centered">
    <h1 class="title">
      The Best Security for passwords
    </h1>
    <h2 class="subtitle is-6">We mix normal passwords with dynamic(always changing) questions so you're password is secure</h2>
  </div>
</div>

  <div class="section">
    <div class="container">
      <div class="pricing-table is-comparative">
        <div class="pricing-plan is-features">
          <div class="plan-header">Features</div>
          <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
          <div class="plan-items">
            <div class="plan-item">Storage</div>
            <div class="plan-item">Domains</div>
            <div class="plan-item">Bandwidth</div>
            <div class="plan-item">Email Boxes</div>
          </div>
          <div class="plan-footer">
      
          </div>
        </div>
        <div class="pricing-plan">
          <div class="plan-header">Starter</div>
          <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>20</span>/month</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Storage">20GB</div>
            <div class="plan-item" data-feature="Domains">100</div>
            <div class="plan-item" data-feature="Bandwidth">-</div>
            <div class="plan-item" data-feature="Email Boxes">-</div>
          </div>
          <div class="plan-footer">
            <button class="button is-fullwidth" disabled="disabled">Current plan</button>
          </div>
        </div>
      
        <div class="pricing-plan is-warning">
          <div class="plan-header">Startups</div>
          <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>40</span>/month</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Storage">20GB</div>
            <div class="plan-item" data-feature="Domains">25</div>
            <div class="plan-item" data-feature="Bandwidth">1TB</div>
            <div class="plan-item" data-feature="Email Boxes">-</div>
          </div>
          <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
          </div>
        </div>
      
        <div class="pricing-plan is-active">
          <div class="plan-header">Growing Team</div>
          <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>60</span>/month</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Storage">200GB</div>
            <div class="plan-item" data-feature="Domains">50</div>
            <div class="plan-item" data-feature="Bandwidth">1TB</div>
            <div class="plan-item" data-feature="Email Boxes">100</div>
          </div>
          <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
          </div>
        </div>
      
        <div class="pricing-plan is-danger">
          <div class="plan-header">Enterprise</div>
          <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>100</span>/month</div>
          <div class="plan-items">
            <div class="plan-item" data-feature="Storage">2TB</div>
            <div class="plan-item" data-feature="Domains">100</div>
            <div class="plan-item" data-feature="Bandwidth">1TB</div>
            <div class="plan-item" data-feature="Email Boxes">1000</div>
          </div>
          <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="hero is-link footer is-fullwidth">
        
    <!-- I personally like seperate columns with links for our footer -->
    <div class="columns">
            <div class="column">
                <a href="/" class="is-size-4"><strong>Secure</strong>Press</a>
                <p>Nine out of ten doctors recommend the Plymouth Drunks Assocation over competing brands. Come inside, see for yourself, and massively level up your drinking skills in the process.</p>
            </div>
            <div class="column">
                <h6 class="title is-5">LEARN</h6>
                <a href="/">Browse</a><br>
                <a href="/">Lesson Index</a><br>
                <a href="/">Sign Up</a><br>
                <a href="/">Sign In</a>
            </div>
            <div class="column">
                <h6 class="title is-5">DISCUS</h6>
                <a href="/">Forum</a><br>
                <a href="/">Lesson Index</a><br>
                <a href="/">Sign Up</a><br>
                <a href="/">Sign In</a>
            </div>
            <div class="column">
                <h6 class="title is-5">EXTRAS</h6>
                <a href="/">Browse</a><br>
                <a href="/">Lesson Index</a><br>
                <a href="/">Sign Up</a><br>
                <a href="/">Sign In</a>
            </div>
          </div>
</footer>
@endsection

@section('scripts')
<script>
var app = new Vue({ 
     el: '#app', 
     data: {
     } 
});
</script>
@endsection