<?php $adl_lps = (!empty($args->posts)) ? $args->posts : null; // data are passed to pages wrapped in the $args variable.

?>
<div class="wplp-container-fluid wplp-ml-10 wplp-pr-30" id="legalPageContainer">
    <h1 class="wplp-page-title">All Legal Pages <a href="<?= get_admin_url() ."admin.php?page=createLegalPage"; ?>" class="wplp-btn-blue-royal wplp-ml-15"> Add New Legal Page </a></h1>
    <div class="wplp-page-wrapper">
        <table class="wplp-table">
            <thead>
                <tr>
                    <th>Page ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created at</th>
                    <th>Shortcode<span class="wplp-tooltip" data-label="You can use the shortcodes anywhere!"><i class="glyphicon glyphicon-info-sign"></i></span></th>
                    <th style="width: 320px">Action</th>
                </tr>
            </thead>

            <?php
            $adl_lps = !empty($adl_lps) ? $adl_lps : array();
            if ( count($adl_lps) ) {
            foreach ($adl_lps as $adl_lp) {    ?>
                <tr id="id-<?= $adl_lp->ID; ?>" data-id="<?= $adl_lp->ID; ?>" >
                    <td><?= $adl_lp->ID; ?></td>
                    <td><a href="<?= get_edit_post_link($adl_lp->ID); ?>" title="Edit this"> <?= $adl_lp->post_title; ?>  </a></td>
                    <td><?= $ADL_LP->author_name_and_post_link($adl_lp->post_author, 'page'); ?></td>
                    <td><?= $ADL_LP->humanDate($adl_lp->ID); ?></td>
                    <td class="lp-selectable">[wpwax_legal_page id="<?php echo $adl_lp->ID; ?>"]</td>
                    <td class="text-center"><a class='wplp-btn wplp-btn-blue-royal' href="<?= $adl_lp->guid; ?>" title="View page"><span class="glyphicon glyphicon-eye-open"></span> View</a> <a class='wplp-btn wplp-btn-blue-royal' href="<?= get_edit_post_link($adl_lp->ID); ?>" title="Edit page"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" data-id="<?= $adl_lp->ID; ?>" class="wplp-btn wplp-btn-danger moveToTrash" title="Move to Trash"><span class="glyphicon glyphicon-trash"></span> Trash</a></td>
                </tr>
            <?php  }
            } else {
                echo '<tr> <td> <p> Looks like you have not created any legal pages yet.</p>  </td> </tr>';
            }
            ?>
        </table> <!--ends .table wplp-table-->
    </div> <!--ends .row-->
</div><!--ends .container-->
