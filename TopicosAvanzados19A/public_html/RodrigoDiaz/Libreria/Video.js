/** 
 * Video de fondo completo
 *
 * Más información sobre Audio / Video Eventos / Atributos / Métodos
 * - https://developer.mozilla.org/en-US/docs/Web/Guide/Events/Media_events
 * - http://www.w3schools.com/tags/ref_av_dom.asp
 */

(function (global) {

  // Definir el constructor Video en el objeto global.
  global.Bideo = function () {

     // opciones de plugin
    this.opt = null;
    // El elemento Video
    this.videoEl = null;

   // Tasa de carga aproximada
    //
    // El valor será un número como 0.8
    // lo que significa cargar 4 segundos del video
    // Tarda 5 segundos. Si el número es super bajo
    // como 0.2 (conexiones regulares de 3g) entonces puedes
    // decide si reproducir el video o no.
    // Este comportamiento será controlador con
    // la opción 'acceptableLoadingRate`.
    this.approxLoadingRate = null;

    // Métodos a los que se enlazará `this`.
    this._resize = null;
    this._progress = null;

    // Hora en que se inicializa el video
    this.startTime = null;

    this.onLoadCalled = false;

// Inicializar y configurar el video en DOM``
    this.init = function (opt) {
      // Si no se configura, establezca un objeto vací
      this.opt = opt = opt || {};

      var self = this;

      self._resize = self.resize.bind(this);

      // Elemento de video
      self.videoEl = opt.videoEl;

      // Meta data event
      self.videoEl.addEventListener('loadedmetadata', self._resize, false);

      // Se dispara cuando se ha almacenado lo suficiente para comenzar el video.
      // self.videoEl.readyState === 4 (HAVE_ENOUGH_DATA)
      
      self.videoEl.addEventListener('canplay', function () {
        // Reproducir el video cuando se haya almacenado suficiente.
        if (!self.opt.isMobile) {
          self.opt.onLoad && self.opt.onLoad();
          if (self.opt.autoplay !== false) self.videoEl.play();
        }
      });

      // Si es necesario cambiar el tamaño (cambiar el tamaño del video como tamaño de la ventana / contenedor)
      if (self.opt.resize) {
        global.addEventListener('resize', self._resize, false);
      }

      // Hora de inicio de la inicialización del video
      this.startTime = (new Date()).getTime();

      // Crear `source` para video
      this.opt.src.forEach(function (srcOb, i, arr) {
        var key
          , val
          , source = document.createElement('source');

          // Establecer todas las claves de atributo = val suministradas en la opción `src`
        for (key in srcOb) {
          if (srcOb.hasOwnProperty(key)) {
            val = srcOb[key];

            source.setAttribute(key, val);
          }
        }

        self.videoEl.appendChild(source);
      });

      if (self.opt.isMobile) {
        if (self.opt.playButton) {
          self.opt.videoEl.addEventListener('timeupdate', function () {
            if (!self.onLoadCalled) {
              self.opt.onLoad && self.opt.onLoad();
              self.onLoadCalled = true;
            }
          });


          self.opt.playButton.addEventListener('click', function () {
            self.opt.pauseButton.style.display = 'inline-block';
            this.style.display = 'none';

            self.videoEl.play();
          }, false);

          self.opt.pauseButton.addEventListener('click', function () {
            this.style.display = 'none';
            self.opt.playButton.style.display = 'inline-block';

            self.videoEl.pause();
          }, false);
        }
      }

      return;
    }

   // Llamado una vez que los metadatos de video están disponibles
    //
    // También se llama cuando se cambia el tamaño de la ventana / contenedor
    this.resize = function () {
      // IE / Edge todavía no admite el ajuste de objetos: cubierta
      if ('object-fit' in document.body.style) return;

   // Dimensiones intrínsecas del video.
      var w = this.videoEl.videoWidth
        , h = this.videoEl.videoHeight;

      // Proporción intrínseca
      // Será más de 1 si W> H y menos si H> W
      var videoRatio = (w / h).toFixed(2);

      // Obtener el elemento DOM contenedor y sus estilos
      //
      // También calcule las dimensiones mínimas requeridas (esto será
      // las dimensiones del contenedor)
      var container = this.opt.container
        , containerStyles = global.getComputedStyle(container)
        , minW = parseInt( containerStyles.getPropertyValue('width') )
        , minH = parseInt( containerStyles.getPropertyValue('height') );

      // Si! Border-box entonces agregue rellenos al ancho y alto
      if (containerStyles.getPropertyValue('box-sizing') !== 'border-box') {
        var paddingTop = containerStyles.getPropertyValue('padding-top')
          , paddingBottom = containerStyles.getPropertyValue('padding-bottom')
          , paddingLeft = containerStyles.getPropertyValue('padding-left')
          , paddingRight = containerStyles.getPropertyValue('padding-right');

        paddingTop = parseInt(paddingTop);
        paddingBottom = parseInt(paddingBottom);
        paddingLeft = parseInt(paddingLeft);
        paddingRight = parseInt(paddingRight);

        minW += paddingLeft + paddingRight;
        minH += paddingTop + paddingBottom;
      }

      // ¿Cuál es el min: dimensiones intrínsecas?
      //
      // La idea es obtener cual de la dimensión del contenedor.
      // tiene un valor mayor en comparación con los equivalentes
      // del video. Imagina un contenedor de 1200x700 y
      // 1000x500 video. Entonces para encontrar el equilibrio adecuado.
      // y hacer escalamiento mínimo, tenemos que encontrar la dimensión
      // con mayor ratio.
      //
      // Ej .: 1200/1000 = 1.2 y 700/500 = 1.4 - Por lo tanto, es mejor
      // escala 500 a 700 y luego calcula lo que debería ser el
      // ancho derecho. Si escalamos 1000 a 1200 entonces la altura
      // se convertirá en 600 proporcionalmente.
      var widthRatio = minW / w;
      var heightRatio = minH / h;

       // Cuanta razón es más, la escala
      // tiene que hacerse sobre esa dimensión
      if (widthRatio > heightRatio) {
        var new_width = minW;
        var new_height = Math.ceil( new_width / videoRatio );
      }
      else {
        var new_height = minH;
        var new_width = Math.ceil( new_height * videoRatio );
      }

      this.videoEl.style.width = new_width + 'px';
      this.videoEl.style.height = new_height + 'px';
    };

  };

}(window));