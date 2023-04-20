@extends('silicon-front.main')

@section('main-content')

    <main>

        <!-- =======================
                Page Banner START -->
        <section class="py-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 text-center rounded-3">
                            <h1 class="m-0" _msttexthash="136708" _msthash="121">Mi carrito</h1>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="miga de pan" _mstaria-label="157144" _msthash="122">
                                    <ol class="breadcrumb breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a href="#" _msttexthash="59059"
                                                _msthash="123">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" _msttexthash="80366"
                                                _msthash="124">Cursos</a></li>
                                        <li class="breadcrumb-item active" aria-current="page" _msttexthash="60216"
                                            _msthash="125">Carro</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
                Page Banner END -->

        @if (Cart::count())
            <!-- =======================
                Page content START -->
            <section class="pt-5">
                <div class="container">

                    <div class="row g-4 g-sm-5">
                        <!-- Main content START -->
                        <div class="col-lg-8 mb-4 mb-sm-0">
                            <div class="card card-body p-4 shadow">
                                <!-- Alert -->
                                <div class="alert alert-danger alert-dismissible d-flex justify-content-between align-items-center fade show py-3 pe-2"
                                    role="alert">
                                    <div>
                                        <font _mstmutation="1" _msttexthash="15229032" _msthash="126"><span
                                                class="fs-5 me-1" _mstmutation="1" _istranslated="1">🔥</span> Estos cursos
                                            tienen un descuento
                                            limitado, por favor pague dentro de<strong class="text-danger ms-1"
                                                _mstmutation="1" _istranslated="1">2 días y 18 horas</strong></font>
                                    </div>
                                    <button type="button" class="btn btn-link mb-0 text-primary-hover text-end"
                                        data-bs-dismiss="alert" aria-label="Cerrar" _mstaria-label="59709" _msthash="127"><i
                                            class="bi bi-x-lg"></i></button>
                                </div>



                                <div class="table-responsive border-0 rounded-3">
                                    <!-- Table START -->
                                    <table class="table align-middle p-4 mb-0">
                                        <!-- Table head -->
                                        <!-- Table body START -->
                                        <tbody class="border-top-0">
                                            @foreach (Cart::content() as $item)
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Course item -->
                                                <td>
                                                    <div class="d-lg-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px w-md-80px mb-2 mb-md-0">
                                                            <img src="silicon-front/silicon/{{ isset($item->options) && $item->options->imagen != '' ? $item->options->imagen : '08.jpg' }}" class="rounded"
                                                                alt="">
                                                        </div>
                                                        <!-- Title -->
                                                        <h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
                                                            <a href="#" _msttexthash="992043" _msthash="128">{{ $item->name }}</a>
                                                        </h6>
                                                    </div>
                                                </td>

                                                <!-- Amount item -->
                                                <td class="text-center">
                                                    <h5 class="text-success mb-0" _msttexthash="21021" _msthash="129">{{ $item->costo }}
                                                    </h5>
                                                </td>
                                                <!-- Action item -->
                                                <td>
                                                    <a href="#"
                                                        class="btn btn-sm btn-success-soft px-2 me-1 mb-1 mb-md-0"><i
                                                            class="far fa-fw fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger-soft px-2 mb-0"><i
                                                            class="fas fa-fw fa-times"></i></button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Coupon input and button -->
                                <div class="row g-3 mt-2">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input class="form-control form-control " placeholder="CÓDIGO DE CUPÓN"
                                                _mstplaceholder="111436" _msthash="132">
                                            <button type="button" class="btn btn-primary" _msttexthash="235976"
                                                _msthash="133">Aplicar cupón</button>
                                        </div>
                                    </div>
                                    <!-- Update button -->
                                    <div class="col-md-6 text-md-end">
                                        <button class="btn btn-primary mb-0" disabled="" _msttexthash="355693"
                                            _msthash="134">Actualizar carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Main content END -->

                        <!-- Right sidebar START -->
                        <div class="col-lg-4">
                            <!-- Card total START -->
                            <div class="card card-body p-4 shadow">
                                <!-- Title -->
                                <h4 class="mb-3" _msttexthash="290888" _msthash="135">Total del carrito</h4>

                                <!-- Price and detail -->
                                <ul class="list-group list-group-borderless mb-2">
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0" _msttexthash="258544" _msthash="136">Precio
                                            original</span>
                                        <span class="h6 fw-light mb-0 fw-bold" _msttexthash="20644" _msthash="137">$
                                            500</span>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0" _msttexthash="358956" _msthash="138">Descuento de
                                            cupón</span>
                                        <span class="text-danger" _msttexthash="19929" _msthash="139">-$20</span>
                                    </li>
                                    <li class="list-group-item px-0 d-flex justify-content-between">
                                        <span class="h5 mb-0" _msttexthash="60814" _msthash="140">Total</span>
                                        <span class="h5 mb-0" _msttexthash="21476" _msthash="141">$ 480</span>
                                    </li>
                                </ul>

                                <!-- Button -->
                                <div class="d-grid">
                                    <a href="checkout.html" class="btn btn-lg btn-success" _msttexthash="567736"
                                        _msthash="142">Proceder al proceso de pago</a>
                                </div>

                                <!-- Content -->
                                <p class="small mb-0 mt-2 text-center" _msttexthash="2555514" _msthash="143">Al completar
                                    su
                                    compra, usted acepta estos <a href="#" _istranslated="1"><strong
                                            _istranslated="1">Términos
                                            de Servicio</strong></a></p>

                            </div>
                            <!-- Card total END -->
                        </div>
                        <!-- Right sidebar END -->

                    </div><!-- Row END -->
                </div>
            </section>
            <!-- =======================
                Page content END -->

        @else
            <!-- =======================
                    Page content START -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- Image -->
                            <img src="silicon-front/silicon/cart.svg" class="h-200px h-md-300px mb-3" alt="">
                            <!-- Subtitle -->
                            <h2 _msttexthash="458614" _msthash="126">Su carrito está vacío</h2>
                            <!-- info -->
                            <p class="mb-0" _msttexthash="7254286" _msthash="127">Por favor, echa un vistazo a todos
                                los
                                cursos
                                disponibles y compra algunos cursos que satisfagan tus necesidades.</p>
                            <!-- Button -->
                            <a href="{{ route('cursos') }}" class="btn btn-primary mt-4 mb-0" _msttexthash="285155"
                                _msthash="128">Volver a
                                Cursos</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =======================
                    Page content END -->
        @endif

    </main>
@stop
