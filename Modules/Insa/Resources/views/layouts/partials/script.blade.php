
<script src="{{ asset('AdminLTE-3.0.5/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Bootstrap 4 -->


<script src="{{asset('vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.0.5/dist/js/adminlte.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



{{-- <script src="js/table.js"></script> --}}
{{-- <script>
    $(document).ready(function() {
        $('#btnnuevoelemento').click(function() {
            agregar();
        });

    });
    var cont = 0;

    function agregar() {
        cont++;
        var htmlTags = '<tr>' +
            '<td>'+
                '<select type="text" id="selectelements" name="element_id" class="form-control-sm">'+
                '<option>Elegir Elemento</option>'+
                '@foreach ($elements as $e)'+
                '<option value="{{$e->id}}">{{$e->element_name}}</option>'+
                '@endforeach'+
                '</select>'+
            '</td>'+
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td></td>' +
            '<td>' + cont + '</td>'+
            '</tr>';
        $("#tbelementos").append(htmlTags);
}
$(document).on("change","#selectelements", function (){
    if ($(this).val().length>0) {
        $.ajaxSetup({
            headers: {
                // este es mi error, este token no me funciona
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            method: "POST",
            url: "{{route('select')}}",
            data: {id: $(this).val()}
        })
        .done(function(html){
            $("#tbelementos").html(html);
        });
    }else{
        alert('No hay naaaaaaa');
    }
})
</script> --}}
{{-- $('#search').autocomplete({
    source: function(request, response){
       $.ajax({
           url:"{{route('search')}}",
           dataType: 'json',
           data: {
               term: request.term
           },
           success: function(data){
               response(data)
           }
       });
    }
}); --}}



