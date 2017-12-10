<?php if($action == 'custstatuschange' && $field == 'status') { ?>
    <?php if($status == 'active'){?>
        <button class="btn btn-icon-toggle active" type="button" onclick="changeStatus('<?= $id ?>', '0', '<?= $field ?>', 'customers/ajaxaction', 'custstatuschange')">
            <i class="fa fa-check"></i>
        </button>
    <?php }else {?>
        <button class="btn btn-icon-toggle deactive" type="button" onclick="changeStatus('<?= $id ?>', '1', '<?= $field ?>', 'customers/ajaxaction', 'custstatuschange')">
            <i class="fa fa-close"></i>
        </button>
    <?php }?>
    <?php exit();} ?>

<?php if($action == 'custManage') { ?>
    <table id="catTable" class="table table-hover table-striped">
        <thead>
        <tr>
            <th >S. No</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th class="no-sort">Added Date</th>
            <th class="no-sort text-center">Status</th>
            <th class="no-sort">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if(!empty($customerDetails)) {
            foreach ($customerDetails as $key=>$list):?>
                <tr>
                    <td><?php echo $key+1;?></td>
                    <td>
                        <?php echo $list['firstname'].' '.$list['last_name'];?>
                    </td>
                    <td>
                        <?php echo $list['username'];?>
                    </td>
                    <td><?php
                        echo date("d-M-Y H:i:s", strtotime($list['created'])); ?></td>
                    <td align="center" id="status_<?php echo $list['id'];?>">
                        <?php if($list['status'] == 1){?>
                            <button class="btn btn-icon-toggle active" type="button" onclick="changeStatus('<?= $list['id'] ?>', '0', 'status', 'customers/ajaxaction', 'custstatuschange')">
                                <i class="fa fa-check"></i>
                            </button>
                        <?php }else {?>
                            <button class="btn btn-icon-toggle deactive" type="button" onclick="changeStatus('<?= $list['id'] ?>', '1', 'status', 'customers/ajaxaction', 'custstatuschange')">
                                <i class="fa fa-close"></i>
                            </button>
                        <?php }?>
                    </td>
                    <td>
                        <!--<a href="<?php /*echo ADMIN_BASE_URL; */?>customers/addressmanage/<?php /*echo $list['id'];*/?>" class="btn btn-info">AddressBook</a>-->

                        <a href="<?php echo ADMIN_BASE_URL; ?>customers/edit/<?php echo $list['id'];?>" class="btn btn-icon-toggle" data-original-title="Edit" data-placement="top" data-toggle="tooltip" id="<?php echo $list['id']; ?>" >
                            <i class="fa fa-pencil"></i>
                        </a>
                        <button class="btn btn-icon-toggle" data-original-title="Delete" data-placement="top" data-toggle="tooltip" type="button" id="<?php echo $list['id']; ?>" onclick="return deleteRecord(<?php echo $list['id']; ?>, 'customers/deletecust', 'customers', '', 'catTable')">

                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach;?>
        <?php }else {?>
            <tr>
                <td class="text-center" colspan="6">
                    No Record Found
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>

    <?php die(); } ?>