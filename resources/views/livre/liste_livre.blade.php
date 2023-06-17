<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
*,
::before,
::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  background: #ff6c00;
}

.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 10px;
}
h1 {
  text-align: center;
  margin: 50px 0;
}
.list-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, 200px);
  grid-gap: 40px;
  justify-content: center;
}
.card {
  border-radius: 3px;
  height: 275px;
  overflow: hidden;
  /* background: royalblue; */
}
.card a {
  text-decoration: none;
}
.circle-container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  transform-origin: top;
  transition: transform 0.4s ease-out;
  aspect-ratio: 1 / 1;
}
.card:hover .circle-container {
  transform: scale(0.5);
}
.circle {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(0,0,0,0.04);
}
.circle-container img {
  width: 70%;
  height: 70%;
}
.circle, 
.circle-container img {
  position: absolute;
}
.card h2 {
  text-align: center;
  color: #333;
  margin: 25px 0;
  transition: transform 0.4s ease-out;
}

.card ul {
  list-style-type: none;
  border-top: 1px solid #ff6c00;
  padding: 10px;
  transition: transform 0.4s ease-out;
}

.card:hover h2,
.card:hover ul {
  transform: translateY(-105px);
}

.card li {
  padding: 5px;
}
.card li a {
  color: #333;
}
.card li:hover {
  background: rgba(51,51,51,0.067);
}



@media (max-width: 772px),  (pointer: coarse) {
  .card {
    height: auto;
    box-shadow: 0 5px 5px rgba(20, 20, 20, 0.17);
  }
  .circle-container {
    width: 50%;
    margin: 10px auto 0;
  }
  .card h2 {
    margin: 10px 0;
    font-size: 20px;
  }
  .card:hover h2,
  .card:hover ul,
  .card:hover .circle-container {
    transform: none;
  }
}
</style>

<main class="container">

    <h1>LISTE DES MAGASINS JEUNE MAG</h1>
    <button > <a href="{{ url('/acceuil') }}"><i class="bi bi-sign-turn-left-fill" style="color: #ff6c00; width: 20em;"></i></a></button>

    <section>
      <br>
      <ul class="list-container">
        <li class="card">
          <a href="#">
            <div class="circle-container">
              <div class="circle"></div>
              <img src="assets/files/pages/1.jpg" alt="">
            </div>
            <h2>JE SUIS JEUNE</h2>
          </a>
          <ul>
            <li><a href="{{ url('/magasins') }}" target="_blanK">SAISON 1</a></li>
            <li><a href="#">SAISON 2</a></li>
            <li><a href="#">SAISON 3</a></li>
          </ul>
        </li>
        <li class="card">
          <a href="#">
            <div class="circle-container">
              <div class="circle"></div>
            <img src="assets/files/pages/1.jpg" alt="">
            </div>
            <h2>JE SUIS JEUNE</h2>
          </a>
          <ul>
            <li><a href="{{ url('/magasins') }}" target="_blanK">SAISON 1</a></li>
            <li><a href="#">SAISON 2</a></li>
            <li><a href="#">SAISON 3</a></li>
          </ul>
        </li>
        <li class="card">
          <a href="#">
            <div class="circle-container">
              <div class="circle"></div>
            <img src="assets/files/pages/1.jpg" alt="">
            </div>
            <h2>JE SUIS JEUNE</h2>
        </a>
        <ul>
          <li><a href="{{ url('/magasins') }}" target="_blanK">SAISON 1</a></li>
          <li><a href="#">SAISON 2</a></li>
          <li><a href="#">SAISON 3</a></li>
        </ul>
        </li>
        <li class="card">
          <a href="#">
            <div class="circle-container">
              <div class="circle"></div>
            <img src="assets/files/pages/1.jpg" alt="">
            </div>
            <h2>JE SUIS JEUNE</h2>
        </a>
        <ul>
          <li><a href="{{ url('/magasins') }}" target="_blanK">SAISON 1</a></li>
          <li><a href="#">SAISON 2</a></li>
          <li><a href="#">SAISON 3</a></li>
        </ul>
        </li>
      </ul>
    
    </section>
  </main>
 