<nav class="bg-dark menu-lateral">
    <h3 class="text-center">Administração</h3>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="../Home/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Imoveis/">Imóveis</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../Usuarios">Usuários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="sair()">Sair</a>
        </li>
    </ul>
</nav>
<script>
        function sair(){
            if (confirm("Deseja sair?")) {
             window.location.href = "../../controls/Usuarios/sair.php";   
            }
        }
    </Script>