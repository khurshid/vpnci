   <section class="content">
        <div class="container-fluid">
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               CMS User List
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
						 <!-- Small Size -->
             <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Create New User</h4>
                        </div>
                        <div class="modal-body">
						<div id="msg" class="alert bg-pink alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Error in saving data. Please try another email or contact System Admin!
                            </div>
						<form action="<?php print base_url('users/saveAdminUser')?>" name="admin-user" id="admin-user" method="post">
                           <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" name="name" class="form-control" required>
                                            <label class="form-label">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" id="email" name="email" class="form-control" required>
                                            <label class="form-label">E-mail</label>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control" required>
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-float form-group-lg">
                                       <label>is Admin User?
									   <div class="switch">
                                            <label>NO<input id="isadmin" name="isadmin" type="checkbox"><span class="lever switch-col-purple"></span>YES</label>
                                        </div>
										
                                    </div>
                                  </div>
								   <div class="col-sm-6">
                                    <div class="form-group form-float form-group-lg">
                                       <label>Enable/Disable
									   <div class="switch">
                                            <label>No<input id="status" name="status" type="checkbox" checked><span class="lever switch-col-purple"></span>YES</label>
                                        </div>
										
                                    </div>
                                  </div>
                            </div>
							
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="saveadmin" class="btn bg-purple waves-effect">SAVE</button>
                            <button type="button" class="btn bg-red waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
						</form>
                    </div>
                </div>
            </div>
                            <div class="table-responsive">
							<button type="button" class="btn bg-purple waves-effect" data-toggle="modal" data-target="#defaultModal">
                                    <i class="material-icons">add_circle</i>
                                    <span>New User</span>
                                </button>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
											 <th>Password</th>
											 <th>Role</th>
                                            <th>Created date</th>
										</tr>
                                    </thead>
                                   <tbody>
								<?php 
								$i=1;
								foreach($rows as $r) { ?>
								   <tr>
                                            <td><?php print $i;?></td>
                                            <td><?php print anchor('users/add/'.$r['id'], $r['name'], 'title="Edit"');?></td>
											<td><?php print $r['email'];?></td>
											<td><?php print $r['password'];?></td>
                                            <td><?php print $r['type']==1?'Admin':'Manager';?></td>
											<td><?php print $r['cdate']?></td>
											
                                        </tr>
								<?php $i++;}?>
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
	<script>
$(function(){
	$("div#msg").hide();
	$("#admin-user").submit(function(e){
	e.preventDefault();
	 $.post("<?php print base_url("/users/saveAdminUser");?>", $("#admin-user").serialize(), function(data) {
		 var obj=JSON.parse(data);
       if(obj.code==200)
		   window.location.reload();
	   else $("div#msg").show();
    });
		
	});
});	
	</script>
