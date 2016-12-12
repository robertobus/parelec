<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph x_panel">
            <div class="row x_title">
                <div class="col-md-12">
                    <h2>Productos
                        <small>Listado de Productos</small>
                    </h2>
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
                <table id="list-products" class="table table-condensed">
                    <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 100px;">Codigo</th>
                        <th>Nombre</th>
                        <th style="width: 50px;">Estado</th>
                        <th style="width: 90px;">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($product = $mysqli_products->fetch_object()): ?>
                    <tr>
                        <td><?php echo str_pad($product->id, 5, '0', STR_PAD_LEFT) ?></td>
                        <td><?php echo $product->code ?></td>
                        <td><?php echo $product->name ?></td>
                        <td><?php echo $product->active ? '<a href="#" title="Activo" class="btn btn-success btn-xs btn-block"><i class="fa fa-unlock"></i></a>' : '<a href="#" title="Bloqueado" class="btn btn-danger btn-xs btn-block"><i class="fa fa-lock"></i></a>' ?></td>
                        <td style="text-align: center;">
                            <a href="#" title="Editar Producto" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="#" title="Eliminar Producto" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>