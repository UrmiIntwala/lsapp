<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#132639">
  <span class="navbar-brand" style="background-image: linear-gradient(to right,#336699,#132639,#336699,#132639,#336699); font-size:140% " >
    <b><i>{{config('app.name','LAGOON')}}</i></b></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" 
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link nav-hover" href="/" style="color:white; font-size:130%;font-family:Verdana, Geneva, Tahoma, sans-serif">CARS</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item ">
            <a class="nav-link" href="#" style="color:white; font-size:130%;font-family:Verdana, Geneva, Tahoma, sans-serif">HELP&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#myModalSignUp1" data-toggle="modal" data-target="#myModalSignUp1 " 
            style="color:white; font-size:130%;font-family:Verdana, Geneva, Tahoma, sans-serif">SIGNUP&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#myModal" data-toggle="modal" data-target="#myModal " 
              style="color:white; font-size:130%;font-family:Verdana, Geneva, Tahoma, sans-serif">LOGIN&nbsp;&nbsp;</a>
        </li>
      </ul>
    </div>
</nav>

<!--ModalSignUp1-->
<!-- Modal -->
<div id="myModalSignUp1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="text-align:center">
          <div class="col-sm-5">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <!--Controls-->
              <div class="controls-top" >
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left" ></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
              </div>
              <!--/.Controls-->
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/refer_and_earn.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Refer and invite your friends to Lagoon and earn free rides,
                    free Zpoints and more.</p>
                    </div>
                  </div>
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/free_fuel.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">The fuel is on us for your complete trip.Incase you 
                    re-fuel your car we will re-fill your pockets and that's a promise. </p>
                    </div>
                  </div>
                </div>
                <!--/.Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/suprimers_club.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Your Lagoon experience is much morerewarding when you become 
                      our Suprimer's Club Member</p>
                    </div>
                  </div>
                </div>
                <!--/.Third slide-->
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-sm-7">
            <img src="img/lagoon.png" style="height: 35% ;" >
            <p style="color:gray">Continue with</p>
            <br>
            <button type="button" class="btn btn-primary btn-md" style="width:50%">Facebook</button><br><br>
            <button type="button" class="btn btn-danger btn-md" style="width:50%">Google</button><br><br>
            <br>
            <!--<div class="form-group"><center>
              <input type="text" class="form-control" id="mobile_no." style="width: 60%" placeholder="Enter your Mobile number">
            </center></div>-->
            <button type="button" class="button btn " href="#myModalSignUp" data-toggle="modal" data-target="#myModalSignUp " >
                <span>GO!!</span></button> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      


<!--SIGNUP MODAL-->
<!-- Modal -->
{!! Form::open(['action'=>'SignUpController@store','id'=>'reg_form','method'=>'POST','role'=>'form','data-toggle'=>'validator']) !!}
<div id="myModalSignUp" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row" style="text-align:center">
            <div class="col-sm-5">
              <!--Carousel Wrapper-->
              <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Controls-->
                <div class="controls-top" >
                  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left" ></i></a>
                  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                  <li data-target="#multi-item-example" data-slide-to="1"></li>
                  <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                    <div class="card mb-2">
                      <img class="card-img-top" src="img/refer_and_earn.png"
                      alt="Card image cap">
                      <div class="card-body">
                      <p class="card-text">Refer and invite your friends to Lagoon and earn free rides,
                      free Zpoints and more.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.First slide-->
                  <!--Second slide-->
                  <div class="carousel-item">
                    <div class="card mb-2">
                      <img class="card-img-top" src="img/free_fuel.png"
                      alt="Card image cap">
                      <div class="card-body">
                      <p class="card-text">The fuel is on us for your complete trip.Incase you 
                      re-fuel your car we will re-fill your pockets and that's a promise. </p>
                      </div>
                    </div>
                  </div>
                  <!--/.Second slide-->
                  <!--Third slide-->
                  <div class="carousel-item">
                    <div class="card mb-2">
                      <img class="card-img-top" src="img/suprimers_club.png"
                      alt="Card image cap">
                      <div class="card-body">
                      <p class="card-text">Your Lagoon experience is much morerewarding when you become 
                        our Suprimer's Club Member</p>
                      </div>
                    </div>
                  </div>
                  <!--/.Third slide-->
                </div>
                <!--/.Slides-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-sm-7">
              <img src="img/lagoon.png" style="height: 30%;" >
              <p style="color:gray">Continue with</p>
              <br>
              
              <div class="form-group"><center>
                 <input type="text" class="form-control" id="name" name="name" style="width: 70%" 
                 placeholder="Name as on Driving License" data-error="Name is required" required>
                </center>
                <div class="help-block with-errors"></div>
              </div>
              <br>
              
              <div class="form-group"><center>
                <input type="email" class="form-control" id="inputEmail" name="emailid" 
                style="width: 70%" placeholder="Enter your EmailID" 
                data-error="Bruh, that email address is invalid" required>
                </center>
                <div class="help-block with-errors"></div>
              </div>
                <br>
              <div class="form-group "><center>
              <input type="tel" class="form-control" id="mobileno" pattern="^[7-9]{1}[0-9]{9}$" name="mobileno" style="width: 70%" 
              placeholder="Enter your Mobile number "  data-pattern-error="Please enter valid mobile no." required >
              </center>
              <div class="help-block with-errors"></div>
            </div>
              <br>
              <div class="form-group has-feedback"><center>
                 <input type="password" class="form-control" id="password" name="password" minlength="6"
                 style="width: 70%" placeholder="Password (minimum 6 charachters)" 
                 data-error="Minimum 6 charachters required" required>
                  </center>
                <div class="help-block"></div>
              </div>
              <!--<button type="button" class="button btn" style="width: 50%" href="#myModal" data-toggle="modal" data-target="#myModal " >
                <span>SIGN UP</span></button>--> 
                {{Form::submit('SIGNUP',['class'=>'button btn','style'=>'width: 50%'])}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  {!! Form::close() !!}

  <!--Modal Login-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="text-align:center">
          <div class="col-sm-5">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <!--Controls-->
              <div class="controls-top" >
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left" ></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
              </div>
              <!--/.Controls-->
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/refer_and_earn.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Refer and invite your friends to Lagoon and earn free rides,
                    free Zpoints and more.</p>
                    </div>
                  </div>
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/free_fuel.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">The fuel is on us for your complete trip.Incase you 
                    re-fuel your car we will re-fill your pockets and that's a promise. </p>
                    </div>
                  </div>
                </div>
                <!--/.Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/suprimers_club.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Your Lagoon experience is much morerewarding when you become 
                      our Suprimer's Club Member</p>
                    </div>
                  </div>
                </div>
                <!--/.Third slide-->
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-sm-7">
            <img src="img/lagoon.png" style="height: 35% ;" >
            <p style="color:gray">Continue with</p>
            <br>
            <button type="button" class="btn btn-primary btn-md" style="width:50%">Facebook</button><br><br>
            <button type="button" class="btn btn-danger btn-md" style="width:50%">Google</button><br><br>
            <br>
            <!--<div class="form-group"><center>
              <input type="text" class="form-control" id="mobile_no." style="width: 60%" placeholder="Enter your Mobile number">
            </center></div>-->
            <button type="button" class="button btn " href="#myModalLogin1" data-toggle="modal" data-target="#myModalLogin1" >
              <span>GO!!</span></button> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  
 <!--LOGIN Modal 1-->
 <!-- Modal -->
<div id="myModalLogin1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" style="text-align:center">
          <div class="col-sm-5">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
              <!--Controls-->
              <div class="controls-top" >
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left" ></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
              </div>
              <!--/.Controls-->
              <!--Indicators-->
              <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
              </ol>
              <!--/.Indicators-->
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/refer_and_earn.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Refer and invite your friends to Lagoon and earn free rides,
                    free Zpoints and more.</p>
                    </div>
                  </div>
                </div>
                <!--/.First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/free_fuel.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">The fuel is on us for your complete trip.Incase you 
                    re-fuel your car we will re-fill your pockets and that's a promise. </p>
                    </div>
                  </div>
                </div>
                <!--/.Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                  <div class="card mb-2">
                    <img class="card-img-top" src="img/suprimers_club.png"
                    alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Your Lagoon experience is much morerewarding when you become 
                      our Suprimer's Club Member</p>
                    </div>
                  </div>
                </div>
                <!--/.Third slide-->
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-sm-7">
            <img src="img/lagoon.png" style="height: 35% ;" >
            <p style="color:gray">Continue with</p>
            <br>
            <br>
            <div class="form-group"><center>
              <input type="text" class="form-control" id="mobile_no." style="width: 60%" placeholder="Enter your EmailId">
            </center></div><br>
            <div class="form-group"><center>
              <input type="text" class="form-control" id="mobile_no." style="width: 60%" placeholder="Enter your Password">
            </center></div><br><br>
            <button type="button" class="button btn " href="#">
              <span>LOGIN</span></button> 
              {{Form::password('password',['class'=>'form-control','style'=>'width: 70%','placeholder'=>'Password (minimum 8 charachters)'])}}
              {{Form::text('name', '',['class'=>'form-control','style'=>'width: 70%','placeholder'=>'Name as on Driving License'])}}
              {{Form::email('emailid', 'example@gmail.com',['class'=>'form-control','style'=>'width: 70%','placeholder'=>'Enter your email id'])}}
              {{Form::text('mobileno', '',['class'=>'form-control','style'=>'width: 70%','placeholder'=>'Enter your mobile no'])}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

  
  