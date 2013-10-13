<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header no-padding">
                    <div class="table-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">×</span>
                            </button>
                            Results for "Latest Registered Domains"
                    </div>
            </div>

            <div class="modal-body no-padding">
                
                    <div>
                        
                        
                        
                    </div>
                
                
                    <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                            <thead>
                                    <tr>
                                            <th>Domain</th>
                                            <th>Price</th>
                                            <th>Clicks</th>

                                            <th>
                                                    <i class="icon-time bigger-110"></i>
                                                    Update
                                            </th>
                                    </tr>
                            </thead>

                            <tbody>
                                <?php foreach($rows as $row):?>   
                                <tr>
                                            <td>
                                                    <a href="#"><?php echo $row->first_name;?></a>
                                            </td>
                                           
                                            <td><a class="add-to-list btn btn-sm"   model="<?php echo $parent?>"  model_id="<?php echo $parent_id ?>"  child="student" child_id="<?php echo $row->id?>" href="<?php echo $row->id; ?>">Agregar al Grupo</a></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                    </table>
            </div>

            <div class="modal-footer no-margin-top">
                    <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="icon-remove"></i>
                            Close
                    </button>

                    <ul class="pagination pull-right no-margin">
                            <li class="prev disabled">
                                    <a href="#">
                                            <i class="icon-double-angle-left"></i>
                                    </a>
                            </li>

                            <li class="active">
                                    <a href="#">1</a>
                            </li>

                            <li>
                                    <a href="#">2</a>
                            </li>

                            <li>
                                    <a href="#">3</a>
                            </li>

                            <li class="next">
                                    <a href="#">
                                            <i class="icon-double-angle-right"></i>
                                    </a>
                            </li>
                    </ul>
            </div>
    </div><!-- /.modal-content -->
</div>


<script type="text/javascript">
			(function($){
                            
                          $(document).ready(function(){
                              
                               $(".add-to-list").click(function(){
                                   
                                  // alert($(this).attr("item_id"));
                                   var model    = $(this).attr("model");
                                   var model_id = $(this).attr("model_id");
                                   var child    = $(this).attr("child");
                                   var child_id = $(this).attr("child_id");
                                   
                                   
                                   
                                 //  alert(site_url);
                                   var path = site_url+"groups/ajax_insert/model/"+model+"/model_id/"+model_id+"/child/"+child+"/child_id/"+child_id;
                                  // prompt(path,path);
                                   $.post(path,function(data){
                                       
                                       
                                      var r = site_url+"match_groups_students/show_ajax/parent/group/parent_id/"+model_id+"/child/student/mode/rowsonly"; 
                                    
                                     $("#replace-me").load(r,function(){
                                         
                                         $('#modal-table').modal('hide');
                                         
                                     });
                                     
                                     
                                     
                                       
                                   });
                                   
                                   
                                   return false;
                               });
                              
                              
                              
                              
                              $("#change-to-form").click(function(){
                                 $("#change-to-new-form").html("nada here");
                                 $(this).hide();
                                 $("#change-to-list").show();
                              });

                               $("#change-to-list").click(function(){ 
                                 $("#change-to-new-form").load('<?php echo site_url('students/ajax_model_body')?>');
                                 $(this).hide();
                                 $("#change-to-form").show();
                                });

                          });
                            
                        })(jQuery);
</script>