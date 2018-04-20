<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Saai - Sistemas de agendamento de ambientes internos</title>
    <meta name="name" content="content">
    <meta charset="UTF-8">
    <meta name="description" content="Sistema de agendamento de ambientes internos">
    <meta name="author" content="Vinícius Alexandre, Ricardo Garcia, Pedro Diniz">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani|Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/select2-bootstrap-theme-master/dist/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/dataTable/dataTables.bootstrap4.min.css">

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/tether-1.4.0/dist/js/tether.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/select2-bootstrap-theme-master/dist/select2.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/dataTable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/dataTable/dataTables.bootstrap4.min.js"></script>

</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SAAI
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>ListaUsuarios">Usuários</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>ListaAgendamentos">Agendamentos</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>ListaLaboratorios">Laboratórios</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>ListaBancadas">Bancadas</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>Login/logout">Sair</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <nav class="navbar navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-left" id="menu-toggle" href="#menu-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#" style="z-index: -99;">.</a>
        </nav>
