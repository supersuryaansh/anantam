<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/about.css" />
    <link rel="tab icon" href="./assets/images/icon/ANANTAMLOGO.svg" />
    <title>Problem Statements</title>
</head>
<body>
<img class="bg--img" src="./assets/images/about--img.png"/>
<div class="main--menuPage">
    <button class="menu--close-btn">
        <img src="../assets/images/icon/closeBtn.svg" alt="" />
    </button>
    <div class="menuPage--content">
        <img src="../assets/images/menuPageLine/lt-corner.svg" alt="" />
        <a href="./sponsors.php">SPONSORS</a>
        <img src="../assets/images/menuPageLine/rt-corner.svg" alt="" />
        <a href="./developer.php">DEVELOPERS</a>
        <img
            class="logo--img"
            src="../assets/images/icon/BLACK LOGO.svg"
            alt="" />
        <a href="./prizepool.php">PRIZE POOL</a>
        <img src="../assets/images/menuPageLine/lb-corner.svg" alt="" />
        <a href="./gallery.php">GALLERY</a>
        <img src="../assets/images/menuPageLine/rb-corner.svg" alt="" />
    </div>
</div>
<nav>
    <img class="line1" src="./assets/images/webLINES/navLine.png" alt="" />
    <span>
        <a href="index.php">
            <img src="./assets/images/icon/LOGO-TYPOGRAPGY.png" alt="" />
            <p class="date--of-event">08 JAN, 2024 - 11 JAN, 2024</p>
        </a>
    </span>
    <button class="nav--btn">
        <img src="./assets/images/icon/menu.svg" alt="" />
    </button>
</nav>
<img
    class="bottom--line"
    src="./assets/images/webLINES/navLine.png"
    alt="" />
<!--    Nav complete  -->
    
<!--     Problem statements start-->
    <style>
  body {
    font-family: sans-serif !important;
    background-color: #f4f4f4;
    margin: 0;

    padding: 0;
  }

  .problem-statements {
    max-width: 1400px;
    padding: 200px 0;
    margin: auto;
    min-height: 500px;
  }

  td>details>p {
    margin-top: 1rem;
    /* font-family: sans-serif !important; */
  }

  td>a {
    color: #111;
    background: #f2be22;
    padding: 0.6rem 2rem;
  }

  table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    padding: 15px;
    color: #f4f4f4;
    font-family: sans-serif !important;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  td button {
    padding: 10px 20px;
    background-color: transparent;
    border: 2px solid var(--main);
    color: var(--main);
    transition: 0.4s;
    cursor: pointer;
  }

  td button:hover {
    background-color: var(--main);
    color: green;
    cursor: pointer;
  }

  th {
    background-color: #f2be22;
    color: #111;
  }

  tr:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }
</style>

<div class="problem-statements">
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>AN_ID</th>
        <th>CATEGORY</th>
        <th>PROBLEM STATEMENT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td data-index="130" class="event--id">AN001</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
             Communication Gap between management, employees and clients 
            </summary>
            <p>
              Communication gap among management, employees, and clients. The management lacks awareness of ground-level processes, while simultaneously remaining unaware of the issues faced by employees and clients. Conversely, employees and clients may experience difficulty in communicating their problems, and the management is unaware of the effectiveness of employee performance or client satisfaction. This creates ambiguity regarding whether the company or institute is successfully fulfilling its vision and mission.


            </p>
          </details>
        </td>
        <!-- <td><button class="AN--btn">APPLY</button></td> -->
        <!--  -->
      </tr>

      <tr>
        <td>2</td>
        <td data-index="212">AN002</td>
        <td>Software</td>

        <td>
          <details>
            <summary>Interactive Learning Platform</summary>
            <p>
            Develop a platform that enhances interactive learning experiences for students, incorporating features like virtual labs, quizzes, and collaborative projects to make learning more engaging.


            </p>
          </details>
        </td>
        
      </tr>

      <tr>
        <td>3</td>
        <td data-index="321">AN003</td>
        <td>Software</td>

        <td>
          <details>
            <summary>
              Gamified Learning for Skill Development
            </summary>
            <p>
              Build a gamified platform that helps students develop specific skills (e.g., coding, critical thinking, problem-solving) in an enjoyable and interactive way.
            </p>
          </details>
        </td>
        
      </tr>
      <tr>
        <td>4</td>
        <td data-index="135">AN004</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
              Parent-Teacher Communication Platform
            </summary>
            <p>
              Build a communication platform that facilitates effective and transparent communication between parents and teachers, allowing real-time updates on student progress, events, and educational resources.


            </p>
          </details>
        </td>
        
      </tr>

      <tr>
        <td>5</td>
        <td data-index="234">AN005</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
              Open Educational Resources (OER) Enhancement
            </summary>
            <p>
             Improve the accessibility and usability of open educational resources, making it easier for educators to find, share, and collaborate on high-quality educational materials.


            </p>
          </details>
        </td>
        

        <!--Market Access for Small Farmers-->
      </tr>

      <tr>
        <td>6</td>
        <td data-index="594">AN006</td>
        <td>Hardware</td>
        <td>
          <details>
            <summary>
              Market Access for Small Farmers
            </summary>
            <p>
             Create a platform that connects small-scale farmers with local markets, providing them with information on demand, fair pricing, and logistics to improve their market access and profitability.


            </p>
          </details>
        </td>
        

        <!-- Centralized Monitoring System for Street Light Fault Detection and Location Tracking -->
      </tr>

      <tr>
        <td>7</td>
        <td data-index="669">AN008</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
             Supply Chain Optimization
            </summary>
            <p>
             Design solutions that optimize the agricultural supply chain, reducing waste, improving distribution efficiency, and ensuring fair compensation for farmers throughout the chain.


            </p>
          </details>
        </td>
        

        <!-- Centralized Monitoring System for Street Light Fault Detection and Location Tracking -->
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>
<script>
  const applyBtn = document.querySelectorAll(".AN--btn");

  function idRetrieve() {
    applyBtn.forEach((elem) => {
      elem.addEventListener("click", function(e) {
        e.preventDefault();
        const closestEventId = elem.closest(".event--id");
        const eventIdInput = closestEventId.querySelector(".AN--btn"); // Replace with the actual class of your input field
        const eventId = eventIdInput.value;
        console.log(eventId);
      });
    });
  }

  idRetrieve();
</script>
<!--Problem statements end  -->
    
<!--Footet start-->
<footer>
    <div class="maker--logo">
        <span>
          <a href=""><img src="./assets/images/icon/IEEE.png" alt="" /></a>
          <a
              href="https://gdsc.community.dev/b-k-birla-institute-of-engineering-technology-pilani/"
          ><img class="gdsc--logo" src="./assets/images/icon/GDSC.svg" alt=""
              /></a>
          <a href="https://bkbiet.ac.in/"
          ><img class="bkbiet--logo" src="./assets/images/icon/BKBIET.png" alt=""
              /></a>
        </span>
    </div>
    <div class="footer--content">
        <span class="links">
          <h1>LINKS</h1>
          <a href="/events.php">events</a>
          <a href="/register.php">registration</a>
          <a href="">developers</a>
          <a href="">prize pool</a>
          <a href="">sponsors</a>
          <a href="fnq.php">F&Q</a>
        </span>
        <span class="contacts">
          <h1>CONTACT US</h1>
          <div>
            <span>
              <h2>Mr. Sachin</h2>
              <p>Chairperson, IEEE BKBIET SB</p>
              <a href="tel:+91-9772541952"
              ><img
                      src="/assets/images/icon/PHONE.png"
                      alt="" />+91-9772541952</a
              >
            </span>
            <span>
              <h2>Mr. Aditya Sharma</h2>
              <p>Lead, GDSC BKBIET</p>
              <a href="tel:+91-8250639553 "
              ><img
                      src="/assets/images/icon/PHONE.png"
                      alt="" />+91-8250639553</a
              >
            </span>
          </div>
          <a href="mailto:anantam@bkbiet.ac.in" class="mail" target="_blank"
          ><img
                  src="./assets/images/icon/gmail.png"
                  alt="" />anantam@bkbiet.ac.in</a
          >
        </span>
        <span class="address">
          <h1>ADDRESS</h1>
          <a  href="https://maps.app.goo.gl/TUQJHh7gtAHLH32W7"
          >B K Birla Institute of Engineering and Technology, Ceeri Road,
            Jhunjhunu, Pilani, Rajasthan 333031</a
          >
          <a href="https://bkbiet.ac.in/" target="_blank" class="mail"
          >https://bkbiet.ac.in/</a
          >
        </span>
    </div>
    <div class="social--links">
        <a href="mailto:anantam@bkbiet.ac.in"><img src="./assets/images/icon/gmail.png" alt="" /></a>
        <a href="https://www.instagram.com/bkbiet.anantam/"><img src="./assets/images/icon/instagram.png" alt="" /></a>
    </div>
    <p class="copyright">&COPY; made by ANANTAM TEAM, with 💓💓💓</p>
</footer>
<script src="./js/registration.js"></script>
</body>
</html>
