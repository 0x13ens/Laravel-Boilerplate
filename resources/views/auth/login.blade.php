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
     
                     <!-- we don't users to be stuck on the login page so i'm going to
                       provide them with a X Icon which goes back to the home page -->
     
                     <div class="navbar-end">
                         <span class="navbar-item">
                             <a class="button is-info is-inverted is-outlined" href="/">
                               <span class="icon">
                                 <i class="fas fa-lg fa-times"></i>
                               </span>
                             </a>
                         </span>
                      </div>
                 </div>
                 </nav>
             </div>
             
             <div class="hero-body">
                 <div class="container has-text-centered">
                 <p class="title">
                     Welcome Back!
                 </p>
                 <p class="subtitle">
                     Subtitle
                 </p>
     
                 <!-- let's make a login form which hits a post method, while checking
                 our key in case of cross site forgery -->
     
                 <form action="{{ route('login') }}" method="post">
                         {{ csrf_field() }}
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
                                         <p class="control has-icons-left">
                                           <input class="input is-rounded" type="password" placeholder="Password" id="password" name="password">
                                           <span class="icon is-small is-left">
                                             <i class="fas fa-lock"></i>
                                           </span>
                                         </p>
     
                                         <!-- if the user has made an error let's display them! -->
                                         @if ($errors->has('password'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('password') }}</strong>
                                         </span>
                                         @endif
                                       </div>
                                       <div class="field">
                                         <p class="control">
                                           <button type="submit" class="button is-info is-fullwidth has-text-weight-semibold is-rounded">
                                                 {{ __('Login') }}
                                           </button>
                                         </p>
                                       </div>
                         </div>
                       </div>
                     </div>
             </div>
             <div class="container">
             <hr class="navbar-divider"> <!-- style needs chaning just a place holder borrowed from the navbar atm -->
             <div class="hero-footer has-text-centered">
                     @if (Route::has('password.request'))
                         <a class="button is-info is-inverted is-outlined is-rounded has-text-weight-semibold" href="{{ route('password.request') }}">
                             {{ __('Forgot Your Password?') }}
                         </a>
                     @endif
             </div><br>
         </div>
         </section>
       </body>
     </html>