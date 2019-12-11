@include('layout._includes.header')

<div class="container">

        <div class="center">
            <h4>Lista de Perguntas</h4>
        </div>

        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pergunta</th>
                        <th>Categoria</th>
                        {{-- <th>Editar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>teste</td>
                        <td>fvgf</td>
                        <td>fsdf</td>

                        {{-- <td><a href="" class=""><i class="material-icons">Edit</i></a></td> --}}
                        {{-- <td><a href="{{route('editCourses')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td> --}}


                    </tr>
                </tbody>
            </table>
        </div>
</div>

@include('layout._includes.footer')
