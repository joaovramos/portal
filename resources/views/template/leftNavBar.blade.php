<?php
/**
 * Created by PhpStorm.
 * User: joao.ramos
 * Date: 19/10/2016
 * Time: 14:00
 */
?>

<div class="panel-group" id="sidebar-wrapper">

    <ul class="sidebar-nav nav nav-stacked" id="accordion1">
        <li class="sidebar-brand">
            <a href="#">
                Portal Web Corporativo
            </a>
        </li>
        <li>
            <a href="{{url('home')}}">Home</a>
        </li>

        <li> <a data-toggle="collapse" data-parent="#accordion1" href="#indicador">Indicador</a>
            <ul id="indicador" class="collapse">
                <a href="{{route('empresa.index')}}"> <li>Empresa</li></a>
                <a href="{{route('setor.index')}}"> <li>Setor</li></a>
                <a href="{{route('funcionario.index')}}"><li>Funcionario</li></a>

            </ul>

        </li>
        <li> <a data-toggle="collapse" data-parent="#accordion1" href="#inventario">Inventario</a>

            <ul id="inventario" class="collapse">
                <li href="#">Etiqueta</li>
                <li href="#">Contagem</li>
                <li href="#">Apuração</li>
                <li href="#">Dicas</li>
            </ul>
        </li>

        <li> <a data-toggle="collapse" data-parent="#accordion1" href="#intranet">Intranet</a>

            <ul id="intranet" class="collapse">
                <li href="#">Ramais</li>
                <li href="#">Celulares</li>
                <li href="#">Aniversariantes</li>
                <li href="#">Cardapio</li>
                <li href="#">Sala Reuniao</li>
                <li href="#">Dicas</li>
            </ul>
        </li>

        <li> <a data-toggle="collapse" data-parent="#accordion1" href="#servicos">Serviços</a>

            <ul id="servicos" class="collapse">
                <li href="#">#######</li>

            </ul>
        </li>


    </ul>
</div>
