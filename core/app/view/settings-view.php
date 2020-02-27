<ol class="breadcrumb">
          <li class="breadcrumb-item">Ajustes</li>
        </ol>

<section class="container-fluid">
<?php
$settings = ConfigurationData::getAll();
?>

 <div class="card">
                  <div class="card-header">
                    <strong>Nuevo Ajustes</strong>
                  </div>
                  <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="box box-primary">
                            <div class="box-body">

<form method="post" action="./?action=updatesettings" enctype="multipart/form-data">
                    <table class="table table-bordered">
                      <tbody>
<?php
 if(count($settings)>0):?>
<?php foreach($settings as $cat):?>
                        <tr>
                        <td><?php echo $cat->name; ?>
                        </td>
                        <td>
<?php if($cat->kind==2):?>
                        <input type="text" name="<?php echo $cat->short; ?>" class="form-control" value="<?php echo $cat->val;?>">
<?php elseif($cat->kind==4):?>
  <?php if($cat->val!=""):?>
    <img src="storage/configuration/<?php echo $cat->val;?>" style="width:180px;"><br><br>
  <?php endif;?>
                        <input type="file" name="<?php echo $cat->short; ?>" >
<?php endif;?>
                        </td>
                        </tr>
<?php endforeach; ?>
 <?php endif; ?>

                        <tr>
                        <td>
                        </td>
                        <td>
                        <input type="submit"  class="btn btn-success" value="Actualizar Ajustes">
                        </td>
                        </tr>
                      </tbody>
                    </table>
                    </form>
                        </div>
                        </div>
                    </div>
                </div>
</div>
</div>

                <!-- /.row -->
                </section>


