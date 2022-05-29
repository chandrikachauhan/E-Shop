 <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-2">
                                    <div class="card-header"><h2 class="text-center text-primary font-weight-light my-4"><b>Create Products</b></h2>
                                        <?php if($row = $this->session->flashdata('message'))
                                                    {?>
                                                        <div class="alert alert-danger"><?php echo $row;?></div>
                                                        <?php
                                                    }?>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?php echo base_url()?>admin/add_product_controller/addProduct" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Product Name</label>
                                                        <input class="form-control py-4" name="p_name" type="text" placeholder="Enter Product Name" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Product Price</label>
                                                        <input class="form-control py-4" name="p_price" type="text" placeholder="Enter Product Price" required/>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Product Peacture</label>
                                                        <input class="form-control" name="p_image" type="file" required/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Select Category</label>
                                                        <select class="form-control" name="cate_id" required>
                                                        <?php 
                                                        foreach ($cate_d as $key => $values) {
                                                           ?>
                                                            <option value="<?php echo $values['cate_id']?>">
                                                                <?php echo $values['category_name']?>
                                                            </option>
                                                           <?php
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Color</label>
                                                        <input class="form-control py-4" name="color" type="text" placeholder="Enter Product Color" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Made In</label>
                                                        <input class="form-control py-4" name="made_in" type="text" placeholder="Product Made In" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1">Type</label>
                                                        <select class="form-control" name="p_type">
                                                            <option value="1" selected>New</option>
                                                            <option value="2">Old</option>
                                                        </select>
                                                      
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputEmailAddress">Description</label>
                                                        <textarea type="text" name="description" placeholder="Enter Your Description Here" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <input type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>