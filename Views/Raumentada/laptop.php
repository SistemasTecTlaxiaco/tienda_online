<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image.prod.js"></script>
  <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.1/dist/aframe-extras.min.js"></script>-->
  <script src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.1.4/dist/mindar-image-aframe.prod.js"></script>
    <script>
    //MOSTRAR INFORMACION DE INTERACTIVIDAD
      const showInfo = () => {
        let y = 0;
        const profileButton = document.querySelector("#profile-button"); //INFORMACIÓN PRODUCTO
        const webButton = document.querySelector("#micro"); //BOTON DE MICROFONO
        const emailButton = document.querySelector("#email-button"); //BOTON PARA COMPRAR
        //const locationButton = document.querySelector("#location-button");
        const text = document.querySelector("#text");

        profileButton.setAttribute("visible", true);
        setTimeout(() => {
          webButton.setAttribute("visible", true);
        }, 450);
        setTimeout(() => {
          emailButton.setAttribute("visible", true);
        }, 900);
        /*setTimeout(() => {
          locationButton.setAttribute("visible", true);
        }, 900);*/

        let currentTab = '';
      
        emailButton.addEventListener('click', function (evt) {
          window.location.href = "https://tiendapcbox.herokuapp.com/tienda/producto/5/laptop-hp-14-cf2512la-8gb-ram-256gb-pentium-gold-14-pulg-gris-482q9la";
          text.setAttribute("value", "Estamos preparando su compra, gracias por visitar PC BOX :D");
          currentTab = 'email';
        });
        profileButton.addEventListener('click', function (evt) {
          text.setAttribute("value", "Laptop HP 14-cf2512la, 8GB RAM, 256GB, Pentium Gold, 14 pulg., Gris, 482Q9LA");
          currentTab = 'profile';
        });
        
        /*locationButton.addEventListener('click', function (evt) {
          console.log("loc");
          text.setAttribute("value", "Vancouver, Canada | Hong Kong");
          currentTab = 'location';
        });*/
      }

      const showPortfolio = (done) => {
        const portfolio = document.querySelector("#portfolio-panel");
        const paintandquestPreviewButton = document.querySelector("#paintandquest-preview-button");

        let y = 0;
        let currentItem = 0;

        portfolio.setAttribute("visible", true);

        const showPortfolioItem = (item) => {
          for (let i = 0; i <= 2; i++) {
            document.querySelector("#portfolio-item" + i).setAttribute("visible", i === item);
          }
        }
        const id = setInterval(() => {
          y += 0.008;
          if (y >= 0.6) {
            clearInterval(id);
            

            setTimeout(() => {
              done();
            }, 500);
          }
          portfolio.setAttribute("position", "0 " + y + " -0.01");
        }, 10);
      }

      const showAvatar = (onDone) => {
        const avatar = document.querySelector("#avatar");
        let z = -0.3;
        const id = setInterval(() => {
          z += 0.008;
          if (z >= 0.3) {
            clearInterval(id);
            onDone();
          }
          avatar.setAttribute("position", "0 -0.25 " + z);
        }, 10);
      }

      AFRAME.registerComponent('mytarget', {
        init: function () {
          this.el.addEventListener('targetFound', event => {
            console.log("target found");
            showAvatar(() => {
              setTimeout(() => {
                showPortfolio(() => {
                  setTimeout(() => {
                    showInfo();
                  }, 300);
                });
              }, 300);
            });
          });
          this.el.addEventListener('targetLost', event => {
            console.log("target found");
          });
          //this.el.emit('targetFound');
        }
      });
    </script>

    <style>
      body {
        margin: 0;
      }
      .example-container {
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
      }
     
      #example-scanning-overlay {
	      display: flex;
	      align-items: center;
	      justify-content: center;
	      position: absolute;
	      left: 0;
	      right: 0;
	      top: 0;
	      bottom: 0;
	      background: transparent;
	      z-index: 2;
      }
      @media (min-aspect-ratio: 1/1) {
	      #example-scanning-overlay .inner {
	        width: 50vh;
	        height: 50vh;
	      }
      }
      @media (max-aspect-ratio: 1/1) {
	      #example-scanning-overlay .inner {
	        width: 80vw;
	        height: 80vw;
	      }
      }

      #example-scanning-overlay .inner {
	      display: flex;
	      align-items: center;
	      justify-content: center;
	      position: relative;

	      background:
	      linear-gradient(to right, white 10px, transparent 10px) 0 0,
	      linear-gradient(to right, white 10px, transparent 10px) 0 100%,
	      linear-gradient(to left, white 10px, transparent 10px) 100% 0,
	      linear-gradient(to left, white 10px, transparent 10px) 100% 100%,
	      linear-gradient(to bottom, white 10px, transparent 10px) 0 0,
	      linear-gradient(to bottom, white 10px, transparent 10px) 100% 0,
	      linear-gradient(to top, white 10px, transparent 10px) 0 100%,
	      linear-gradient(to top, white 10px, transparent 10px) 100% 100%;
	      background-repeat: no-repeat;
	      background-size: 40px 40px;
      }

      #example-scanning-overlay.hidden {
	      display: none;
      }

      #example-scanning-overlay img {
	      opacity: 0.6;
	      width: 90%;
	      align-self: center;
      }

      #example-scanning-overlay .inner .scanline {
	      position: absolute;
	      width: 100%;
	      height: 10px;
	      background: white;
	      animation: move 2s linear infinite;
      }
      @keyframes move {
	      0%, 100% { top: 0% }
	      50% { top: calc(100% - 10px) }
      }
    </style>
  </head>

  <body>
    <div class="example-container">
      <div id="example-scanning-overlay" class="hidden">
	      <div class="inner">
	      <img src="https://tiendapcbox.herokuapp.com/Assets/images/card.jpeg"/>
	      <div class="scanline"></div>
	    </div>
    </div>

    <a-scene mindar-image="imageTargetSrc: https://tiendapcbox.herokuapp.com/Assets/images/targets.mind; showStats: false; uiScanning: #example-scanning-overlay;" embedded color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights" vr-mode-ui="enabled: false" device-orientation-permission-ui="enabled: false">
      <a-assets>
        <!--<img id="card" src="https://tiendapcbox.herokuapp.com/Assets/images/card.jpeg" />-->
        <img id="icon-profile" src="https://tiendapcbox.herokuapp.com/Assets/icons/info.png" />
        <img id="icon-web" src="https://tiendapcbox.herokuapp.com/Assets/icons/micro.png" />
        <img id="icon-email" src="https://tiendapcbox.herokuapp.com/Assets/icons/link.png" />
        <!--<img id="icon-location" src="https://tiendapcbox.herokuapp.com/Assets/icons/micro.png" />-->
        <a-asset-item id="avatarModel" src="https://tiendapcbox.herokuapp.com/Assets/modelos/laptop.glb"></a-asset-item>
      </a-assets>

      <a-camera position="0 0 0" look-controls="enabled: false" 
        cursor="fuse: false; rayOrigin: mouse;" raycaster="far: 10000; objects: .clickable">
      </a-camera>

      <a-entity id="mytarget" mytarget mindar-image-target="targetIndex: 0">

        <a-gltf-model id="avatar" rotation="0 0 0" position="0 0 0.1" scale="0.05 0.05 0.05" src="#avatarModel" animation-mixer></a-gltf-model>

        <!--<a-plane src="#card" position="0 0 0" height="0.552" width="1" rotation="0 0 0"></a-plane>-->
        
        <a-entity visible=false id="portfolio-panel" position="0 0 -0.01">
        <a-text id="text" class="clickable" value="" color="black" align="center" width="2" position="0 0.05 0" geometry="primitive:plane; height: 0.1; width: 2;" material="opacity: 0.5"></a-text>
         <!-- <a-text value="BIENVENIDOS" color="blue" align="center" width="2" position="0 0.4 0"></a-text>-->
        </a-entity>

        <a-image visible=false id="micro" class="clickable" src="#icon-web" alpha-test="0.5" position="-0.14 -0.5 0" height="0.15" width="0.15"
          animation="property: scale; to: 1.2 1.2 1.2; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate"
        ></a-image>
        <a-image visible=false id="profile-button" class="clickable" src="#icon-profile" position="-0.42 -0.5 0" height="0.15" width="0.15"
          animation="property: scale; to: 1.2 1.2 1.2; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate"
        ></a-image>
        <a-image visible=false id="email-button" class="clickable" src="#icon-email"  position="0.14 -0.5 0" height="0.15" width="0.15"
          animation="property: scale; to: 1.2 1.2 1.2; dur: 1000; easing: easeInOutQuad; loop: true; dir: alternate"
        ></a-image>

        <!--<a-text id="text" class="clickable" value="" color="black" align="center" width="2" position="0 -1 0" geometry="primitive:plane; height: 0.1; width: 2;" material="opacity: 0.5"></a-text>-->
      </a-entity>
    </a-scene>

    
     
    <script>
    window.contador=0;
    window.contadorcubogrande=0;
      var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition
      var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList
      var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent

      var arreglovoz = [ 'Hola asistente',
              'Gracias asistente',
              'asistente es todo por ahora',
              'asistente me puedes decir el precio de la laptop',
              'asistente Con qué sistema operativo cuenta la laptop',
              'asistente con Qué procesador cuenta la laptop',
              'asistente Cuál es su capacidad del disco duro',
              'asistente me puedes decir el modelo de la laptop'];

var grammar = '#JSGF V1.0; grammar arreglovoz; public <arreglovoz> = ' + arreglovoz.join(' | ') + ' ;'

var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
speechRecognitionList.addFromString(grammar, 1);
recognition.grammars = speechRecognitionList;
recognition.continuous = false; 
/* IDIOMA A SELECCIONAR EN ESTE CASO ESTA EN ESPAÑOL COLOMBIA PERO SE PUEDEN SELECCIONAR DE LA LISTA QUE GOOGLE TENGA*/
recognition.lang = 'es-CO';
/* FINALIZA LA SELECCION DE IDIOMA*/
recognition.interimResults = false;
recognition.maxAlternatives = 1;
/* VARIABLE RELACIONADA A LAS LINEAS 405 A 415*/
var diagnostic = document.querySelector('#text');
var vozHTML= '';
arreglovoz.forEach(function(v, i, a){
  console.log(v, i);
  
});

window.onload = function() {
  function micro(){
 recognition.start();
 console.log('Estoy lista para escuchar.');
}
document.getElementById('micro').onclick = micro;

}
recognition.onresult = function(event) {
  var voz = event.results[0][0].transcript;
  diagnostic.setAttribute('value', 'Dijiste: ' + voz + '.' );
  bg = voz;
  var bg = document.querySelector('caja');  
  //VISUALIZO EN CONSOLA
  console.log(bg);
  console.log(voz);
// INTERACCIONES INICIALES PARA HACER MEJOR LA CONVERSACION PERO NO TIENEN NADA QUE VER CON AR
if(voz === 'Hola asistente'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('Hola, Bienvenido a PC BOX ya estoy listo para ayudarte en lo que necesites')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
  if(voz === 'Gracias asistente'){
    console.log("Estan dando las gracias");
    let utterance = new SpeechSynthesisUtterance('De nada amigo, gustas que te ayude con algo mas?')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)   
}
  if(voz === 'asistente es todo por ahora'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('De nada, es un gusto proporcionarte informacion sobre tu producto, si gustas puedes redireccionarte a la pagina de compra ')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
  if(voz === 'asistente me puedes decir el precio de la laptop'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('Por supuesto, tiene un costo de diez mil novecientos noventa y nueve pesos, si te apresuras pueden encontrar alguna promoción')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
  if(voz === 'asistente Con qué sistema operativo cuenta la laptop'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('La laptop cuenta con el sistema operativo de Windows diez, muy eficaz por cierto')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
if(voz === 'asistente con Qué procesador cuenta la laptop'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('Claro, su procesador es Intel Pentium Gold 54 05 U, lo mejor en tecnologia para ti')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
if(voz === 'asistente Cuál es su capacidad del disco duro'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('Su capacidad es de docientos cincuenta y seis Gigabytes, puedes alamcenar mucha información con esa capacidad')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
if(voz === 'asistente me puedes decir el modelo de la laptop'){
    console.log("Hola, estas saludando!");
    let utterance = new SpeechSynthesisUtterance('El modelo de la laptop es Laptop HP 14-cf2512 l a, de lo mejor en el tecnologia')
    utterance.lang = 'es-MX'
    speechSynthesis.speak(utterance)     
}
console.log('Confidence: ' + event.results[0][0].confidence);
}
recognition.onspeechend = function() {
  recognition.stop();
}
recognition.onnomatch = function(event) {
  diagnostic.setAttribute('value', 'No puedo escucharte claramente, por favor repite lo que dijiste amigo' );
}
recognition.onerror = function(event) {
  diagnostic.setAttribute('value', 'Ocurrio un error al escucharte: ' + event.error);
}
 </script>

    </div>
  </body>
</html>