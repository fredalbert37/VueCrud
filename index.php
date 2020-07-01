<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Main -->
        <link rel="stylesheet" href="main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- sweetalert2 -->
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/082dfc64a3.js" crossorigin="anonymous"></script>
    </head>

    <body>

    
    <header>
        <h2 class="text-center text-dark"><span class="badge badge-success">CRUD con VueJS</span></h2>
    </header>
    
    <div id="appMoviles">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button @click="btn_alta" class="btn btn-success">
                        <span>
                        <i class="fas fa-plus-circle f-2x"></i>
                        </span>
                        Nuevo
                    </button>
                </div>
                <div class="col text-right">
                    <h5>Stock Total: <span class="badge badge-success">{{totalStock}}</span></5>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <table class="table table-stripped">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(movil,indice) of moviles" class="text-center">
                                <td>{{movil.id}}</td>
                                <td>{{movil.marca}}</td>
                                <td>{{movil.modelo}}</td>
                                <td class="float-center">
                                    <div class="col-md-8">
                                        <input type="number" v-model.number="movil.stock" class="form-control" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-secondary" title="Editar" @click="btnEditar(movil.id,movil.marca, movil.modelo, movil.stock">
                                            <i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <button class="btn btn-danger" title="Eliminar" @click="btnBorrar(movil.id)">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!----------------------------------- scripts ------------------------------------->

    <!-- Jquery -->
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- sweetalert2 -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Main -->
    <script src="main.js"></script>

    </body>
</html>
