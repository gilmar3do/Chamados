<h3>Empresas</h3>

<!--<a href="#/empresa/inclusao" class="btn btn-success btn-lg pull-right">
    <i class="fa fa-plus"></i> Adicionar
</a>-->

<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-left">Id</th>
            <th class="text-left">Empresa</th>
            <th class="text-left">CNPJ</th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="6">
                <input type="text" class="form-control" ng-model="filter" value="" placeholder="Filtrar..." />
            </td>
        </tr>
        <tr ng-repeat="empresa in vm.empresas | filter: filter">
            <td class="text-center">{{ empresa.id }}</td>
            <td class="text-left">{{ empresa.nome }}</td>
            <td class="text-left">{{ empresa.cnpj }}</td>
            <!--<td class="text-center">
                <div class="btn-group">
                    <a href="#/empresa/alteracao/{{ empresa.id }}" class="btn btn-group btn-default btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="#/empresa/exclusao/{{ empresa.id }}" class="btn btn-group btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                </div>
            </td>-->
        </tr>
    </tbody>
</table>