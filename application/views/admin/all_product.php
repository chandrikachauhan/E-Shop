 <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <?php if($row = $this->session->flashdata('messages'))
                                                    {?>
                                                        <div class="alert alert-danger"><?php echo $row;?></div>
                                                        <?php
                                                    }?>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <!-- <th>Description</th> -->
                                                <th>Made In</th>
                                                <th>Color</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <!-- <th>Description</th> -->
                                                <th>Made In</th>
                                                <th>Color</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                                <?php 
                                                // echo "<pre>";
                                                // print_r($all_data);
                                                foreach ($all_data as $key => $values) {
                                                   ?>
                                                   <tr>
                                                   <td><?php echo $values['sno']?></td>
                                                   <td><img src="<?php echo base_url()?>assets/product_image/<?php echo $values['product_image']?>" height="60px" width="60px"></td>
                                                   <td><?php echo $values['product_name']?></td>
                                                   <td><?php echo $values['product_price']?></td>
                                                   <!-- <td><?php echo $values['desciption']?></td> -->
                                                   <td><?php echo $values['made_in']?></td>
                                                   <td><?php echo $values['color']?></td>
                                                   <td>
                                                        <a href="<?php echo base_url()?>admin/Add_product_controller/edit_data?edit_id=<?php echo $values['sno']?>">
                                                            <button class="btn btn-primary">Edit</button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url()?>admin/Add_product_controller/del_data?del_id=<?php echo $values['sno']?>">
                                                            <button class="btn btn-danger">Delete</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                   <?php
                                                }
                                                ?>                                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>