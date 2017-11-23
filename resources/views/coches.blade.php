@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <h3>Añade tu coche</h3>
        </div>
    </div>

    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-8 "> <!-- col-md-8 -->
                <div class="">
                    <form>
                        <div class="row">

                            <div class="">
                                <div class="form-group">
                                    <label for="numserie">
                                        Numero de serie</label>
                                    <div class="input-group">
                                <span class="">
                                </span>
                                        <input type="text" class="form-control" id="numserie" placeholder="" required="required" /></div>
                                </div>





                                <div class="form-group">
                                    <label for="subject">
                                        Marca</label>
                                    <select id="subject" name="marca" class="form-control" required="required">
                                        <option value="na" selected="">Escoja uno por favor:</option>
                                        <option value="service">AUDI</option>
                                        <option value="suggestions">BMW</option>
                                        <option value="product">NISSAN</option>
                                        <option value="product">TOYOTA</option>
                                        <option value="product">HONDA</option>
                                        <option value="product">FORD</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="motor">
                                    Motorizacion</label>
                                <div class="input-group">
                                <span class="">
                                </span>
                                    <input type="text" class="form-control" id="motor" placeholder="" required="required" /></div>
                            </div>

                            <div class="form-group">
                                <label for="modelo">
                                    Modelo</label>
                                <div class="input-group">
                                <span class="">
                                </span>
                                    <input type="text" class="form-control" id="motor" placeholder="" required="required" /></div>
                            </div>


                            <div class="">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection