   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               IP List
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
                                            <th>IP/Domain</th>
                                            <th>Company Code</th>
                                            <th>Port</th>
											 <th>Remote Identifier</th>
                                            <th>Created date</th>
											<th>Version</th>
                                        </tr>
                                    </thead>
                                   <tbody>
								<?php 
								foreach($rows as $r) { ?>
								   <tr>
                                            <td><?php print anchor('ip/add/'.$r['id'], $r['ip'], 'title="Edit"');?></td>
                                            <td><?php print $r['ccode']?></td>
											<td><?php print !empty($r['port'])?$r['port']:'NA'?></td>
											<td><?php print !empty($r['remote_identifier'])?$r['remote_identifier']:'NA'?></td>
                                            <td><?php print $r['cdate']?></td>
											<td><?php print $r['version']?></td>
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
