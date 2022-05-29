 <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Category Name</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                                <th>Delete</th>                                              
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            foreach ($cate_data_show as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $value['cate_id'];?></td>
                                                <td><?php echo $value['category_name'];?></td>
                                                <td><?php echo $value['description'];?></td>
                                                <td><a href="<?php echo base_url()?>admin/Admin_controller/static_layout?edit_id=<?php echo $value['cate_id'] ?>" class="btn btn-primary">Edit</a></td>
                                                <td><a href="<?php echo base_url()?>admin/Admin_controller/delete_cate?delete_id=<?php echo $value['cate_id'] ?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>