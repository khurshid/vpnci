   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              New User Details
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
						<form id="user" method="POST">
						 <div class="row clearfix">
						 <div class="col-sm-6">
									    <select name="ccode" class="form-group show-tick" required>
                                        <option value="">-- Select Company --</option>
                                       <?php print $companyList;?>
                                    </select>
							</div>
                             <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="username" value="<?php if(isset($row[0]['username'])) print $row[0]['username']; ?>" class="form-control" required>
                                            <label class="form-label">User Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="password" value="<?php if(isset($row[0]['password'])) print $row[0]['password']?>" class="form-control" required>
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-9">
								<label class="form-label">Status</label>
                                    <div class="form-group">
                                       
										<select name="status" size="1">
										<option value="1" <?php if(isset($row[0]['status']) && $row[0]['status']==1) print 'selected';?>>Active</option>
										<option value="0" <?php if(isset($row[0]['status']) && $row[0]['status']==0) print 'selected';?>>Block</option>
                                            </select>
                                    </div>
                                </div>
								<?php if(isset($row[0]['isused']) && $row[0]['isused']==1) : ?>
								<div class="col-sm-3">
								<label class="form-label">Assigned status</label>
								<div class="switch">
								<div class="form-group">
                                    <label>OFF<input name="isused" type="checkbox" checked=""><span class="lever"></span>ON</label>
                                </div>
								</div>
                                </div>
								<?php endif;?>
								<div class="col-sm-4">
								<div class="form-group">
								<button type="submit" class="btn btn-block bg-deep-orange waves-effect btn-lg">Save</button>
								</div>
								</div>
                        </div>
						<?php if( isset($row[0]['id']) && $row[0]['id']):?>
						<input type="hidden" value="<?php print $row[0]['id']?>" name="id" />
						<?php endif;?>
						</form>
						</div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
             </div>
    </section>
