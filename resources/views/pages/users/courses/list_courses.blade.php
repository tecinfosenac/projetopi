@include('layout._includes.header')

<div class="center">
    <h4>Lista dos Cursos</h4>
</div>
<div class="container">

        <div class="row">
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Carga Horaria</th>
                        <th>Grau Academico</th>
                        <th>Segmento</th>
                        <th>Municipio</th>
                        {{-- <th>Estado</th> --}}
                        {{-- <th>Editar</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cCourse as $colocar)
                        <tr>
                            <td>{{$colocar->pss_nome}}</td>
                            <td>{{$colocar->pss_duracao}}</td>
                            <td>{{$colocar->pss_tipo}}</td>
                            <td>{{$colocar->pss_segmento}}</td>
                            <td>{{$colocar->pss_cidade}}</td>
                            {{-- <td>123</td> --}}
                            {{-- <td><a href="{{route('editCourses')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td> --}}
                        </tr>
                        @endforeach

                </tbody>
            </table>
        </div>


</div>

@include('layout._includes.footer')
