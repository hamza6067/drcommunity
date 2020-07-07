<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href=""/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="logstyle.css">
        <style>
            
        </style>
    </head>
    <body>
      <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- here top bar started-->
        <div class="container-fluid top_bar" style="height:30px;" >
            <div class="container">
                <div class="row">
                <div class="col-sm-6 social" style="height:30px;float:left;background: #563d7c;">
                    <a href="" class="slink"><i class="fa fa-facebook"></i></a>
                    <a href="" class="slink"><i class="fa fa-twitter"></i></a>
                    <a href="" class="slink"><i class="fa fa-youtube-play "></i></a>
                    <a href="" class="slink"><i class="fa fa-google-plus "></i></a>
                </div>
                <div class="col-sm-4 text-right contact" style="height:30px;float:left;background: #563d7c;">
                    <span class="glyphicon glyphicon-envelope ico"> supports@doctorscommunity.com,</span>
                </div>
                    <div class="col-sm-2 text-left contact" style="height:30px;float:left;background: #563d7c;">
                        <span class="glyphicon glyphicon-earphone ico"> +91-8354885643</span>
                    </div>
                </div>
            </div>
        </div>
        <!--signup started-->
        <div class="container-fluid mainback">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6 form">
                        <div style="width:100%;color:white;text-align:center;margin-top:-40px;">
                           <i class="fa fa-user-circle fa-4x"></i> 
                        </div>
                        <div class="sign">
                           Login 
                        </div>
                        <form action="code.php?flg=3" method="POST">
                            <div class="form-group">
                                <label style="color:white;">Who u r?</label>
                                <select name="who"><option>--</option>
                                    <option>doctor</option>
                                        <option>patient</option>
                                    </select>

                            </div>
                            <div class="form-group">
                                <label for="email" style="color:white;">Email:</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="color:white;">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-group" style="text-align:center;">
                                <input type="submit" class="btn btn-success" />
                            </div>
                            <div class="form-group" style="text-align:center;">
                                <span style="color:aqua;">Not registered?<a href="registration.php"> Click here to Sign up</a></span>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
        </body>
</html>