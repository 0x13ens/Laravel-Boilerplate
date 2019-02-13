@extends('layouts.app')

@section('content')
<section class="hero is-link is-medium">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <header class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item">
              <a href="/" class="is-size-4"><strong>Secure</strong>Press</a>
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroC" class="navbar-menu">
            <div class="navbar-end">
              <a href="/register" class="navbar-item">
                Register
              </a>
              <span class="navbar-item">
                <a href="login" class="button is-success is-inverted">
                  <span>Login</span>
                </a>
              </span>
            </div>
          </div>
        </div>
      </header>
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
            <li><a href="/">Overview</a></li>
            <li class="is-active"><a href="/modifiers">Modifiers</a></li>
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
        <table class="table is-bordered is-fullwidth">
            <tbody>
              <tr>
                <th rowspan="7">Date</th>
                <td><code>Day</code></td>
              <td>Adds the day to your password etc. pass<code>{{ $day }}</code>word</td>
              </tr>
              <tr>
                <td><code>Day of the week</code></td>
                  <td>Adds the day of the week to your password etc. pass<code>{{ $dayofweek }}</code>word</td>
                </tr>
              <tr>
              <td><code>Week of year</code></td>
                <td>Adds the week of the year to your password etc. pass<code>{{ $weekofyear }}</code>word</td>
              </tr>
              <tr>
                <td><code>Month</code></td>
                <td>Adds the month to your password etc. pass<code>{{ $month }}</code>word</td>
              </tr>
              <tr>
                <td><code>Days in Month</code></td>
                <td>Adds the days in a month to your password etc. pass<code>{{ $daysinmonth }}</code>word</td>
              </tr>
              <tr>
                <td><code>Year</code></td>
                <td>Adds the year to your password etc. pass<code>{{ $year }}</code>word</td>
              </tr>
              <tr>
                <td><code>Day of Year</code></td>
                <td>Adds the day of the month to your password etc. pass<code>{{ $dayofyear }}</code>word</td>
              </tr>
              <tr>
                <th rowspan="2">Time</th>
                <td><code>Minute</code></td>
                <td>Adds the minute to your password etc. pass<code>{{ $minute }}</code>word</td>
              </tr>
              <tr>
                <td><code>Hour</code></td>
                <td>Adds the hour to your password etc. pass<code>{{ $hour }}</code>word</td>
              </tr>
              <tr>
                <th rowspan="7">Others</th>
                <td><code>is-overlay</code></td>
              <td>null</td>
              </tr>
              <tr>
                <td><code>is-clipped</code></td>
                <td>Adds overflow <strong>hidden</strong></td>
              </tr>
              <tr>
                <td><code>is-radiusless</code></td>
                <td>Removes any <strong>radius</strong></td>
              </tr>
              <tr>
                <td><code>is-shadowless</code></td>
                <td>Removes any <strong>shadow</strong></td>
              </tr>
              <tr>
                <td><code>is-unselectable</code></td>
                <td>Prevents the text from being <strong>selectable</strong></td>
              </tr>
              <tr>
                <td><code>is-invisible</code></td>
                <td>Adds visibility <strong>hidden</strong></td>
              </tr>
              <tr>
                <td><code>is-sr-only</code></td>
                <td>Hide elements <strong>visually</strong> but keep the element available to be announced by a <strong>screen reader</strong></td>
              </tr>
            </tbody>
          </table>
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