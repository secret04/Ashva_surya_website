<?= $this->extend('admin/common/baseView') ?>
<?= $this->section('content') ?> 
<div class="main-container" id="container"> 
<!--  Content Area Starts  -->
    <div id="content" class="main-content">
        <!--  main contents  -->
        <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                
                            <h4>Uploading the Ads
                                        <a href="<?=base_url('Admin/Advertisements')?>" class="btn btn-danger btn-sm float-end"> BACK</a>
                                    </h4>
                                   
                                </div>
                                <div class="card-body">
                                    <form action="<?=base_url('ads-store')?>" method="post"  enctype="multipart/form-data">
                                   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control" required placeholder="Enter Title name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <label>Description</label>
                                                    <textarea name="description" class="form-control" required placeholder="Enter Description" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <label>Image</label>
                                                    <input type="file" name="image" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <button type="submit" class="btn btn-success btn-sm float-end">SAVE</button>
                                              
                                                <!-- <button type="button"class="btn btn-success btn-sm float-end">SAVE</button> -->
                                            </div>
                                        </div>
                                    </form>
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
