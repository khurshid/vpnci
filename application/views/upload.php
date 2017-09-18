   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FILE UPLOAD - WITH CLICK & CHOOSE
                                <small>username and password list csv file</a></small>
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
					   <div class="row clearfix">
					   <?php if($error!='') { ?>
					<div class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <?php print $error;?>       </div>
					<?php }?>
					   <form action="upload" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6">
									    <select name="ccode" class="form-group show-tick" required>
                                        <option value="">-- Select Company --</option>
                                       <?php print $companyList;?>
                                    </select>
							</div>
							 <div class="col-sm-6">
							<input type="file" name="userFile" class="form-group" id="userFile" required /><span id="sampleFile"><a href="<?php print base_url('/uploads/vpn-users-sample.csv');?>" download>Download Sample File</a></span>
							</div>
							 <div class="col-sm-3">
								<button type="submit" class="btn btn-block bg-deep-orange waves-effect btn-lg">Save</button>
								</div>
                       </form>
					   </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
             </div>
    </section>