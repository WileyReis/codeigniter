

    <div class="container h-100">
        <!--Fim Navbar-->

       <div class="row">
            <div class="col-12 d-flex justify-content-center mt-5 mb-3">

                <div>
                    <h1 class="text-center mb-3">Administradores Cadastrados</h1>

                    <div class="d-flex justify-content-center mb-5">
                        <a href="<?= base_url('administracao') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Voltar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                            </svg>
                        </a>
                    </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Login</th>
                        <th scope="col">Funções</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row">1</th>
                        <td>Danilo Arantes</td>
                        <td>daniloarantes</td>
                        <td>
                            <a href="<?= base_url('cadlogin') ?>" class="btn btn-warning me-3">Alterar</a>
                            <a href="" class="btn btn-danger">Remover</a>
                        </td>
                    </tr>


                    </tbody>
                </table>
                </div>
            </div>
       </div>

        
    <!--Início Rodapé-->

    </div>
    