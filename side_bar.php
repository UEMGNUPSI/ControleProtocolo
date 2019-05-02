<?php include_once "conexao.php"; ?>
 <?php                               

   session_start();

?>
<ul class="sidebar navbar-nav" >
      
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Protocolos</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown"> 
              <a class="dropdown-item" href="addprotocolos.php">Cadastrar</a>
              <div class="dropdown-divider"></div>    
                         
          <a class="dropdown-item" href="verificaprotocolos.php">Consultar</a>       
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span> Documentos</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
                         
              <a class="dropdown-item" href="addentregaproto.php">Cadastrar</a>    
              <div class="dropdown-divider"></div>    
              <a class="dropdown-item" href="verficaentregaproto.php">Consultar</a>    
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Certificados</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
                 
              <a class="dropdown-item" href="addcertificado.php">Cadastrar</a>                
              <div class="dropdown-divider"></div>  
              <a class="dropdown-item" href="verificacertificados.php">Consultar</a>
          
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span> Diplomas</span></a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
          
                       
              <a class="dropdown-item" href="solicitacaodiploma.php">Cadastrar</a>      
              <div class="dropdown-divider"></div>       
              <a class="dropdown-item" href="verificadiploma.php">Consultar</a>  

        </div>
      </li>   

      <li class="nav-item">
        <a class="nav-link" href="doccolegiado.php">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Colegiado</span></a>
      </li>


      <li class="ml-3 dropup" style="position: fixed;bottom: 0;padding-bottom: 20px;">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgba(255, 255, 255, 0.5);" >
          <i class="fa fa-folder-open" aria-hidden="true" style="color: rgba(255, 255, 255, 0.5);"></i>
          <span style="color: rgba(255, 255, 255, 0.5);">Ferramentas</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">            
          <a class="dropdown-item" href="listacursos.php">Cursos</a>            
          <div class="dropdown-divider"></div>            
          <a class="dropdown-item" href="listaencaminahmento.php">Destinátarios</a>            
                   
        </div>
      </li>

    </ul>   
