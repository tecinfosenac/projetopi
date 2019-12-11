@include('layout._includes.header')

<div class="center">
    <h4>Lista dos instrutores</h4>
</div>
<div class="container">

        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Danilo</td>
                        <td><a href="{{route('editInstructor')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>

                    </tr>
                </tbody>
            </table>
        </div>
</div>

@include('layout._includes.footer')
