<?php 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/jpg" href="img/icon.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/barbearia.css" media="screen" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barbearia Guedes</title>
    </head>
    <body>
        <header>
            <div class="header-banner">
            </div>
        </header>
        <section class="content">
            <div class="container">
                <article>
                    <p>Localizada no Grotão a Barbearia Guedes traz para o mercado o que há de melhor para seu corte de cabelo e barba. Fundada em 2015, a Barbearia Guedes já é destaque nos bairros e conquista novos clientes a cada dia.<br>
                        <br>Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. Nosso barbeiro <a href='pag2.html'>Jarlyson</a> com todo seu conhecimento, vem dando o seu melhor com cortes incriveis. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes,contando com varios beneficios como.<br>
                    </p>
                    <ul>
                        <li>💈 Pontualidade</li>
                        <li>💈 Bem Organizado</li>
                        <li>💈 Ambiente Limpo</li>
                        <li>💈 Profissionais Dedicados</li>
                        <li>💈 E um ótimo atendimento ao cliente</li>
                    </ul>
                    <h2>Local</h2>
                </article>
                <aside>
                    <img src="img/marcos1.jpg" title="Marcos" width="340"  height="350" align="right" style="border-radius: 16rem" aria-live="off">
                </aside>
            </div>
            <div style='overflow:hidden;height: 350px;width: 100%;color: #0095eb'>
                <div id='gmap_canvas' style='height:300px;width:100%;'></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}.gm-ui-hover-effect{display: none!important;}</style>
            </div>
        </section>
        <div class="container">
                <div class="products row" id="produtos">
                   
                </div>
                <div class="gallery-wrapper">
				<figure class="gallery-item">
					<img src="img/cab1.jpg" alt="" class="item-image" />					
				</figure>
				<figure class="gallery-item">
					<img src="img/cab2.jpg" alt="" class="item-image" />					
				</figure>
				<figure class="gallery-item">
					<img src="img/cab3.jpg" alt="" class="item-image" />					
				</figure>
				<figure class="gallery-item">
					<img src="img/cab4.jpg" alt="" class="item-image" />				
				</figure>
				<figure class="gallery-item">
					<img src="img/cab5.jpg" alt="" class="item-image" />
				</figure>
			</div>
                <div class="container">
                    <main id="fix">
                        <form action="email.php" method="post" name="form">
                            <h2>Agendamento</h2>
                            <label for="name">Nome: </label>
                            <input name="nome"type="text" id="name" class="input-basic" placeholder="Digite seu nome aqui" required="">
                            <label for="email">Email: </label>
                            <input name="email" type="text" id="email" class="input-basic" placeholder="email@dominio.com" required="">
                            <label  for="phone">Telefone: </label>
                            <input name="telefone" type="number" onkeypress="return somenteNumeros(event)" id="num" class="input-basic" placeholder="(XX)XXXXX-XXXX" required="">
                            <label name="mensagem" for="mensage">Mensagem: </label>
                            <textarea id="mensage" name='mensagem' cols="70" rows="10" class="input-basic" placeholder="Descreva seu melhor corte e seu horário"></textarea>
                            <fieldset>
                                <legend>Como prefere o nosso contato?</legend>
                                <label for="radio-email"><input type="radio" name="contact" value="email" id="radio-email"> Email</label>
                                <label for="radio-phone"><input type="radio" name="contact" value="phone" id="radio-phone"> Telefone</label>
                                <label for="radio-whatsapp"><input type="radio" name="contact" value="whatsapp" id="radio-whatsapp" checked=""> WhatsApp</label>
                            </fieldset>
                            <fieldset>
                                <legend>Qual horário prefere ser atendido?</legend>
                                <select name='horario'>
                                    <option value='Manhã'>Manhã</option>
                                    <option value='Tarde'>Tarde</option>
                                    <option value='Noite'>Noite</option>
                                </select>
                                <legend>Qual barbeiro prefere ser atendido?</legend>
                                <select name='barb'>
                                    <option value='Marcos'>Marcos</option>
                                    <option value='Jarlyson'>Jarlyson</option>
                                </select>
                            </fieldset>
                            <label class="checkbox"><input type="checkbox" checked="">Gostaria de receber novidades por email?</label>
                            <button class='btn'>Enviar</button>
                        </form>
                        <table>
                            <thead>
                                <tr>
                                    <th>Dia</th>
                                    <th>Horário</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Segunda a Sexta</td>
                                    <td>9h as 19h</td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>Sábado e Domingo</td>
                                    <td>10h as 17h</td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
            </div>
                <footer class="footer-basic">
                    <div class="container">
                        <div class="social"><a href="https://www.instagram.com/a_guedesbarbearia/"><i class="icon ion-social-instagram"></i></a><a href="https://wa.me/5583999797388"><i class="icon ion-social-whatsapp"></i></a><a href="https://twitter.com/Barbalho_______"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/profile.php?id=100011282679552"><i class="icon ion-social-facebook"></i></a></div>
                        <ul class="list-inline"><li class="list-inline-item"><a href="barbearia.html">Home</a></li>
                            <li class="list-inline-item"><a href="#">Serviços</a></li>
                            <li class="list-inline-item"><a href="#">Termos</a></li>
                            <li class="list-inline-item"><a href="#">Politica de Privacidade</a></li>
                        </ul>
                        <p class="copyright">Barbearia Guedes © 2023</p>
                        </div>
                </footer>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
                <script src='https://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
                <script type="text/javascript" src="js/barbearia.js"></script>
                <script type='text/javascript'>
                function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-7.1854607,-34.8865886),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-7.1854607,-34.8865886)});infowindow = new google.maps.InfoWindow({content:'Barbearia Guedes'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
                </script>
    </body>
</html>