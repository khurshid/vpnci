   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              New Company Details
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
						<form id="company" method="POST">
						<input type="hidden" name="code" value="<?php if(isset($row[0]['code'])) print $row[0]['code']; ?>" />
						 <div class="row clearfix">
                             <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" value="<?php if(isset($row[0]['name'])) print $row[0]['name']; ?>" class="form-control" required>
                                            <label class="form-label">Company Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" value="<?php if(isset($row[0]['location'])) print $row[0]['location']; ?>" name="location" class="form-control" required>
                                            <label class="form-label">Location</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="limit" value="<?php if(isset($row[0]['limit'])) print $row[0]['limit']; ?>" class="form-control" required>
                                            <label class="form-label">Maximum connection</label>
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
