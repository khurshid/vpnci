   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add IP Details
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
						<form id="frmip" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="h_certificate" value="<?php if(isset($row[0]['certificate'])) print $row[0]['certificate']; ?>" />
						<input type="hidden" name="id" value="<?php if(isset($row[0]['id'])) print $row[0]['id']; ?>" />
						<input type="hidden" name="version" value="<?php if(isset($row[0]['version'])) print $row[0]['version']; ?>" />
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
                                            <input type="text" name="ip" id="ip" class="form-control" value="<?php if(isset($row[0]['ip'])) print $row[0]['ip']; ?>" required>
                                            <label class="form-label">IP/Domain Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="port" maxlength="4" class="form-control" value="<?php if(isset($row[0]['port'])) print $row[0]['port']; ?>">
                                            <label class="form-label">Port</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="secret_key" class="form-control" value="<?php if(isset($row[0]['secret_key'])) print $row[0]['secret_key']; ?>">
                                            <label class="form-label">Secret Key</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <label for="certificate">Upload Certificate <?php if(isset($row[0]['certificate'])) print '('. anchor("certificates/".$row[0]['certificate'],'download','title="Download this certificate"') .')';?></label>
									<div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" id="certificate" name="certificate" class="form-control">
                                            
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="remote_identifier" class="form-control" value="<?php if(isset($row[0]['remote_identifier'])) print $row[0]['remote_identifier']; ?>">
                                            <label class="form-label">Remote Identifier</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="local_identifier" class="form-control" value="<?php if(isset($row[0]['local_identifier'])) print $row[0]['local_identifier']; ?>">
                                            <label class="form-label">Local Identifier</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-3">
								<button type="submit" class="btn btn-block bg-deep-orange waves-effect btn-lg">Save</button>
								</div>
                        </div>
						</form>
						</div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
             </div>
    </section>
