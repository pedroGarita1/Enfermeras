@extends('layouts/main')
@section('contenido')
  <div class="banner-image-inicio w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            @if ($name == 1)
            <div class="col-md-12">
                <!-- Page section example for content below the video header -->
              <section class="my-5">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 mx-auto text-white">
                              <h1 class="fw-bold ">Logística Meeimex: Haciendo realidad la movilidad de equipos excepcionales</h1>
                              <p>En Meeimex, entendemos que el éxito de tu negocio depende en gran medida de la capacidad de mover equipos excepcionales, especialmente aquellos con dimensiones fuera de lo común. Es por eso que ofrecemos un servicio de logística único y especializado, diseñado para facilitar el transporte de tus valiosos activos, sin importar cuán grandes o pesados sean.</p>
                              </p>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
            @endif
            @if ($name == 2)
            <div class="col-md-12">
                <!-- Page section example for content below the video header -->
              <section class="my-5">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 mx-auto text-white">
                              <h1 class="fw-bold ">Servicio de Desmonte: Eficiencia, Seguridad y Conocimiento</h1>
                              <p>En nuestro servicio de desmonte, nos comprometemos a ofrecer un enfoque integral que aborda todas las necesidades de nuestros clientes. Realizamos un análisis exhaustivo de la operación y los riesgos asociados para garantizar una ejecución segura y efectiva. Nuestro personal altamente capacitado combina habilidades operativas excepcionales con un profundo conocimiento de los riesgos de seguridad.</p>
                              </p>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
            @endif
            @if ($name == 3)
            <div class="col-md-12">
                <!-- Page section example for content below the video header -->
              <section class="my-5">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-8 mx-auto text-white">
                              <h1 class="fw-bold ">Mantenimiento: Asegurando la Longevidad y Eficiencia de tus Equipos</h1>
                              <p>En nuestro servicio de mantenimiento, te ofrecemos una solución completa para mantener tus equipos en su mejor forma. Nuestro compromiso incluye renovación, ajuste, modificación, ampliación y la evaluación necesaria para determinar si es momento de cambiar un equipo debido al cumplimiento de su vida útil.</p>
                              </p>
                          </div>
                      </div>
                  </div>
              </section>
          </div>
            @endif
        </div>
    </div>
</div>
    <div class="container">
        <div class="row justify-content-center">
            @if ($name == 1)
            <div class="col-md-8 mb-5 mt-5">
                <h3>¿Qué ofreces en tu servicio?</h3>
                <p>No somos un simple servicio de logística. Somos tus aliados, tus socios en el proceso de transporte de equipos excepcionales. A través de una amplia red de proveedores de transporte de confianza que hemos cultivado a lo largo de años de servicio, aseguramos que tus activos lleguen a su destino de manera segura y eficiente. Nuestros proveedores son seleccionados cuidadosamente, y su historial de resultados exitosos nos respalda. En Meeimex, entendemos la importancia de contar con socios confiables en esta industria, y es por eso que trabajamos con los mejores para garantizar tu tranquilidad.</p>
                <h3>¿Qué no está incluido en el servicio y debe considerarse por separado?</h3>
                <p>Queremos ser transparentes contigo. Meeimex no es un mero intermediario; somos más que eso. Si bien no realizamos el transporte directo, gestionamos todo el proceso en tu nombre. Desde la planificación y coordinación hasta la supervisión y la resolución de cualquier problema que pueda surgir en el camino, estamos contigo en cada paso. No importa si se trata de trámites aduaneros, permisos especiales o rutas complicadas, lo manejamos todo para que tú no tengas que preocuparte.</p>
                <h3>¿Qué necesidad tiene quien requiere este servicio?</h3>
                <p>La necesidad que abordamos es la movilidad de equipos excepcionales. Si posees equipos o maquinaria con dimensiones extraordinarias, sabes lo desafiante que puede ser llevarlos a su destino de manera segura y eficiente. Meeimex elimina esas preocupaciones de tu mente. Nos especializamos en superar obstáculos logísticos, lo que te permite centrarte en lo que haces mejor: tu negocio.
                    <br> <br>
                    En Meeimex, no solo proporcionamos un servicio de logística, sino también la tranquilidad que necesitas para que tu empresa prospere. Confía en nosotros para llevar tus activos excepcionales al lugar donde deben estar, sin complicaciones, sin estrés, y con la garantía de que cuidamos cada detalle.
                    <br> <br>
                    Contacta con nosotros hoy y descubre cómo Meeimex puede convertirse en tu socio estratégico para la logística de equipos excepcionales. Tu éxito es nuestro compromiso.</p>
            </div>
            @endif
            @if ($name == 2)
            <div class="col-md-8 mb-5 mt-5">
                <h3>Informacion importante</h3>
                <p>Contamos con un equipo especializado que incluye grúas, montacargas y otras herramientas esenciales para llevar a cabo desmontajes de manera precisa y eficiente. Estamos equipados para manejar proyectos de cualquier envergadura.
                    <br> <br>
                    Sin embargo, es importante destacar que el acomodo o movimiento de equipos desmontados a otras áreas y la gestión de permisos con autoridades gubernamentales no están incluidos en nuestro servicio. Esto se debe considerar por separado.
                    <br> <br>
                    Nuestro servicio de desmonte satisface la creciente necesidad de contar con personal y equipos altamente calificados para ejecutar desmontajes de equipos de manera segura y eficaz. Cuando eliges trabajar con nosotros, puedes confiar en que tus proyectos de desmonte se llevarán a cabo con la máxima eficiencia y profesionalismo, liberándote para enfocarte en lo que realmente importa.</p>
            </div>
            @endif
            @if ($name == 3)
                <div class="col-md-8 mb-5 mt-5">
                    <h3>Informacion importante</h3>
                    <p>
                        El corazón de la necesidad que abordamos es asegurar que tus equipos sigan siendo funcionales con un mantenimiento adecuado. Nuestro personal altamente calificado verifica la eficiencia de tus activos y, en caso necesario, recomendamos medidas para extender su vida útil. Esto se traduce en una inversión rentable y equipos que siguen cumpliendo con las necesidades de tu operación. Confía en nosotros para mantener tus activos en óptimas condiciones y prolongar su durabilidad. Tu eficiencia es nuestra prioridad.
                    </p>
                </div>
            @endif
        </div>
    </div>
<div class="bg-gris-articulos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <p class="fs-3">ARTICULOS</p>
                <p class="fs-5">Sumérjase en el conocimiento experto de Meeimex y obtenga una ventaja competitiva</p>
            </div>
            <div class="col-md-12 mb-5">
                <div class="slider">
                    @foreach ($articulos as $item)
                        <div class="wrapper">
                            <div class="card card-login shadow bg-transparent h-100">
                                <img src="{{ Storage::url($item->nom_img) }}" class="card-img-top" style="height: 140px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($item->titulo, 45, '...') }}</h5>
                                    <p class="card-text">{{ Str::limit($item->resumen, 100, '...') }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="col-md-12 text-center">
                                        <a href="{{ route('view-articulo', ['id'=>$item->id,'titulo'=>$item->titulo]) }}" class="btn form-control btn-meeimex-blue">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 text-center mb-5">
                <a href="{{ route('view-articulos') }}" class="btn btn-meeimex-black">Descubra más <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/inicio.js') }}"></script>
@endsection