   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Dashboard
                   </h2>
            </div>
                        <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">FREE USERS</div>
                            <div class="number count-to"><?php print $freeusr;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">USED USERS</div>
                            <div class="number count-to"><?php print $usedusr;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL COMPANY</div>
                            <div class="number count-to"><?php print $tcompany;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL IP</div>
                            <div class="number count-to"><?php print $tip;?></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

			<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               VPN Users
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Company Code</th>
                                            <th>Status</th>
                                            <th>Created date</th>
                                        </tr>
                                    </thead>
                                   <tbody>
<?php 
foreach($rows as $r) { ?>
	                                
								   <tr <?php if($r['isused']) {print 'class="bg-purple"'; print 'title="This record already used"';} ?>>
                                            <td><?php print anchor('users/add/'.$r['id'], $r['username'], 'title="Edit"');?></td>
                                            <td><?php print $r['password']?></td>
											<td><?php print !empty($r['ccode'])?$r['ccode']:'NA'?></td>
                                            <td><?php print $r['status']==1?'Active':'Blocked';?></td>
                                            <td><?php print $r['cdate']?></td>
                                        </tr>
<?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
             </div>
    </section>
