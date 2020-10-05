<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style>
    .table-responsive {
        display: table
    }
</style>

<body>

    <div class="container">

        <?php
        if(!empty($post)){
        
        ?>
        <div id="body" class="row">
            <div class="col-3">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-12">
                        <form role="form" method="post" action="<?= base_url('index.php/welcome/update/').$post['post_id'] ?>">
                            <div class="form-group">
                                <label>Post Title</label>
                                <input value="<?= $post['post_title']; ?>" type="text" name="post_title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnsave" class="btn btn-info btn-block" />
                            </div>
                        </form>
                    </div>
             
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
        <?php }else{
            ?>
            <p class="alert alert-info" style="padding:10px;">No record were found associated with this <?= $this->uri->segment(3) ?>  ID</p>
            <?php
        } ?>


    </div>

</body>

</html>