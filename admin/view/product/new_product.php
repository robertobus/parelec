<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph x_panel">
            <div class="row x_title">
                <div class="col-md-12">
                    <h2>Nuevo Producto</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a href="index.php?controller=product&action=new" style="color: green;">
                                <i class="fa fa-plus-square" style="font-size: 1.4em; color: darkgreen;"></i> Agregar
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!--<li><a class="close-link"><i class="fa fa-close"></i></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="x_content">
                <form class="form-horizontal">

                    <div class="form-group">
                        <div class="col-lg-2">
                            <label for="code">Codigo</label>
                            <input type="text" id="code" name="code" required="required" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" required="required" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="middle-name">Descripción</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label>Estado</label>
                            <div id="estado" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="estado" value="1" data-parsley-multiple="gender"> Activar
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="estado" value="0" data-parsley-multiple="gender"> Bloquear
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth <span class="required">*</span></label>
                        <input id="birthday" class="date-picker form-control" required="required" type="text">
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>