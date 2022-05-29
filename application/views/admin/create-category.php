<?php 
foreach ($edit_data as $key => $values) {}
?>
 <main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">
                        <?php if(isset($values['cate_id'])){echo "Update Category";}else{echo "Create Category";}?></h3></div>
                    <div class="card-body">
                        <form action="<?php echo base_url()?>admin/Admin_controller/add_category" method="post">
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Category Name</label>
                                <input type="hidden" name="sno" value="<?php if(isset($values))
                                {
                                    echo $values['cate_id'];
                                }?>">
                                <input class="form-control py-4" name="cate" type="text" aria-describedby="emailHelp" placeholder="Enter Category Name" required  value="<?php if(isset($values['cate_id']))
                                {
                                    echo $values['category_name'];
                                }?>" />
                            </div>
                             <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Description</label>
                                <input class="form-control py-4" name="desc" type="text" aria-describedby="emailHelp" placeholder="Enter description here" required value="<?php if(isset($values['cate_id']))
                                {
                                    echo $values['description'];
                                }?>"/>
                            </div>
                            <div class="form-group mt-4 mb-0">
                            <input type="submit" name="<?php if(isset($values['cate_id'])){echo 'update';}else{echo 'submit';}?>" 
                               value="<?php if(isset($values['cate_id'])){echo 'update';}else{echo 'submit';}?>" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
               