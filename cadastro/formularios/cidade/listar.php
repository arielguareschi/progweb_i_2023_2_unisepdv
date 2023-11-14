<div class="card">
    <div class="card-header">
        <h4 class="float-start">Listagem de cidades</h4>
        <a href="?conteudo=cidade_incluir" class="btn btn-success btn-sm float-end">
            Incluir novo
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Estado</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dois Vizinhos</td>
                            <td>PR</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm">Editar</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#excluirModal1">
                                    Excluir
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="excluirModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Deseja mesmo excluir a cidade Dois Vizinhos?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                                <button type="button" class="btn btn-primary">Sim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>