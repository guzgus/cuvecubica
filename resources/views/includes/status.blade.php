        @if (session('status'))
            @if(session('status')=="ok_send_mensaje_info")       
              <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Gracias por contactarnos!</strong> En breve uno de nuestros agentes se pondrá en contacto contigo. </div>
            @endif
            @if(session('status')=="ok_create_desarrollo")       
              <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Registro correcto!</strong> Ahora puedes cargar las imágenes correspondientes al desarrollo, planos y amenidades. </div>
            @endif
            @if(session('status')=="ok_create_slide")       
              <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Registro correcto!</strong> Se han guardado las imágenes correctamente, puedes seguir cargando más. </div>
            @endif
            @if(session('status')=="ok_delete_slide")       
              <div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Eliminado!</strong> Se ha eliminado correctamente la imagen. </div>
            @endif

            @if(session('status')=="ok_create_propiedad")       
              <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Registro correcto!</strong> Ahora puedes cargar las imágenes correspondientes a esta propiedad como planos y amenidades. </div>
            @endif
            @if(session('status')=="ok_portada")       
              <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Registro correcto!</strong> Se ha definido la portada correctamente. </div>
            @endif
        @endif
