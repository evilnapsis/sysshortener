        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Inicio</li>
          <!-- Breadcrumb Menu-->
          <!--
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="#">
                <i class="icon-speech"></i>
              </a>
              <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
              <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
            </div>
          </li>
        -->
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">

              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-success">
                  <div class="card-body pb-0">

                    <div class="text-value"><?php echo count(ItemData::getAll()); ?></div>
                    <div>Enlaces</div>
                  </div>
                  <br>
                </div>
              </div>

              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">

                    <div class="text-value"><?php echo count(UserData::getAll()); ?></div>
                    <div>Usuarios</div>
                  </div>
                  <br>

                </div>
              </div>

              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-secondary">
                  <div class="card-body pb-0">

                    <div class="text-value">0</div>
                    <div>Sin Usar</div>
                  </div>
                  <br>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-secondary">
                  <div class="card-body pb-0">

                    <div class="text-value">0</div>
                    <div>Sin Usar</div>
                  </div>
                  <br>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
            <!-- /.card-->
            <!-- /.row-->

            <!-- /.row-->
          </div>

          <div class="row">
            <div class="col-md-12">

 <div class="card">
                  <div class="card-header">
                    <strong>Bienvenido a SysShortener!</strong>
                  </div>
                  <div class="card-body">
                    <p>SysShortener Es tu acortador de enlaces ideal.</p>
                  </div>
                </div>

            </div>
          </div>




        </div>