<?php
//Variávies usadas no menu.
if (!isset($consultas)){$consultas = "";}
//Desenha o menu.
echo "<header>\n";
echo "<input type='checkbox' id='bt_menu'>\n";
echo "<label for='bt_menu'>&#9776;</label>\n";
echo "<nav class='menu'>\n";
echo "<ul>\n";
echo "<li><a href='../menu.php'>PRINCIPAL</a></li>\n";
//Menu Principal.
echo "<li><a href='menu.php'>PRINCIPAL</a></li>\n";
//Menu Cadastros - Início.
echo "<li><a href='#'>CADASTROS</a>\n";
echo "<ul>";
if (isset($consultas_cadastro)){if ($consultas_cadastro == "SIM"){echo "<li><a href='../consultas/consultas.php'>Consultas</a></li>";}}
echo "</ul>";
echo "</li>";
//Menu Cadastros - Final.
//Menu Relatórios - Início.
echo "<li><a href='#'>RELATÓRIOS</a>\n";
echo "<ul>";
if (isset($usuarios_relatorios)){if ($usuarios_relatorios == "SIM"){echo "<li><a href='../relatorios/rel_listausuarios.php'>Lista de Usuários</a></li>";}}
echo "</ul>";
echo "</li>";
//Menu Relatórios - Final.
//Menu Sistema - Início.
echo "<li><a href='#'>SISTEMA</a>\n";
echo "<ul>";
if (isset($usuarios_cadastro)){if ($usuarios_cadastro == "SIM"){echo "<li><a href='usuarios/usuarios.php'>Usuários</a></li>";}}
echo "</ul>";
echo "</li>";
//Menu Sistema - Final.
//Menu Sair.echo "<li><a href='../acessar/sair.php'>SAIR</a></li>\n";
echo "</ul>\n";
echo "</nav>\n";
echo "</header>\n";