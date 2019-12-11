@include('layout._includes.header')

<div class="center">
    <h4>Lista das turmas</h4>
</div>
<div class="container">


        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Período</th>
                        <th>Professor</th>
                        <th>Data de inicio do curso</th>
                        <th>Data final do curso</th>
                        <th>Qtd.Alunos</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>testes</td>
                        <td>testes</td>
                        <td>testes</td>
                        <td>testes</td>
                        <td>testes</td>
                        <td>testes</td>
                        <td><a href="{{route('editClasses')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>

                    </tr>
                    <tr>
                        <td>testes 2</td>
                        <td>testes 2</td>
                        <td>testes 2</td>
                        <td>testes 2</td>
                        <td>testes 2</td>
                        <td>testes 2</td>
                        <td><a href="{{route('editClasses')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>

                    </tr>
                </tbody>
            </table>
        </div>
</div>

@include('layout._includes.footer')
