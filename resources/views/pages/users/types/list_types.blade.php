@include('layout._includes.header')
<div class="center">
    <h4>Lista de niveis acadêmicos</h4>
</div>
 <div class="container">
    <div class="row">
        <table class="centered striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>


                </tr>
            </thead>

                @foreach ($resultado as $colocar)
                    <tr>
                    <td>{{$colocar->pss_id_pergunta}}</td>
                        <td>{{$colocar->pss_pergunta}}</td>
                        {{-- <td><a href="{{route('editTypes')}}" class="btn-floating green waves-effect waves-light btn "><i class="material-icons">edit</i></a></td>
                        <td><a href="#modal1?=" class="waves-effect waves-light btn-floating modal-trigger red"><i class="material-icons">delete</i></a></td> --}}
                    </tr>

                @endforeach

        </table>

    </div>
 </div>

 @include('layout._includes.footer')
