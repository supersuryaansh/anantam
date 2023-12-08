<?php
if (!isset($_GET['problemId'])){
?>
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

  td > details > p {
    margin-top: 1rem;
    /* font-family: sans-serif !important; */
  }

  td > a {
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
        <td data-index="130" class="event--id">AN130</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
              Development of software application for analysis and processing of
              dvbs2 receiver output stream i.e., raw BB Frames, GSE and TS in
              near real time.
            </summary>
            <p>
              Classification & identification of audio, video, data & protocol
              such as MPE, ULE, SIP, RTP, FTP, SFTP, HTTP, HTTPS, SNMP, POP,
              SMTP, SSH etc. 2. Classification Identification of
              encryption/scrambling if present in stream through headers and SI
              tables 3. Extraction of VoIP calls, audio and video programs,
              file, email, web-page etc in separate files. 4. Decoding and
              playing selected audio/video contents Preferred Language- Python,
              Lab-view, C/C++, VHDL/Verilog Expected Outcome-
              Algorithm/Software/GUI Preferred Platform- Windows/Linux
            </p>
          </details>
        </td>
        <!-- <td><button class="AN--btn">APPLY</button></td> -->
        <td><button>APPLY</button></td>
      </tr>

      <tr>
        <td>2</td>
        <td data-index="212">AN212</td>
        <td>Software</td>

        <td>
          <details>
            <summary>Change detection due to human activities.</summary>
            <p>
              Using satellite imagery, create an automated system for detecting
              change related only to human activities from satellite imagery.
              i.e. Develop AI/ML based model for change detection of only
              man-made objects like vehicles, buildings, roads, aircraft etc.
              from remote sensing images Data: Sentinel-2, LISS-4
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>
      </tr>

      <tr>
        <td>3</td>
        <td data-index="321">AN321</td>
        <td>Software</td>

        <td>
          <details>
            <summary>
              Smart and Effective realtime Management of street parking
            </summary>
            <p>
              ln lndia, the number of vehicles is constanfly on the rise, while
              the availability of parking space in cities has not kept pace with
              the increasing vehicle numbers, primarily due to the rapid groMh
              in population. Consequenfly, issues such as traffic congestion,
              narrowed streets due to on-street parking, a mismatch between
              parking supply and demand, and illegal parking have become all too
              familiar in lndian cities. Parking space has become a scarce
              commodity, and instead of simply increasing the number of
              available parking spaces, it is crucial to employ effective
              technology-based solutions to optimize their utilization. Smart
              parking solutions, utilizing sensors and software, can provade
              realtime information on available parking spaces to both city
              officials and drivers. Furthermore, leveraging emerging
              technologies can help optimize parking prices. A low parking price
              may encourage more vehicles on the road, leading to increased air
              and noise pollution, whereas too high prices may generate less
              revenue and less efectuve resource usage.Apart from the loss of
              revenue for operators, there is economic downside to the business
              in vicinity, effect on government taxes, employment.At the same
              parking space area and costs also have a corelation to balance
              optimum usage and revenue. Therefore, setting the right price for
              parking based on demand and optimizing occupancy is the best
              approach. The primary objective of the solution should be to equip
              city administrators with an effective parking management tool that
              can predict, manage, and finance parking in cities. An app should
              be developed to allow citizens to conveniently reserve pce king
              spots and make payments based on dynamic pricing This not only
              saves citizens' time spent searching the parking but also reduces
              environmental degradation resulting from congestion caused by
              parking and provides a sustainable source of revenue for the city
              administration. We need an innovative, simple and widely coveraged
              parking needs in the city and also become most compliant for
              Traffic and mobility needs.
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>
      </tr>
      <tr>
        <td>4</td>
        <td data-index="135">AN135</td>
        <td>Software</td>
        <td>
          <details>
            <summary>
              Development of Explainable AI (XAI) based model for prediction of
              heavy /high impact rain events using satellite data
            </summary>
            <p>
              Nowcasting of heavy precipitation rainfall events with an
              understanding of the most important predictors and also an idea as
              to why a certain model can fail. Desired Outcome- The developed
              system shall provide the following: 1. AI based model to predict
              particular rain episodes of greater impact using satellite data
              (INSAT-3D/3DR) . 2. An explainable module into the AI model (XAI)
              3. The final output should be in terms of a web application, with
              associated accuracy of the models worked on and an explainable
              component of the outputs.
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>
      </tr>

      <tr>
        <td>5</td>
        <td data-index="234">ANF234</td>
        <td>Hardware</td>
        <td>
          <details>
            <summary>
              Frequent dislodgement of belt conveyor along hilly terrain for
              various reasons
            </summary>
            <p>
              The 14.6 km long cable belt conveyor passing over complex hilly
              terrain suffers belt dislodgements due to various reasons
              resulting in the sudden loss of production. Solution Desired:
              Capture reasons for belt dislodgements across its 14.6 KM length
              from past data and using suitable ML software, prediction of belt
              dislodgements should be done beforehand to take corrective and
              preventive actions.
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>

        <!-- Centralized Monitoring System for Street Light Fault Detection and Location Tracking -->
      </tr>

      <tr>
        <td>6</td>
        <td data-index="594">ANF594</td>
        <td>Hardware</td>
        <td>
          <details>
            <summary>
              Centralized Monitoring System for Street Light Fault Detection and
              Location Tracking
            </summary>
            <p>
              Electricity is the critical need for progress of the livelihood.ln
              many Indian cities, the maintenance of street lights has become a
              challenging and inefficient process due to the lack of a
              centralized monitoring system. ldentifying faults, such as non-
              functioning lights, current leakage and cable breakage, relies on
              citizen grievances, leading to delays, increased costs, and safety
              concerns. Linemen spend valuable time manually searching for
              faults, diagnosing issues, and fixing them, which can take several
              days to complete. The absence of precise fault location
              information further complicates the process. To overcome these
              obstacles, we seek an innovative solution that provides realtime
              fault detection, accurate identification of fault types, and
              precise location tracking of faulty street lights. This solution
              aims to empower linemen with efficient fault management
              capabilities, reducing their workload and ensuring timely
              maintenance. Moreover, it should enable the local authorities to
              proactively address faults, enhance service quality, and optimize
              street light maintenance processes in their respective cities..The
              prime aim of this problem statement is to develop a "Automated
              Defect Detection and Prevention Assistance with Effective
              Governance for Cities in India"""
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>

        <!-- Centralized Monitoring System for Street Light Fault Detection and Location Tracking -->
      </tr>

      <tr>
        <td>7</td>
        <td data-index="669">ANF669</td>
        <td>Hardware</td>
        <td>
          <details>
            <summary>
              Design of RF Up/Down-converter for signals using GNU Radio and
              SDRs
            </summary>
            <p>
              The 14.6 km long cable belt conveyor passing over complex hilly
              terrain suffers belt dislodgements due to various reasons
              resulting in the sudden loss of production. Solution Desired:
              Capture reasons for belt dislodgements across its 14.6 KM length
              from past data and using suitable ML software, prediction of belt
              dislodgements should be done beforehand to take corrective and
              preventive actions.
            </p>
          </details>
        </td>
        <td><button>APPLY</button></td>

        <!-- Centralized Monitoring System for Street Light Fault Detection and Location Tracking -->
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>
<?php } ?>