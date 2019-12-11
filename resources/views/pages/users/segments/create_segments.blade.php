@include('layout._includes.header')

<div class="container">
    <fieldset class="space_field">
        <legend class="edit_legend"><h4>Editar Segmentos</h4></legend>
        <form action="{{route('saveSegments')}}" method="POST">
                {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s8 center_one_col edit_input">
                    <i class="material-icons prefix iconColor blue_senac_icon">account_circle</i>
                    <input id="set_segment" name="set_segment" type="text" class="validate">
                    <label for="set_segment">Nome do segmento</label>
                </div>
            </div>
            <div class="center_div_button space_btn">
                <button class="btn waves-effect waves-light blue_senac" type="submit" name="action">Cadastrar
                    <i class="material-icons right">send</i>
                </button>
            </div>

            {{-- <input type="hidden" name="id" value=""/> --}}
        </form>
    </fieldset>

</div>
@include('layout._includes.footer')
