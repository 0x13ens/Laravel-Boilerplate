<!-- now i've not extended main because my reasoning for that is i want to display
     a popup which takes up the full page, if i extend main it's going to drag in
     the header and footer which isn't needed, this page just needs to the bare mininum -->

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
                 <nav class="level">
                        <div class="level-item has-text-centered">
                          <figure class='image is-96x96'><img class="is-rounded" src='https://i.pinimg.com/236x/67/3c/d1/673cd19507dbb35e4b1fd00edabde1fc--breaking-bad-art-jamberry-nails.jpg'></figure>
                        </div>
                 </nav> 
                 <p class="subtitle">
                        "I'm sorry, but if you are not a member of Plymouth Drunks,<br /> what are you doing?!"
                 </p>
                <p class="title">
                        Join the Community!
                    </p>
     
                 <!-- let's make a register form which hits a post method, while checking
                 our key in case of cross site forgery -->
     
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                 <div class="columns is-mobile">
                         <div class="column is-one-third is-offset-one-third">
                                 <div class="field">
                                         <p class="control has-icons-left has-icons-right">
                                           <input class="input is-rounded" type="text" placeholder="Name" id="name" name="name">
                                           <span class="icon is-small is-left">
                                                <i class="far fa-user-circle"></i>
                                           </span>
                                           <span class="icon is-small is-right">
                                             <i class="fas fa-check"></i>
                                           </span>
                                         </p>
     
                                         <!-- if the user has made an error let's display them! -->
     
                                         @if ($errors->has('name'))
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('name') }}</strong>
                                                 </span>
                                             @endif
                                       </div>

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


                                        <!-- begin our password form field -->
     
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

                                       <!-- begin our password confirmation field -->

                                       <div class="field">
                                            <p class="control has-icons-left">
                                              <input class="input is-rounded" type="password" placeholder="Password" id="password-confirm" name="password_confirmation">
                                              <span class="icon is-small is-left">
                                                <i class="fas fa-lock"></i>
                                              </span>
                                            </p>
                                        </div>


                                       <div class="field">
                                         <p class="control">
                                           <button type="submit" class="button is-info is-fullwidth has-text-weight-semibold is-rounded">
                                                {{ __('Register') }}
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

