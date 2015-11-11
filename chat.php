<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Widgets</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- Direct Chat -->
          <div class="row">
            <div class="col-md-3">
              <!-- DIRECT CHAT PRIMARY -->
              <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Group Chat</h3>
                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Alexander Pierce</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        Is this template really for free? That's unbelievable!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">Sarah Bullock</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                      </div><!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        You better believe it!
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->

                  </div><!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>

                      </li><!-- End Contact Item -->
                       <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                        
                      </li><!-- End Contact Item -->
                       <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                        
                      </li><!-- End Contact Item -->
                       <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                        
                      </li><!-- End Contact Item -->
                       </li><!-- End Contact Item -->
                       <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                        
                      </li><!-- End Contact Item -->
                       </li><!-- End Contact Item -->
                       <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Jason Pitogo
                            </span>
                          </div><!-- /.contacts-list-info -->
                        </a>
                        
                      </li><!-- End Contact Item -->

                    </ul><!-- /.contatcts-list -->
                  </div><!-- /.direct-chat-pane -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat">Send</button>
                      </span>
                    </div>
                  </form>
                </div><!-- /.box-footer-->
              </div><!--/.direct-chat -->
            </div><!-- /.col -->

          
                </div><!-- /.box-body -->
               
              </div><!--/.direct-chat -->
            </div><!-- /.col -->
          </div><!-- /.row -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
