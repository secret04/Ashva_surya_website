<?= $this->extend('admin/common/baseView'); ?>
<?= $this->Section('content'); ?>
<br>
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
                        <div class="row row-sm">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#PhotoModal">Add Notification</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                    <div class="card-body">
                                        <form id="purchaser_report_form">
                                            <div class="row">
                                                <!-- <div class="col-sm-6">
                                                    <input type="text" id="name" placeholder="Title" class="form-control" name="name">
                                                </div> -->

                                                <div class="col-sm-6">
                                                    <!-- <input type="text" id="date" placeholder="date" class="form-control" name="date"> -->
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mg-b-20">
                                    <div class="card-header pb-0">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title mg-b-0">Notifications</h4>
                                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table key-buttons text-md-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Action</th>
                                                        <th class="border-bottom-0">Description</th>
                                                        <th class="border-bottom-0">From Date</th>
                                                        <th class="border-bottom-0">To Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="customreport">

                                                    <?php
                                                    if (isset($notifications)) {
                                                        foreach ($notifications as $notif) {
                                                    ?>

                                                            <tr>
                                                                <td>
                                                                    <div class="float-left">
                                                                        <a href="#" class="disablebutton btn btn-sm btn-danger" data-attr-id="<?= $notif['id'] ?>">
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                        </div>
                                        <?= $notif['description'] ?>
                                                        </div>
                                                        </td>
                                                        <td><?= convertDMYYY($notif->displayFromDate); ?></td>
                                        <td><?= convertDMYYY($notif->displayToDate); ?></td>
                                                        </tr>
                                                <?php }
                                                                        } ?>
                            </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                    


<!--furnace details modal-->
<div class="col-lg-8">
    <div class="modal" id="PhotoModal">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add New Notification</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    <small><i>Add New notification and click on submit</i></small>
                </div>
                <div class="modal-body">
                    <form class="row g-10" method="post" action="<?= base_url('/Admin/Notification/notifications'); ?>" enctype="multipart/form-data" data-parsley-validate="">
                        <?= csrf_field() ?>
                        <div class="row form-group col-sm-12">
                            <label for="description" class="col-sm-5 col-form-label">Description :<span class="text-danger">*</span></label>
                            <textarea class="form-control col-sm-7" name="description" placeholder="Enter number" data-parsley-required-message="Please enter description" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fromDate" class="col-form-label"><b>From date</b></label>
                            <input type="date" class="form-control" name="fromDate">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="toDate" class="col-form-label"><b>To date</b></label>
                            <input type="date" class="form-control" name="toDate">
                        </div>
                        <div class="col-12 text-center ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
                </div>
        </div>
    </div>
</div>

    <!--furnace edit modal-->
    <!-- row closed -->
    <script>
        $('#title').on('input', function() {
            table.column(1).search(this.value).draw();
        });
    </script>
    <script>
        $('.disablebutton').click(function() {
            let id = $(this).attr('data-attr-id');
            let csrfName = '<?= csrf_token() ?>';
            let csrfHash = '<?= csrf_hash() ?>';
            swal({
                    title: "Are you sure you want to disable?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn btn-danger",
                    confirmButtonText: "Yes, disable it!",
                    closeOnConfirm: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: "<?= base_url() . "/Admin/Notification/notificationDisable"; ?>",
                            method: "post",
                            data: {
                                id: id,
                                [csrfName]: csrfHash,
                            },
                            success: function(response) {
                                if (response === '1') {
                                    swal("Disabled!",
                                        "Notification has been disabled",
                                        "success");
                                } else {
                                    swal("Could not Disable",
                                        "Could not disable Notification",
                                        "error");
                                }
                                window.location.reload();
                            }
                        })
                    } else {
                        swal("Cancelled", "Notification disable cancelled", "error");
                    }
                });
        });
    </script>

    <?= $this->endSection(); ?>