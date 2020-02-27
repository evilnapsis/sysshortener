<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):?>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Enlaces</li>
        </ol>

<section class="container-fluid">
<?php
$data["posts"]=ItemData::getAll();
$base_url = ConfigurationData::getByPreffix("base_url")->val;
?>

 <div class="card">
                  <div class="card-header">
                    <strong>Nuevo Enlaces</strong>
                  </div>
                  <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="./?view=items&opt=new" class="btn btn-secondary">Agregar</a><br><br>
                        <div class="box box-primary">
                            <div class="box-body">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>URL</th>
                                                <th>URL Corto</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->name;?></td>

                                                <td><?=$post->url;?></td>
                                                <td><?php echo $base_url; ?>?action=go&c=<?=$post->code;?></td>
                                                <td style="width:170px;">
                                                <a href="./?action=go&c=<?=$post->code;?>" target="_blank" class="btn btn-sm btn-secondary"><i class="fa fa-link"></i></a>

                                                <a href="./?view=items&opt=edit&id=<?=$post->id;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?action=items&opt=del&id=<?=$post->id;?>" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </div>
</div>
</div>

                <!-- /.row -->
                </section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Enlaces</li>
          <li class="breadcrumb-item">Nuevo *</li>

        </ol>

<section class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">


<!-- Inicio de card -->
 <div class="card">
                  <div class="card-header">
                    <strong>Nuevo Link</strong>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">

                        <form role="form" method="post" action="./?action=items&opt=add" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nombre (Descriptivo)</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" class="form-control" placeholder="URL">
                            </div>
                            <div class="form-group">
                                <label>Codigo acortado (alias)</label>
                                <input type="text" name="code" class="form-control" placeholder="Codigo acortado" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>

                        </form>

                      </div>
                    </div>
                </div>
            </div>
<!-- Fin de la card -->

                    </div>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->

</section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$link = ItemData::getById($_GET["id"]);
    ?>
            <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Enlaces</li>
          <li class="breadcrumb-item">Editar *</li>

        </ol>

<section class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">


<!-- Inicio de card -->
 <div class="card">
                  <div class="card-header">
                    <strong>Editar Link</strong>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">

                        <form role="form" method="post" action="./?action=items&opt=update" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $link->id; ?>">
                            <div class="form-group">
                                <label>Nombre (Descriptivo)</label>
                                <input type="text" name="name" value="<?php echo $link->name; ?>" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <input type="text" name="url" value="<?php echo $link->url; ?>" class="form-control" placeholder="URL">
                            </div>
                            <div class="form-group">
                                <label>Codigo acortado (alias)</label>
                                <input type="text" name="code" value="<?php echo $link->code; ?>" class="form-control" placeholder="Codigo acortado" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>

                        </form>

                      </div>
                    </div>
                </div>
            </div>
<!-- Fin de la card -->

                    </div>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->

</section>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="top"):?>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Enlaces</li>
        </ol>

<section class="container-fluid">
<?php
$data["posts"]=ItemData::getTop();
?>

 <div class="card">
                  <div class="card-header">
                    <strong>Top Enlaces</strong>
                  </div>
                  <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box box-primary">
                            <div class="box-body">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>

                                                <th>URL</th>
                                                <th>Visitas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->name;?></td>

                                                <td><?=$post->url;?></td>
                                                <td><?=$post->cx;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </div>
</div>
</div>
                <!-- /.row -->
                </section>
<?php endif; ?>
