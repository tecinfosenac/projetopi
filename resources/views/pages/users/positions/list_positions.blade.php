@include('layout._includes.header')

<div class="center">
    <h4>Lista de cargos</h4>
</div>
 <div class="container">
    <div class="row">
        <table class="centered striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cargo</th>
                    <th>Permissões</th>
                    <th>Editar</th>
                </tr>
            </thead>


                @foreach ($bancoPesquisa as $colocar)
                    <tr>
                        <td>{{$colocar->pss_id_cargos}}</td>
                        <td>{{$colocar->pss_cargo}}</td>
                        <td>{{$colocar->pss_permissao}}</td>
                        <td><a href="{{route('editPositions',$colocar->pss_id_cargos)}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>
                    </tr>
                @endforeach


        </table>
    </div>
 </div>

 @include('layout._includes.footer')
