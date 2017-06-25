<?php
if ($_SESSION['nivel_usuario'] == 3){
    echo '
    <li>
        <a href="#"><i class="fa fa-list-alt fa-fw"></i> Administrar Quadras<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#" data-toggle="modal" data-target="#mConstrucao">Tabela de Quadras</a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#mConstrucao">Inserir Quadra</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-user fa-fw"></i> Gerenciar Usuários<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#" data-toggle="modal" data-target="#mConstrucao">Tabela de Usuários</a>
            </li>
            <li>
                <a href="#" data-toggle="modal" data-target="#mConstrucao">Adicionar Usuário</a>
            </li>
        </ul>
    </li>';
}
?>