<div class="card-body table-responsive p-0" style="height: 450px;">
    <table class="table table-head-fixed text-nowrap">
        <thead>
        <tr>
            <th>Nº Serviço</th>
            <th>Referência</th>
            <th>Descrição</th>
            <th>Valor Unit.</th>
            <th>IVA</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($servicos as $servico) { ?>
            <tr>
                <td><?= $servico->id ?></td>
                <td><?= $servico->referencia ?></td>
                <td><?= $servico->descricao ?></td>
                <td><?= $servico->valorunitario ?></td>
                <td><?= $servico->iva->percentagem?>%</td>
                <td>
                    <a href="index.php?c=linhaobra&a=create&referencia=<?= $servico->referencia ?>&id_folhaobra=<?=$id_folhaobra?>" class="btn btn-info btn-sm" role="button">Selecionar</a>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>