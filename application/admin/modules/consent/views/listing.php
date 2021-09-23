<?php
// e($testimonials)
?>

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/widgets/datatable/datatable.css">
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/widgets/datatable/datatable-tabletools.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            autoWidth: true,
            bSort: false,
            columnDefs: [{
                targets: [0, 1, 2],
                orderable: false
            }, ],
            pageLength: 20
        });

    });
</script>
<h3 class="title-hero clearfix">
    Manage <?= $textData ?>
</h3>
<?php
$this->load->view('inc-messages');
if (count($data) == 0) {
    $this->load->view('inc-norecords');
    echo "</div>";
    return;
}
?>
<table id="example" class="display" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th width="20%" style="color: black;">Date</th>
            <th style="color: black;">Name</th>
            <th width="12%" style="color: black;">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $item) {
        ?>
            <tr>
                <td style="text-align:center;">
                    <?= date("d-m-Y, h:i A", strtotime($item['added_on'])); ?>
                </td>
                <td>
                    <?php $userName = json_decode($item['jsonData']); ?>
                    <?php echo $userName->name ?>
                </td>
                <td>
                    <a href="<?php echo $this->config->item('site_url') . 'upload/pdf/' . $item['pdf']; ?>" target="blank" class='tooltip-button'><i class="fa fa-download" aria-hidden="true"></i></a>|
                    <a href="consent/detail/<?php echo  $item['id']; ?>" class='tooltip-button'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th width="10%">Actions</th>
        </tr>
    </tfoot>
</table>