<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= base_url('bootstrap/bootstrap.min.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('css/componentes/navbar.css') ?>">


    <title>navbar</title>


    
</head>
<body>
   <nav class="nav">
        <ul class="list">

                
     
                <!-- opcion 1------------------------------------------------->
            <li class="list__item">
                <div class="list__button">
                    <img src="icons/inicio.png" class="list__img" >
                    <a href="<?= base_url('index')?>" class="nav__link">Incio</a>
                </div>       
            </li>
                    <!--------------------opcion 2 --------------------------->

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="icons/mnual.png" class="list__img" >
                    <a href="#" class="nav__link">Manuales</a>
                    <img src="assets/flecha.svg" class="list__arrow" >
                </div> 
                <ul class="list__show">
                     <li class="list__inside">
                        <a 
                        href="<?= base_url('manual_usuario')?>" class="nav__link nav__link--inside">Manual De Usuario</a>
                     </li>
                     <li class="list__inside">
                        <a  href="<?= base_url('manual_tecnico')?>" class="nav__link nav__link--inside">Manual Técnico</a>
                     </li>
                     
                </ul>   
            </li>
                     <!-------------- opcion 3 --------------------------------->

            <li class="list__item">
                <div class="list__button">
                    <img src="icons/c.png" class="list__img" >
                    <a href="<?= base_url('equipo_trabajo')?>" class="nav__link">Equipo De Trabajo</a>
                </div>       
            </li>
                     <!-------------- opcion 4 --------------------------------->

                     <li class="list__item" list__item--click>
                <div class="list__button list__button--click">
                    <img src="assets/cara2.svg" class="list__img" >
                    <a href="#" class="nav__link">Desarrollo</a>
                    <img src="assets/flecha.svg" class="list__arrow" >
                </div> 
                <ul class="list__show">
                     <li class="list__inside">
                        <a href="<?= base_url('metodologia')?>" class="nav__link nav__link--inside">Metodologia</a>
                     </li>
                     <li class="list__inside">
                        <a href="<?= base_url('framework')?>" class="nav__link nav__link--inside">Marco de trabajo</a>
                     </li>
                </ul>   
            </li>
                    <!-------------- opcion 5 --------------------------------->

                    <li class="list__item">
                <div class="list__button">
                    <img src="icons/funciones.png" class="list__img" >
                    <a href="<?= base_url('/funciones')?>" class="nav__link">Funciones</a>
                    
                </div>       
            </li>

           
        </ul>

   </nav>
</body>
</html>
<script>
    let listElements = document.querySelectorAll('.list__button--click');
    listElements.forEach(listElement=>{
        listElement.addEventListener('click',()=>{
            listElement.classList.toggle('arrow');

                let heihgt = 0;
                let menu = listElement.nextElementSibling;
                 if( menu.clientHeight == "0"){
                     heihgt=menu.scrollHeight;
                 }
                 menu.style.height = `${heihgt}px`;
        })
    });
</script>