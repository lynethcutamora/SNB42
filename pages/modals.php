
        <div class="modal fade" id="CreateAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
              </div>
              <div class="modal-body">
                 <div class="register-box-body">
                    <form action="" method="post">
                      <div class="form-group has-feedback">
                        <div class="form-group">
                          <label>Select Type of User</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Ideator</option>
                            <option>Company</option>
                            <option>Investor </option>
                          </select>
                         </div><!-- /.form-group -->
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Last name">
                      </div>
                      <div class="form-group has-feedback">
                         <input type="text" class="form-control" placeholder="Middle Initial">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Age">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Gender">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Address">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="E-mail">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                      </div>
                       <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Retype password">
                      </div>
                      <div class="row">
                        <div class="col-xs-8">
                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                      </div>
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
        </div>
    
        <div class="modal fade" id="topidea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <?php include("ideas.php")?> 
              
                    </form>
                  </div><!-- /.form-box -->
                </div><!-- /.register-box -->
              </div>
            </div>
          </div>
        </div>