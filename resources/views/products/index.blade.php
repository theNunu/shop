<h2>cc
  wazaa
</h2>
<style>
  body {
    font-family: Arial, sans-serif;
    padding: 20px;
  }

  /* Aplica a todas las imágenes */
  img {
    width: 200px;
    /* Ancho por defecto */
    height: auto;
    /* Mantiene la proporción */
  }

  /*-----------------------*/

  /* From Uiverse.io by SachinKumar666 */
  .card {
    --card-bg: #ffffff;
    --card-accent: #7c3aed;
    --card-text: #1e293b;
    --card-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);

    width: 230px;
    /* height: 270px; */
    /* POR ESTO: */
    min-height: 254px;
    /* Altura mínima, pero puede crecer */
    /* height: auto; */
    /* Permite que el contenido dicte el tamaño */
    background: var(--card-bg);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: var(--card-shadow);
    border: 1px solid rgba(94, 94, 94, 0.2);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, sans-serif;
  }

  .card__shine {
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg,
        rgba(255, 255, 255, 0) 40%,
        rgba(255, 255, 255, 0.8) 50%,
        rgba(255, 255, 255, 0) 60%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .card__glow {
    position: absolute;
    inset: -10px;
    background: radial-gradient(circle at 50% 0%,
        rgba(124, 58, 237, 0.3) 0%,
        rgba(124, 58, 237, 0) 70%);
    opacity: 0;
    transition: opacity 0.5s ease;
  }

  .card__content {
    padding: 1.25em;
    height: auto;
    display: flex;
    flex-direction: column;
    gap: 0.75em;
    position: relative;
    z-index: 2;
  }

  .card__badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #10b981;
    color: white;
    padding: 0.25em 0.5em;
    border-radius: 999px;
    font-size: 0.7em;
    font-weight: 600;
    transform: scale(0.8);
    opacity: 0;
    transition: all 0.4s ease 0.1s;
  }

  .card__image {
    width: 100%;
    height: 100px;
    background: linear-gradient(45deg, #a78bfa, #8b5cf6);
    border-radius: 12px;
    transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
  }

  .card__image::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 30% 30%,
        rgba(255, 255, 255, 0.1) 0%,
        transparent 30%),
      repeating-linear-gradient(45deg,
        rgba(139, 92, 246, 0.1) 0px,
        rgba(139, 92, 246, 0.1) 2px,
        transparent 2px,
        transparent 4px);
    opacity: 0.5;
  }

  .card__text {
    display: flex;
    flex-direction: column;
    gap: 0.25em;
  }

  .card__title {
    color: var(--card-text);
    font-size: 1.1em;
    margin: 0;
    font-weight: 700;
    transition: all 0.3s ease;
  }

  .card__description {
    color: var(--card-text);
    font-size: 0.75em;
    margin: 0;
    opacity: 0.7;
    transition: all 0.3s ease;
  }

  .card__footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
  }

  .card__price {
    color: var(--card-text);
    font-weight: 700;
    font-size: 1em;
    transition: all 0.3s ease;
  }

  .card__button {
    width: 28px;
    height: 28px;
    background: var(--card-accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    transform: scale(0.9);
  }

  /* Hover Effects */
  .card:hover {
    transform: translateY(-10px);
    box-shadow:
      0 20px 25px -5px rgba(0, 0, 0, 0.1),
      0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border-color: rgba(124, 58, 237, 0.2);
  }

  .card:hover .card__shine {
    opacity: 1;
    animation: shine 3s infinite;
  }

  .card:hover .card__glow {
    opacity: 1;
  }

  .card:hover .card__badge {
    transform: scale(1);
    opacity: 1;
    z-index: 1;
  }

  .card:hover .card__image {
    transform: translateY(-5px) scale(1.03);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  }

  .card:hover .card__title {
    color: var(--card-accent);
    transform: translateX(2px);
  }

  .card:hover .card__description {
    opacity: 1;
    transform: translateX(2px);
  }

  .card:hover .card__price {
    color: var(--card-accent);
    transform: translateX(2px);
  }

  .card:hover .card__button {
    transform: scale(1);
    box-shadow: 0 0 0 4px rgba(11, 194, 130, 0.2);
  }

  .card:hover .card__button svg {
    animation: pulse 1.5s infinite;
  }

  /* Active State */
  .card:active {
    transform: translateY(-5px) scale(0.98);
  }

  /* Animations */
  @keyframes shine {
    0% {
      background-position: -100% 0;
    }

    100% {
      background-position: 200% 0;
    }
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.2);
    }

    100% {
      transform: scale(1);
    }
  }

  .fondo {
    background: #baa4dd;
    padding: 20px;

  }

  /*wazaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa*/

  /* Contenedor flex */
  .contenedor {  /* to make espacios entre las tarjetas CLAVE*/
    display: flex;
    /* Activa flexbox */
    gap: 40px;
    /* Espacio entre tarjetas */
    flex-wrap: wrap;
    /* Permite que bajen si no caben */
  }

  /* Estilo de las tarjetas  TARHETA HAY QUE ELIMINARLO*/
  .tarjeta {
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    width: 250px;
    /* Ancho fijo */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  /* Estilo de las tarjetas  TARHETA HAY QUE ELIMINARLO*/

  .tarjeta h3 {
    margin-top: 0;
  }

  /*                ---------------------------   carrusel  -------------------------- */

  .slider-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    /* Oculta las tarjetas que se salen */
    padding: 20px 0;
  }

  .slider-wrapper {
    display: flex;
    /* Pone las tarjetas una al lado de la otra */
    gap: 20px;
    padding: 10px;
    scroll-behavior: smooth;
    overflow-x: auto;
    /* Permite scroll manual en móviles */
    scrollbar-width: none;
    /* Oculta la barra de scroll en Firefox */
  }

  .slider-wrapper::-webkit-scrollbar {
    display: none;
    /* Oculta la barra de scroll en Chrome/Safari */
  }

  .card-item {
    flex: 0 0 auto;
    /* Evita que las tarjetas se encojan */
  }

  /* Estilo de las flechas */
  .arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: white;
    border: 1px solid #ddd;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    z-index: 10;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background 0.3s;
  }

  .arrow:hover {
    background: #f5f5f5;
  }

  .prev {
    left: 10px;
  }

  .next {
    right: 10px;
  }
</style>

<body>

  <h2>Tarjetas lado a lado</h2>

  <div class="contenedor">
    <div class="tarjeta">
      <h3>Tarjeta 1</h3>
      <p>Contenido de la tarjeta 1.</p>
    </div>
    <div class="tarjeta">
      <h3>Tarjeta 2</h3>
      <p>Contenido de la tarjeta 2.</p>
    </div>
  </div>



  <div class="container">
    <h1>Product Catalog</h1>
    <div class="row contenedor">
      @foreach ($products as $product)
        <div class="col-md-4 ">
          <div class="cardd ">
            <img src="{{ $product->image }}" class="card-img-top"
              alt="{{ $product->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <p class="card-text">${{ $product->price }}</p>
              <a href="{{ route('products.show', $product->product_id) }}"
                class="btn btn-primary">View Product</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>


    <div>
      <div class="container">
        <h1>Product Catalog</h1>
        <div class="row contenedor">
          @foreach ($products as $product)
            <div class="card">
              <div class="card__shine"></div>
              <div class="card__glow"></div>
              <div class="card__content">
                <div class="card__badge">NUEVO</div>
                {{-- <div style="--bg-color: #a78bfa" class="card__image"></div> --}}
                <img src="{{ $product->image }}" class="card-img-top"
                  alt="{{ $product->name }}">
                <div class="card__text">
                  <p class="card__title">{{ $product->name }}</p>
                  <p class="card__description">{{ $product->description }}</p>
                  <a href="{{ route('products.show', $product->product_id) }}"
                    class="btn btn-primary">View Product</a>
                </div>
                <div class="card__footer">
                  <div class="card__price">${{ $product->price }}</div>
                  <div class="card__button">
                    <svg height="16" width="16" viewBox="0 0 24 24">
                      <path stroke-width="2" stroke="currentColor"
                        d="M4 12H20M12 4V20" fill="currentColor"></path>
                    </svg>

                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>


    tilinnn
  </div>

  <div class="slider-container">
    <button class="arrow prev" onclick="moveSlider(-1)">&#10094;</button>

    <div class="slider-wrapper" id="slider-track">
      @foreach ($products as $product)
        <div class="slider-card-item">
          <div class="card">
            <div class="card__shine"></div>
            <div class="card__glow"></div>
            <div class="card__content">
              <div class="card__badge">NUEVO</div>
              {{-- <div style="--bg-color: #a78bfa" class="card__image"></div> --}}
              <img src="{{ $product->image }}" class="card-img-top"
                alt="{{ $product->name }}">
              <div class="card__text">
                <p class="card__title">{{ $product->name }}</p>
                <p class="card__description">{{ $product->description }}</p>
                <a href="{{ route('products.show', $product->product_id) }}"
                  class="btn btn-primary">View Product</a>
              </div>
              <div class="card__footer">
                <div class="card__price">${{ $product->price }}</div>
                <div class="card__button">
                  <svg height="16" width="16" viewBox="0 0 24 24">
                    <path stroke-width="2" stroke="currentColor"
                      d="M4 12H20M12 4V20" fill="currentColor"></path>
                  </svg>

                </div>
              </div>
            </div>
          </div>

        </div>
      @endforeach
    </div>

    <button class="arrow next" onclick="moveSlider(1)">&#10095;</button>
  </div>

  <script>
    function moveSlider(direction) {
      const track = document.getElementById('slider-track');

      // 1. Verificamos que el contenedor exista
      if (!track) {
        console.error(
          "Error: No se encontró el ID 'slider-track'. Revisa tu HTML.");
        return;
      }

      // 2. Buscamos la primera tarjeta para medirla
      const card = track.querySelector('.slider-card-item');

      if (card) {
        // Medimos el ancho de la tarjeta + el espacio (gap)
        const style = window.getComputedStyle(track);
        const gap = parseInt(style.columnGap) || 20;
        const scrollAmount = (card.offsetWidth + gap) * 2; // Mover de 2 en 2

        track.scrollBy({
          left: direction * scrollAmount,
          behavior: 'smooth'
        });
      } else {
        console.warn(
          "No se encontraron tarjetas con la clase '.slider-card-item'");
      }
    }
  </script>

  <h2>funcionaaaaaaaaaaa</h2>

</body>
