<!-- now i've not extended main because my reasoning for that is i want to display
     a popup which takes up the full page, if i extend main it's going to drag in
     the header and footer which isn't needed, this page just needs to the mininum -->

     <!DOCTYPE html>
     <html>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Hello Bulma!</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
         <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
     </head>
     <body>
     <section class="hero is-link is-fullheight">
             <div class="hero-head">
                 <nav class="navbar">
                 <div class="container">
                     <div class="navbar-brand">
                     <a class="navbar-item">
                         <a href="/" class="is-size-4"><strong>Plymouth </strong> Drunks</a>
                     </a>
                     <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                     </div>
                 </div>
                 </nav>
             </div>
             
             <div class="hero-body">
                 <div class="container has-text-centered">
                 <p class="title">
                     Reset Your Password
                 </p>
                 <p class="subtitle">
                     It happens a lot, don't worry!
                 </p>
     
                 <!-- let's make a login form which hits a post method, while checking
                 our key in case of cross site forgery -->
     
                 <form method="POST" action="{{ route('password.email') }}">
                         @csrf
                 <div class="columns is-mobile">
                         <div class="column is-one-third is-offset-one-third">
                                 <div class="field">
                                         <p class="control has-icons-left has-icons-right">
                                         <input class="input is-rounded" type="email" placeholder="Email" id="email" name="email">
                                         <span class="icon is-small is-left">
                                             <i class="fas fa-envelope"></i>
                                         </span>
                                         <span class="icon is-small is-right">
                                             <i class="fas fa-check"></i>
                                         </span>
                                         </p>
     
                                         <!-- if the user has made an error let's display them! -->
     
                                         @if ($errors->has('email'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                             @endif
                                     </div>
                                     <div class="field">
                                         <p class="control">
                                         <button type="submit" class="button is-info is-fullwidth has-text-weight-semibold is-rounded">
                                                 {{ __('Send Password Reset Link') }}
                                         </button>
                                         </p>
                                     </div>
                         </div>
                     </div>
                     </div>
             </div>
         </section>
     </body>
     </html>