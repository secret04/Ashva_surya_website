<?= $this->extend('admin/common/baseView') ?>
<?= $this->section('content') ?> 
<div class="main-container" id="container"> 
<!--  Content Area Starts  -->
    <div id="content" class="main-content">
        <!--  main contents  -->
        <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                <div class="col-md-12">
                    <?php
                    if(session()->getFlashdata('status'))
                    {
                        echo "<h5>" .session()->getFlashdata('status'). "</h5>";
                    }
                    ?>
                    <div class="card">
                            <div class="card-header">
                                
                                    <h4>Advertiesement Details
                                        <a href="<?=base_url('ads-add')?>" class="btn btn-primary btn-sm float-end ">ADD</a>
                                    </h4>
                                   
                                </div>
                                <div class="card-body">
                                    <table class="table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>  
                                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($advertisements as $item) : ?>
                                            <tr>
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['title'] ?></td>
                                                <td><?= $item['description'] ?></td>
                

                                                <!-- <td><img src="<?= "uploads/".$item['image']; ?>" height="100px" width="100px" alt="pics"></td> -->
                                                <td><?= "<img src='" .base_url() ."/uploads/" .$item['image'] . "' class='img-responsive' height=100px width=100px alt=pics>"; ?></td>
                                                <td>
                                               
                                                </td>

                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Copyright Footer Starts -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2023 <a target="_blank" href="#">NEWS</a>, Powered By: <a>Shreshshta</a><i class="las la-heart text-primary"></i></p>
            </div>
            <div class="footer-section f-section-2">
                <p class=""></i>Developed with extra <i class="las la-heart text-primary"></i></p>
            </div>
        </div>
        <!-- Copyright Footer Ends -->
        <!-- Arrow Starts -->
        <div class="scroll-top-arrow" style="display: none;">
            <i class="las la-angle-up"></i>
        </div>
        <!-- Arrow Ends -->
    </div>
    <!--  Content Area Ends  -->
</div>
    <?= $this->endSection() ?> 
